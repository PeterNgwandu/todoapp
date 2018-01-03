<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    protected $fillable = [
        'todo_name',
        'description',
        'deadline'
    ];
}
