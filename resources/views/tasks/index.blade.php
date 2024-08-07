@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-2xl font-semibold">Tasks</h1>

    <div class="mt-6">
        @foreach($tasks as $task)
            <div class="border p-4 mb-4">
                <h2 class="text-xl">{{ $task->title }}</h2>
                <p>{{ $task->description }}</p>
                <p>Due in {{ $task->duration_days }} days</p>

                @if(Auth::user()->role === 1)
                    <a href="{{ route('tasks.show', $task) }}" class="text-blue-500">View Details</a>
                @else
                    <form method="POST" action="{{ route('tasks.accept', $task) }}">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="bg-green-500 text-white px-4 py-2">Accept</button>
                    </form>
                    <form method="POST" action="{{ route('tasks.reject', $task) }}">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2">Reject</button>
                    </form>
                @endif
            </div>
        @endforeach
    </div>
</div>
@endsection
