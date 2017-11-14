<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quest;

class CreateQuest extends Controller
{
    public function add()
{
    $quests = Quest::all();
    return view('admin.add', ['quests' => $quests]);

}

    public function view()
    {
        $quests = Quest::all();
        return view('users.view', ['quests' => $quests]);

    }


}
