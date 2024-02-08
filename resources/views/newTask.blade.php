@extends('layouts.app')

@section('content')
    <section class="row justify-content-center align-items-center" style="height: 75vh;">
            {{-- form for adding a new task --}}
            <x-form :action="route('tasks.store')" method="POST" message="Add A New Task">
                <div class="mb-3">
                    <label for="taskTitle" class="form-label">Task Title</label>
                    <input type="text" class="form-control" id="taskTitle" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="taskDesc" class="form-label">Description</label>
                    <input type="text" class="form-control" id="taskDesc" name="description" required>
                </div>
                <div class="mb-3">
                    <label for="dueDate" class="form-label">Due Date</label>
                    <input type="date" class="form-control" id="dueDate" name="dueDate" value="{{ date('Y-m-d') }}" >
                </div>
                <a href="/tasks" class="btn btn-primary" class="card-link">Go Back</a>
                <button type="submit" class="btn btn-success">Create Task</button>
            </x-form>
    </section>

@endsection
