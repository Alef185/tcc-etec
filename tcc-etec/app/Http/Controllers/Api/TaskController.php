<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Web\PageController;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all()->toArray();
        return array_reverse($tasks);      
    }

    public function store(Request $request)
    {
        $task = new Task([
            'name' => $request->input('name'),
            'detail' => $request->input('detail')
        ]);
        $task->save();

        return response()->json('Product created!');
    }

    public function show($id)
    {
        $task = Task::find($id);
        return response()->json($task);
    }

    public function update($id, Request $request)
    {
        $task = Task::find($id);
        $task->update($request->all());

        return response()->json('Product updated!');
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return response()->json('Product deleted!');
    }
}