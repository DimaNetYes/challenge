<?php

namespace App\Http\Controllers\Admin;

use App\Models\ExecuteTask;
use App\Models\Result;
use App\Models\UserQuest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Quest;
use App\Models\Task;
use App\Models\Team;
use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class AdminQuestController extends Controller
{
    // Открытие страницы с квестами
    protected function show()
    {
        $quests = Quest::all();
        return view('Admin.Quest.viewQuests', ['quests' => $quests]);
    }

    // Открытие формы для создания квеста
    protected function add()
    {
        return view('Admin.Quest.createQuest');
    }

    protected function create()
    {
        $data = Input::all();
        $quest = Quest::create($data);
        $quest->save();
        return redirect()->action('Admin\AdminQuestController@show');
    }

// редактирование квестов
    protected function edit($id)
    {
        $quest = Quest::find($id);
        return view('Admin.Quest.editQuests', ['quest' => $quest]);
    }

    // Обновление квеста
    protected function update($id)
    {
        $data = Input::all();
        $quest = Quest::find($id);
        $quest->name = $data['name'];
        $quest->description = $data['description'];
        $quest->fullDescription = $data['fullDescription'];
        $quest->date = $data['date'];
        $quest->time = $data['time'];
        $quest->status = $data['status'];

        $quest->save();
        return redirect()->action('Admin\AdminQuestController@show');
    }

    // Удаление квеста и его заданий
    protected function delete($id)
    {
        $quest = Quest::where('id', $id);
        $quest->delete();
        $tasks = Task::where('idQuest', '=', $id);
        $tasks->delete();
        return redirect()->action('Admin\AdminQuestController@show');
    }

    // Просчёт результатов текущего квеста
    protected function result()
    {
        $idTeams = array();
        $idQuest = "";

        $quests = Quest::where('status', 1)->get();  // текущий квест
        foreach ($quests as $quest) {
            // команды учавствующие в квесте
            $idQuest = $quest->id;
            $questTeams = Quest::find($idQuest)->teams->unique();
            foreach ($questTeams as $k) {
                $idTeams[] .= $k->id;
            }

            foreach ($idTeams as $team) {                         // для каждой команды:
                $idUser = array();                                 // участники каждой команды
                $exTasks = array();

                $userTeams = UserQuest::ofWhereWhere('idQuest', $idQuest, 'idTeam', $team);
                foreach ($userTeams as $u) {
                    $idUser[] .= $u->id;
                }

                foreach ($idUser as $v) {                          // выполненные!!! задания для команды
                    $exTask = ExecuteTask::ofWhereWhere('idUserQuest', $v, 'status', 1);

                    foreach ($exTask as $e) {
                        $exTasks[] .= $e->id;
                    }
                }

                $result = 0;
                foreach ($exTasks as $val) {
                    $weight = Task::find($val)->weight;
                    $result += 100 * $weight;
                }

                // запись результатов в таблицу results

                $results = Result::updateOrCreate(['idQuest' => $quest->id, 'idTeam' => $team], ['result' => $result]);
                $results->save();
            }

        }

        // $resultQuests = Result::where('idQuest', $idQuest)->get();

        // return view('Admin\Quest\resultQuest')->with(['results' => $resultQuests]);
        return redirect()->action('Admin\AdminQuestController@showResult', ['idQuest' => $idQuest]);
    }

    protected function showResult($idQuest)
    {
        $resultQuests = Result::where('idQuest', $idQuest)->get();
        return view('Admin\Quest\resultQuest')->with(['results' => $resultQuests]);
    }


}
