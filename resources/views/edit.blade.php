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
            <h2>Edit Task</h2>
            <form method="POST" action="{{ route('tasks.update', ['task' => $task->id]) }}" class="w-full">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="taskTitle" class="form-label">Task Title</label>
                    <input type="text" class="form-control" id="taskTitle" name="title" value="{{ $task->title }}">
                </div>

                <div class="mb-3">
                    <label for="taskDesc" class="form-label">Description</label>
                    <textarea class="form-control" id="taskDesc" name="description" rows="3">{{ $task->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="dueDate" class="form-label">Due Date</label>
                    <input type="date" class="form-control" id="dueDate" name="dueDate" value="{{ $task->dueDate }}">
                </div>

                <button type="submit" class="btn btn-primary">Update Task</button>
            </form>
        </div>
     </section>

     <!-- Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
 </body>
 </html>
