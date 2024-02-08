@extends('layouts.app')

@section('content')
    <section class="d-flex justify-content-center align-items-center" style="height: 75vh">
            {{-- current task view --}}
            <x-task :task="$task" />
    </section>
@endsection
