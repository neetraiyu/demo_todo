@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-2xl font-semibold">{{ $task->title }}</h1>

    <div class="mt-6">
        <p>{{ $task->description }}</p>
        <p>Due in {{ $task->duration_days }} days</p>
        <p>Status: {{ $task->status }}</p>

        @if($task->status === 'completed')
            <p class="text-green-500">Task Completed!</p>
        @endif
    </div>
</div>
@endsection
