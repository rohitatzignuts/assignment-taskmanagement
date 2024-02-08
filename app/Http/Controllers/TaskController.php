<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // returning all tasks
    public function index()
    {
        $tasks = Task::where('user_id', auth()->id())->latest('dueDate')->paginate(5);
        return view('tasks', ['tasks' => $tasks]);
    }

    // creating a new task
    public function create()
    {
        return view('newTask');
    }

    // saving the task created
    public function store(Request $request)
    {
        // validate incoming data
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'dueDate' => 'required|date',
        ]);

        // accept data and create a new task
        // $taskData = $request->only(['title', 'description', 'dueDate']) + ['user_id' => Auth::id()];
        // Task::create($taskData);

        $task = new Task();
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->dueDate = $request->input('dueDate');
        $task->user_id = auth()->id();
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
