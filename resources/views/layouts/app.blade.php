<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9oFeRpok6YctnYmDr5PnJyT2bJxJh0JMhjYHwhALx0xWl" 
          crossorigin="anonymous">
</head>
<body>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-VvpcyrfY8tY3lHB6BNNkxC5s9fDVZLEsAAA5NDzOxhy9GcKIds1kleN7J6J9a06S" 
            crossorigin="anonymous"></script>
</body>
</html>