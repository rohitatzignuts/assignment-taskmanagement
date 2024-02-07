@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    {{-- login messages --}}
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- all tasks --}}
                    <section>
                        @foreach($tasks as $task)
                        <ul class="list-group list-group-flush border border-5 rounded">
                            <li class="list-group-item d-flex p-4 justify-content-between ">
                            <div>
                                <h3 href="tasks/{{ $task->id }}" class="">Task : {{ Str::upper($task->title) }}</h3>
                                <span>{{ $task->dueDate }}</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <a href="{{ route('tasks.show', ['task' => $task->id]) }}" class="btn btn-primary">View Task </a>
                                    <a href="{{ route('tasks.edit', ['task' => $task->id]) }}" class="btn btn-secondary">Edit Task </a>
                                </div>
                                <form method="POST" action="{{ route('tasks.destroy', ['task' => $task->id]) }}" class="btn">
                                    @csrf <!-- CSRF Protection -->
                                    @method('DELETE') <!-- Method spoofing for DELETE request -->
                                    <button type="submit" class="btn btn-danger">Delete Task</button>
                                </form>
                            </div>
                            </li>
                        </ul>
                    @endforeach
                    </section>
                        {{-- all tasks end here --}}
            </div>
        </div>
    </div>
</div>
@endsection
