<?php

namespace App\Http\Controllers\Quest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quest;

class ViewQuest extends Controller
{

    public function view()
    {
        $quests = Quest::all();
        return view('quest.view', ['quests' => $quests]);

    }


}
