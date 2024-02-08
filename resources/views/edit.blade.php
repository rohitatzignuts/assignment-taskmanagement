@extends('layouts.app')

@section('content')
    <section class="row justify-content-center align-items-center" style="height: 75vh;">
            {{-- edit task details form --}}
            <x-form method="POST" :action="route('tasks.update', ['task' => $task->id])" message="Edit Your Task" >
                @method('PUT')
                <div class="mb-3">
                    <label for="taskTitle" class="form-label">Task Title</label>
                    <input type="text" class="form-control" id="taskTitle" name="title" value="{{ $task->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="taskDesc" class="form-label">Description</label>
                    <textarea class="form-control" id="taskDesc" name="description" rows="3" required>{{ $task->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="dueDate" class="form-label">Due Date</label>
                    <input type="date" class="form-control" id="dueDate" name="dueDate" value="{{ $task->dueDate }}">
                </div>
                <a href="/tasks" class="btn btn-primary" class="card-link">Go Back</a>
                <button type="submit" class="btn btn-success">Update Task</button>
            </x-form>
    </section>

@endsection
