@extends('layouts.app')

@section('content')
    <h1>Create Task</h1>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div>
            <label for="employee_id">Employee</label>
            <select name="employee_id" id="employee_id" required>
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description" required></textarea>
        </div>

        <div>
            <label for="duration_days">Duration (Days)</label>
            <input type="number" id="duration_days" name="duration_days" min="1" required>
        </div>

        <button type="submit">Create Task</button>
    </form>
@endsection
