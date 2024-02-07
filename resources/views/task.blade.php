<!DOCTYPE html>
<html lang="en" class="w-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog App</title>
    <link rel="stylesheet" href="/app.css">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="bg-dark w-100">
    <section class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="card text-dark w-50" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $task->title }}</h5>
                    <span class="fw-normal font-monospace">from {{ $task->user->name}}</span>
                    <p class="card-text">{{ $task->description }}</p>
                    <span class="card-text text-muted">Due Date : {{ $task->dueDate }}  </span>
                </div>
                <div class="card-body">
                    <a href="/tasks" class="btn btn-primary" class="card-link">Go Back</a>
                    <a href="{{ route('tasks.edit', ['task' => $task->id]) }}" class="btn btn-secondary" class="card-link">Edit Task</a>
                </div>
          </div>
    </section>
</body>
</html>
