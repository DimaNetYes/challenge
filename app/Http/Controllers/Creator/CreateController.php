<?php

namespace App\Http\Controllers\Creator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{

    public function show()
    {
        return view("creator.createQuest");
    }


}
