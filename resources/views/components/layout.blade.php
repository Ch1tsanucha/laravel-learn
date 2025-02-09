<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav</title>
    {{-- @vite("resources/css/app.css") --}}
</head>

<body>
    <header class="bg-red-400 flex justify-center">
        <h1> <a href="/" style="text-decoration: none;color:black"> Road Map </a></h1>
    </header>

    <div class="container">
        {{$slot}}
    </div>
</body>

</html>