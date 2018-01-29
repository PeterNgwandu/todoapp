<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoItemPhoto extends Model
{
    protected $fillable = [
        'todo_item_id',
        'filename',
    ];

    public function TodoItem(){
        return $this->belongsTo('App/TodoItems');
    }
}
