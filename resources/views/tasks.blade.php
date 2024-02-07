@extends('layouts.app')

@section('content')

<div class="container">
    <section class="container my-5">
        <div class="card mb-3">
            <div class="card-body">
                <h1 class="card-title">Welcome to Taskify: Your Ultimate Task Management Solution</h5>
                <p class="card-text">Streamline your productivity, organize your day, and conquer your goals with Taskify – the ultimate task management platform designed to simplify your life.</p>
            </div>
          {{-- <img src="{{ asset('img/GettyImages-1206008726_530271_rhxjqd.jpg') }}" class="card-img-top img-fluid" alt="img">  --}}
        </div>
    </section>
    <section class="container my-5">
        <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-4">Add New Task</a>
        @foreach($tasks as $task)
        <ul class="list-group list-group-flush border border-5 rounded">
            <li class="list-group-item d-flex p-4 justify-content-between">
                <div>
                    <h3 href="tasks/{{ $task->id }}" class="">Task : {{ Str::upper($task->title) }}</h3>
                    <span>{{ $task->dueDate }}</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <a href="{{ route('tasks.show', ['task' => $task->id]) }}" class="btn btn-primary">View Task</a>
                        <a href="{{ route('tasks.edit', ['task' => $task->id]) }}" class="btn btn-secondary">Edit Task</a>
                    </div>
                    <form method="POST" action="{{ route('tasks.destroy', ['task' => $task->id]) }}" class="ms-1 mb-0 pb-0">
                        @csrf <!-- CSRF Protection -->
                        @method('DELETE') <!-- Method spoofing for DELETE request -->
                        <button type="submit" class="btn btn-danger" onclick="confirmDelete({{ $task->id }})">Delete Task</button>
                    </form>
                </div>
            </li>
        </ul>
        @endforeach
    </section>
</div>
@endsection
<script>
    function confirmDelete(taskId) {
        if (confirm('Are you sure you want to delete this task?')) {
            document.getElementById('deleteForm' + taskId).submit();
        } else {
            event.preventDefault();
        }
    }
</script>
