<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Carbon;
class TaskController extends Controller
{
    public function index()
    {
        //return $items = Task::orderBy('created_at', 'DESC')->get();
        return view('task.index');
    }
    public function all()
    {
        return $items = Task::orderBy('created_at', 'DESC')->get();
        //return view('task.index');
    }
    public function store(Request $request)
    {
        $newTask = new Task;
        $newTask->name = $request->task["name"];
        $newTask->save();
        return $newTask;
    }
    public function update(Request $request, $task)
    {
        $existingTask = Task::find($task);
        if($existingTask){
        $existingTask->completed = $request->task['completed'] ? true: false;
        $existingTask->completed_at = $request->task['completed'] ? Carbon::now() : null ;
        $existingTask->save();
        return $existingTask;
        }
    }
    public function delete($task)
    {
        $task = Task::find($task);
        if($task)
        {
            $task->delete();
            return 'deleted successfully';
        }
        return 'errors';
    }
}
