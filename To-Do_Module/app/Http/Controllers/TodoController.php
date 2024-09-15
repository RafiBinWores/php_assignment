<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // Display a list of todos
    public function index()
    {
        $todos = Todo::orderBy('id', 'DESC')->paginate(10);
        return view('todos.index', compact('todos'));
    }

    // Show the form for creating a new todo
    public function create()
    {
        return view('todos.create');
    }

    // Store todo
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Todo::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'completed' => $request->has('completed') ? true : false,
        ]);

        return redirect()->route('todos.index');
    }

    // Show the form for editing the specified todo
    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    // Update todo
    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $todo->title = $request->input('title');
        $todo->description = $request->input('description');
        $todo->completed = $request->has('completed') ? true : false;
        $todo->save();

        return redirect()->route('todos.index');
    }

    public function toggleComplete(Todo $todo)
    {
        $todo->completed = !$todo->completed;
        $todo->save();

        return redirect()->route('todos.index')->with('success', 'To-do status updated successfully.');
    }


    // Remove the specified todo
    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->route('todos.index');
    }
}
