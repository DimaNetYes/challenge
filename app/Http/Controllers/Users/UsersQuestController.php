<?php

namespace App\Http\Controllers\Users;


use App\Models\ExecuteTask;
use App\Models\Quest;
use App\Models\Team;
use App\Models\Task;
use App\Models\User;
use App\Models\UserQuest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent;
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Facades\Request as Request2;

use Illuminate\Support\Facades\DB;

class UsersQuestController extends Controller
{

    public function view()
    {
        $quests = Quest::where('status', '>', 0)->get();
        return view('Users.viewQuests', ['quests' => $quests]);
    }

    public function more($id)
    {
        $q = Quest::find($id);
        return view('Users.moreQuest')->with(['q' => $q]);
    }

    protected function play($id)
    {
        $u = User::find(Auth::user()->id)->quest($id);
        if (count($u) == 0) {
            $team = Team::all();
            return view('Users.usersTeamsQuest')->with(['idQuest' => $id, 'team' => $team]);

        } else {
            return redirect()->action('Users\UsersQuestController@view');
        }
    }

    protected function editTeam($id)
    {
        $team = Team::all();
        return view('Users.usersTeamsQuest')->with(['idQuest' => $id, 'team' => $team]);
    }

    protected function ok($id)
    {
        $d = Input::all();
        $ok = UserQuest::updateOrCreate(['idUser' => Auth::user()->id, 'idQuest' => $id], ['idTeam' => $d['input']]);
        $ok->save();
        return redirect()->action('Users\UsersQuestController@userProfile');
    }

    protected function userProfile()
    {
        $idUser = Auth::user()->id;
        $questUser = User::find($idUser)->quests;
        $questGeneral = array();
        $questFuture = array();
        $questLast = array();
        $tasksGeneral = array();
        $tasksLast = array();
        $status = "";
        $teamGeneral = "";
        $teamFuture = array();

        foreach ($questUser as $key => $value) {
            $idQuest = $value->id;
            $status = $value->status;

            if ($status == 2) {
                $questFuture[] .= $value;
                $array = User::find($idUser)->teams($idQuest)->get();
                foreach ($array as $k => $v) {
                    $teamId = $v->id;
                    $teamFuture[] .= Team::find($teamId)->name;
                }
            } elseif ($status == 0) {
                $questLast[] .= $value;
                $tasksLast[] .= Quest::find($idQuest)->tasks;
            } elseif ($status == 1) {
                $questGeneral[] .= $value;
                $tasksGeneral[] .= Quest::find($idQuest)->tasks;
                $array = User::find($idUser)->teams($idQuest)->get();
                foreach ($array as $k => $v) {
                    $teamId = $v->id;
                    $teamGeneral = Team::find($teamId)->name;
                }
            }

        }
        return view('Users.usersQuestProfile')->with(['questGeneral' => $questGeneral, 'questFuture' => $questFuture,
            'questLast' => $questLast, 'teamGeneral' => $teamGeneral, 'teamFuture' => $teamFuture, 'tasksGeneral' => $tasksGeneral,
            'tasksLast' => $tasksLast]);
    }


    protected function playQuest($idQuest, $ok = 0)
    {
        $etStatus = "";
        $statusQuest = "";
        $idUsers = array();
        $idTeam = "";
        $idUserQuest = array();
        $idUserQuestOne = "";
        $execTask = "";

        $idUser = Auth::user()->id;
        $status = Quest::find($idQuest)->status;


        if ($status == 1) {                         // проверка текущий квест или нет таблица quests

            // для зашедшего на страницу пользователя команду, статус для команды, id userQuest
            $userQuest = UserQuest::ofWhereWhere('idQuest', $idQuest, 'idUser', $idUser);
            foreach ($userQuest as $v) {
                $statusQuest = $v->statusQuest;
                $idTeam = $v->idTeam;
                $idUserQuestOne = $v->id;
            }

            // все пользователи учавствующие в квесте
            $users = Quest::find($idQuest)->users;
            foreach ($users as $u) {
                $idUQ = UserQuest::ofWhereWhere('idQuest', $idQuest, 'idUser', $u->id);
                foreach ($idUQ as $v) {
                    $idUserQuest[] .= $v->id; // массив id UserQuest для всех пользователей
                }
            }

            if ($statusQuest == 0) {               // если квест активен для команды таблица userQuests
                $tasksQuest = Quest::find($idQuest)->tasks()->orderBy('orderBy', 'Asc')->get();
                $max = $tasksQuest->max('orderBy');


                foreach ($tasksQuest as $key => $value) {
                    //поиск текущей задачи в таблице executeTasks

                    $eT = "";
                    foreach ($idUserQuest as $v) {
                        if (count(ExecuteTask::ofWhereWhere('idTask', $value->id, 'idUserQuest', $v)) != 0) {
                            $eT = ExecuteTask::ofWhereWhere('idTask', $value->id, 'idUserQuest', $v);
                        }
                    }

                    if (!empty($eT)) {

                        foreach ($eT as $val) {
                            $etStatus = $val->status;
                        }

                        if ($etStatus == 1) {
                            if ($value->orderBy != $max) {
                                continue;
                            } elseif ($value->orderBy == $max) {
                                $uQ = UserQuest::ofWhereWhere('idTeam', $idTeam, 'idQuest', $idQuest);
                                foreach ($uQ as $v) {
                                    $v->statusQuest = 1;
                                    $v->save();
                                }
                                return redirect()->route('start');
                            }
                        } else {
                            return view('Users.usersQuestPlay')->with(['task' => $value, 'ok' => $ok]);
                        }
                    } elseif (empty($eT)) {
                        $exTask = new ExecuteTask();// делаем новую запись в табл. executeTasks
                        $exTask->idTask = $value->id;
                        $exTask->idUserQuest = $idUserQuestOne;
                        $exTask->status = 0;
                        $exTask->save();
                        return view('Users.usersQuestPlay')->with(['task' => $value, 'ok' => $ok]); //выводим страничку с этим заданием

                    }
                }
            }
        }

        return redirect()->route('userProfile');
    }

    protected function qrInput($qr, $idTask)
    {
        $idUsers = array();
        $qrCode = Task::find($idTask)->QR;
        $idQuest = Task::find($idTask)->idQuest;
        $idUser = Auth::user()->id;
        $idUserQuest = array();
        $execTask = "";

        $users = Quest::find($idQuest)->users;
        foreach ($users as $u) {
            //   $idUsers[] .= $u->id; // массив id пользователей учавствующих в квесте
            $idUQ = UserQuest::ofWhereWhere('idQuest', $idQuest, 'idUser', $u->id);
            foreach ($idUQ as $v) {
                $idUserQuest[] .= $v->id;
            }
        }

        if ($qr == $qrCode) {
            foreach ($idUserQuest as $v) {
                $eT = ExecuteTask::ofWhereWhere('idTask', $idTask, 'idUserQuest', $v);
                if (count($eT) != 0) {
                    $execTask = ExecuteTask::ofWhereWhere('idTask', $idTask, 'idUserQuest', $v);
                }
            }

            if (count($execTask) > 0) {
                foreach ($execTask as $value) {
                    $value->status = 1;
                    $value->save();
                }
                return redirect('https://quest.challenge.php.a-level.com.ua/');
                //  return redirect()->action('Users\UsersQuestController@playQuest', ['idQuest' => $idQuest, 'ok' => 1]);
            }
        }
        return redirect()->route('start');

    }

}
