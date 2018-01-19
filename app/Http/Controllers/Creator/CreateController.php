<?php

namespace App\Http\Controllers\Creator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Quest;
use App\Models\Task;
use Illuminate\Support\Facades\Input;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class CreateController extends Controller
{

    public function show()
    {
        return view("creator.showQuest");
    }


    public function createQuest(){
        return view('creator.createQuest');
    }

    //добавление Квеста
    public function addQuest(Request $request){
        $data = $request->all();
        $quest = Quest::create($data);
        $quest->save();
        return redirect()->action("Creator\CreateController@createTasks", ["user_id" => $data['user_id']]);
    }

    //количество тасков
    public function createTasks(Request $request){
        $data = $request->all();
        return view("creator.createTasks", ["user_id" => $data]);
    }
    //добавление задач
    public function addTasks(Request $request){
        $number = $request->number;  //количество задач
        $user_id = $request->user_id;
        $user_id*=1;
        $number++;
        return view("creator.addTasks", ["number" => $number, "user_id" => $user_id]);
    }
    //сохранение задач
    public function saveTasks(Request $request){
        $Quest = Quest::get();

        $data = $request->all();
        $idQuest = $Quest->where('user_id', '=', $data['user_id'])->last()->id;
        $data['idQuest'] = $idQuest;

        $i = 1;
        $b = 1;

        foreach ($data as $k => $v){
            if($k == "name".$i) {
                $data['name'] = $data[$k];
                $i++;
            }
            if($k == 'description'.$b){
                $data['description'] = $data[$k];
                $b++;

               $task = Task::create($data);    //создание задачи в бд
               $task->save();
            }
        }

//        return redirect("")->with('success', 'Задания будут добавлены после просмотра модератором');
    }

}
