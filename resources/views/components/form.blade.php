@props([
    'message',
    'action',
    'method'
])

<div class="col-md-6">
    <h2>{{ $message }}</h2>
    <form
        method="{{ $method }}"
        action="{{ $action }}"
        class="w-full"  >
        @csrf
        {{ $slot }}
    </form>
</div>
