<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Quest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class AdminQuestController extends Controller
{
    // Открытие страницы с квестами
    protected function show(){
        $quests = Quest::all();
        return view('Admin.viewQuests', ['quests' => $quests]);
    }

    // Открытие формы для создания квеста
    protected function add()
    {
        return view('Admin.createQuest');
    }

    protected function create()
    {
        $data = Input::all();
        $quest = Quest::create($data);
        $quest->save();
        return redirect()->action(
            'Admin\AdminTaskController@viewTasks', ['idQuest' => $quest]
        );
    }
}
