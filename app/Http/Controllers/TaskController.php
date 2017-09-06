<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function getTask()
    {

        $task_table= Task::all();

         return view ('task', compact('task_table'));

    }

}
