@props(['task'])
<li class="list-group-item d-flex p-4 justify-content-between">
    <div>
        <h3 href="tasks/{{ $task->id }}" class="fw-bold font-monospace">Task : {{ $task->title }}</h3>
        <span class="font-monospace">{{ $task->dueDate }}</span>
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

{{-- delete task confirmation script  --}}
<script>
    function confirmDelete(taskId) {
        if (confirm('Are you sure you want to delete this task?')) {
            document.getElementById('deleteForm' + taskId).submit();
        } else {
            event.preventDefault();
        }
    }
</script>
