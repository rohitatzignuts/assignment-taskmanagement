<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $tasks = Task::where('user_id', $userId)->latest('dueDate')->paginate(5);
        return view('tasks', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('newTask');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'dueDate' => 'required|date',
        ]);

        $userId = Auth::id();

        $task = new Task();
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->dueDate = $request->input('dueDate');
        $task->user_id = $userId;
        $task->save();

        // Redirect to index page or show success message
        return redirect()->route('tasks.index')->with('success', 'Task created successfully');
    }


    public function show(Task $task)
    {
        return view('task',['task' => $task, 'id' => $task->id]);
    }

    public function edit(Task $task)
    {
        return view('edit', ['task' => $task]);
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'dueDate' => 'required|date',
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully');
    }


    public function destroy(Task $task)
    {
        // Delete the task
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task Deleted successfully');
    }
}
