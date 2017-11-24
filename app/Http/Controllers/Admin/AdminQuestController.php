<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Quest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class AdminQuestController extends Controller
{
    protected function add()
    {
        return view('Admin.createQuest');
    }

    protected function create()
    {
        $data = Input::all();

        $quest = Quest::create($data);
        $quest->save();
       // $id=$quest->id;
       return redirect()->route('createTask', [$quest]);

    }
}
