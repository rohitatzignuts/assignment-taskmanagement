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
                        <section class="alltasks">
                            @foreach ($tasks as $task)
                            <div class="taskRow">
                                <p>{{$task->title}}</p>
                                <span>{{$task->dueDate->diffForHumans() }}</span>
                            </div>
                            @endforeach
                        </section>
                    {{-- all tasks end here --}}
            </div>
        </div>
    </div>
</div>
@endsection
