<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;

class Quest extends Model
{
    protected $table = 'quests';

    protected $fillable = [
        'name', 'description', 'date', 'time'
    ];


    protected $guarded = array(
        'id', 'created_at', 'updated_at'

    );


}
