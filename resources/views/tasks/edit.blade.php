<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit task</title>
</head>

<body>
    <h1>Edit task</h1>
    <form action="{{ route('tasks.update', $task->task_id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}" required>
        <br>
        <label for="description">Content:</label>
        <textarea name="description" id="body" required>{{ $task->description }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('tasks.index') }}">Back to tasks</a>
</body>

</html>