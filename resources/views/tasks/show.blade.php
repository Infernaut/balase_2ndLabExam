<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="card w-50 shadow">
        <div class="card-header text-center bg-primary text-white">
            <h1>{{ $task->title }}</h1>
        </div>
        <div class="card-body">
            <h5 class="card-title">Description</h5>
            <p class="card-text">{{ $task->description }}</p>
            <h5 class="card-title">Status</h5>
            <p class="card-text">
                @if ($task->is_completed)
                <span class="badge bg-success">Done</span>
                @else
                <span class="badge bg-secondary">Not Done</span>
                @endif
            </p>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary w-100 mt-3">Back to Tasks</a>
        </div>
    </div>
</body>

</html>