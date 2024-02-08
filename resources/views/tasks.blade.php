@extends('layouts.app')

@section('content')

    <div class="container">
    <x-header-text />
    <section class="container my-5">
        <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-4">Add New Task</a>
        {{-- rendering tasks --}}
        @foreach($tasks as $task)
            <ul class="list-group list-group-flush border border-5 rounded">
                {{-- all tasks component --}}
                <x-all-tasks :task="$task"/>
            </ul>
        @endforeach
        {{-- pagination links --}}
        <div class="my-4">{{ $tasks->links() }}</div>
    </section>
    </div>

@endsection
