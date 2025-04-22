<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function getRouteKeyName() // Custom route key for model binding
    {
        return 'task_id'; // Use 'task_id' as the route key
    }

    public function index()
    {
        $tasks = Task::all(); // Fetch all tasks from the database
        return view('index', compact('tasks')); // Pass the $tasks variable to the view
    }

    public function create() // Show create form
    {
        return view('tasks.create');
    }

    public function store(Request $request) // Save new task
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'is_completed' => 'nullable|boolean',

        ]);
        $validated['is_completed'] = $validated['is_completed'] ?? false;
        $task = Task::create($validated);

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(string $id) // Show edit form
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, string $id) // Update task
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $task = Task::findOrFail($id);
        $task->update($validated);

        return redirect()->route('tasks.index')->with('success', 'task updated successfully.');
    }

    public function destroy(string $id) // Delete task
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'task deleted successfully.');
    }
}
