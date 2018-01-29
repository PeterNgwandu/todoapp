<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoItems extends Model
{
    protected $fillable = [
        'item_name',
    ];
}
