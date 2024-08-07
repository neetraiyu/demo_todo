@extends('layouts.app')

@section('content')
    <h1>All Tasks</h1>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Employee</th>
                <th>Status</th>
                <th>Duration (Days)</th>
                <th>Completed At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->employee->name }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->duration_days }}</td>
                    <td>{{ $task->completed_at ? $task->completed_at->format('Y-m-d') : 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
