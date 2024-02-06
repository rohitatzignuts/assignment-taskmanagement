<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('home', compact('tasks'));
    }

    public function create()
    {
        // Return view for creating a new task
    }

    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'due_date' => 'required|date',
        ]);

        // Create new task
        Task::create($request->all());

        // Redirect to index page or show success message
    }

    public function show(Task $task)
    {
        // Return view to show a specific task
    }

    public function edit(Task $task)
    {
        // Return view for editing a specific task
    }

    public function update(Request $request, Task $task)
    {
        // Update the task
        $task->update($request->all());

        // Redirect to index page or show success message
    }

    public function destroy(Task $task)
    {
        // Delete the task
        $task->delete();

        // Redirect to index page or show success message
    }
}
