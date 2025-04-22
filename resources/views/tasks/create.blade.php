<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Create New Task</title>
</head>

<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

    <div class="card w-50 shadow">
        <div class="card-header bg-primary text-white text-center">
            <h1>Create New Task</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Enter task title" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter task description" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Create Task</button>
            </form>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary w-100 mt-3">Back to Tasks</a>
        </div>
    </div>

</body>

</html>