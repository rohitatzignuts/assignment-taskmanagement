@props(['task'])
<div class="card text-dark w-50" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $task->title }}</h5>
        <span class="fw-normal font-monospace">from {{ $task->user->name}}</span>
        <p class="card-text">{{ $task->description }}</p>
        <span class="card-text text-muted">Due Date : {{ $task->dueDate }}  </span>
    </div>
    <div class="card-body">
        <a href="/tasks" class="btn btn-primary" class="card-link">Go Back</a>
        <a href="{{ route('tasks.edit', ['task' => $task->id]) }}" class="btn btn-secondary" class="card-link">Edit Task</a>
    </div>
</div>
