<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>tasks</title>
    <script>
        function confirmDeletion(event) {
            event.preventDefault(); // Prevent form submission
            if (confirm('Are you sure you want to delete this task?')) {
                event.target.closest('form').submit(); // Submit the form if confirmed
            }
        }
    </script>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="card">
        <div class="card-body text-center">
            <h1>TASK MANAGER</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>
                            @if ($task->is_completed)
                            <span class="badge bg-success">Done</span>
                            @else
                            <span class="badge bg-secondary">Not Done</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('tasks.show', $task->task_id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('tasks.edit', $task->task_id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('tasks.destroy', $task->task_id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="confirmDeletion(event)">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Create New Task</a>

        </div>
    </div>

</body>

</html>