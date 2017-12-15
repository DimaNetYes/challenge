<?php

namespace App\Http\Controllers\Users;

use App\Models\Quest;
use App\Models\Team;
use App\Models\Task;
use App\Models\UserTeamQuest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class UsersQuestController extends Controller
{
    public function view()
    {
        $quests = Quest::all()->where('status','>', 0);
        return view('Users.viewQuests', ['quests' => $quests]);
    }

    public function more($id)
    {
        $q = Quest::find($id);
        return view('Users.moreQuest')->with(['q' => $q]);
    }

    protected function play($id)
    {
        if (UserTeamQuest::all()->where('idQuest', '=', $id)->where('idUser', '=', (Auth::user()->id))) {
            return redirect()->action('Users\UsersQuestController@view');
        } else {
            $team = Team::all();
            return view('Users.usersTeamsQuest')->with(['idQuest' => $id, 'team' => $team]);
        }
    }

    protected function ok($id)
    {
        $d = Input::all();
        $data['idTeam'] = $d['input'];
        $data['idUser'] = Auth::user()->id;
        $data['idQuest'] = $id;
        $ok = UserTeamQuest::create($data);
        $ok->save();
        return redirect()->action('Users\UsersQuestController@userProfile');
    }

    protected function userProfile()
    {
        $idUser = Auth::user()->id;
        $quests = UserTeamQuest::where('idUser', '=', $idUser)->get();
        $questGeneral = array();
        $questFuture = array();
        $questLast = array();
        $tasks = array();
        $status = array();
        $questsGeneral = Quest::all()->where('status','=', 1);

       /* foreach ($quests as $key => $value) {
            $idQuest = $value['idQuest'];

            $status[] .= (Quest::where('id', '=', $idQuest)->get())[0]->status;
            $quest[] .= Quest::find($idQuest);
            $tasks[] .= Task::where('idQuest', '=', $idQuest)->get();
        }*/
        return view('Users.usersQuestProfile')->with(['quests' => $quest, 'tasks' => $tasks, 'status' => $status]);
    }
}
