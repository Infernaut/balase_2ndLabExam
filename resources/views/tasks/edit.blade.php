<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="card w-50">
        <div class="card-header text-center">
            <h1>Edit Task</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('tasks.update', $task->task_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea name="description" id="description" class="form-control" rows="4" required>{{ $task->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="is_completed" class="form-label">Status:</label>
                    <select name="is_completed" id="is_completed" class="form-select">
                        <option value="0" {{ !$task->is_completed ? 'selected' : '' }}>Not Done</option>
                        <option value="1" {{ $task->is_completed ? 'selected' : '' }}>Done</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success w-100">Update Task</button>
            </form>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary w-100 mt-3">Back to Tasks</a>
        </div>
    </div>
</body>

</html>