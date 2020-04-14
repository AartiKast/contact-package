<?php

namespace Laravel\ToDoList;

use Illuminate\Database\Eloquent\Model;

class DemoUser extends Model
{
    protected $fillable = ["first_name","last_name"];
}
