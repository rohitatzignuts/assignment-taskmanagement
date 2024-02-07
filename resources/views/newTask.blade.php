<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark w-100 text-light container">
    <section class="row justify-content-center align-items-center" style="height: 100vh;">
       <div class="col-md-6">
            <h2>Add A New Task</h2>
            <form method="POST" action="{{ route('tasks.store') }}" class="w-full">
                @csrf
                <div class="mb-3">
                    <label for="taskTitle" class="form-label">Task Title</label>
                    <input type="text" class="form-control" id="taskTitle" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="taskDesc" class="form-label">Description</label>
                    <input type="text" class="form-control" id="taskDesc" name="description" required>
                </div>
                <div class="mb-3">
                    <label for="dueDate" class="form-label">Due Date</label>
                    <input type="date" class="form-control" id="dueDate" name="dueDate" value="{{ date('Y-m-d') }}" >
                </div>
                <button type="submit" class="btn btn-primary">Create Task</button>
            </form>
        </div>
    </section>
</body>
