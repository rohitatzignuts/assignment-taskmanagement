<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog App</title>
    <link rel="stylesheet" href="/app.css">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
     <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <section class="">
        <article>
            <h1>{{ $task->title }}</h1>
            <p>{{ $task->description }}</p>
            <span>by{{ $task->user->name }}</span>
        </article>
        <a href="/tasks">←Go Back</a>
    </section>
</body>
</html>
