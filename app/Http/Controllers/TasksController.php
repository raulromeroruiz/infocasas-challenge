<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tasks;

class TasksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(Request $request) 
    {
        $tasks = Tasks::all();
        return response()->json($tasks, 200);
    }

    public function get($id) 
    {
        $task = Tasks::find($id);
        if (! $task)
        {
            return response()->json("Item not found!", 200);
        }
        if (empty($task)) 
        {
            return response()->json("", 204);
        }
        return response()->json($task, 200);
    }

    public function store(Request $request)
    {
        $task = new Tasks;
        $task->name = $request->input('name');
        $task->completed = $request->input('completed');
        $task->user_id = $request->input('user_id');
        $task->deadline = $request->input('deadline');
        
        if ( ! $task->save() ) 
        {
            return response()->json("", 204);
        }
        return response()->json("success", 200);
    } 

    public function update(Request $request, $id)
    {
        $task = Tasks::find($id);
        if (! $task)
        {
            return response()->json("Item not found!", 200);
        }
        $task->name = $request->input('name');
        $task->completed = $request->input('completed');
        $task->user_id = $request->input('user_id');
        $task->deadline = $request->input('deadline');
        
        if ( ! $task->save() ) 
        {
            return response()->json("", 204);
        }
        return response()->json("success", 200);
    } 

    public function delete($id)
    {
        $task = Tasks::find($id);
        if (! $task)
        {
            return response()->json("Item not found!", 200);
        }
        $result = $task->delete();

        if ( ! $result) 
        {
            return response()->json($result, 204);
        }
        return response()->json("success", 200);
    }
}
