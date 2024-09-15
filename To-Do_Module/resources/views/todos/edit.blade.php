@extends('layouts.app')

@section('content')
    <div class="container bg-white mt-3 p-3 rounded">
        <h3 class="fw-bold mb-3">Edit To-do</h3>
        <form action="{{ route('todos.update', $todo->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Title Field -->
            <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $todo->title }}" required>
            </div>

            <!-- Description Field -->
            <div class="form-group mb-3">
                <label for="description">Description</label>
                <textarea name="description" class="form-control">{{ $todo->description }}</textarea>
            </div>

            <!-- Completed Checkbox -->
            <div class="form-group form-check mb-3">
                <input type="checkbox" class="form-check-input" name="completed" id="completed"
                    {{ $todo->completed ? 'checked' : '' }}>
                <label class="form-check-label" for="completed">Mark as Completed</label>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('todos.index') }}" type="submit" class="btn btn-dark">Cancel</a>
        </form>
    </div>
@endsection
