<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ExecuteTask extends Model
{

    protected $table = 'executeTasks';
    public $timestamps = false;

    protected $fillable = ['idTasks', 'idUser', 'coordX', 'coordY', 'timestamp', 'status'];
    protected $guarded = ['id'];

    public function scopeOfWhereWhere($query, $name, $type, $name2, $type2)
    {
        return $query->where($name, '=', $type)->where($name2,'=' , $type2)->get();
    }

}
