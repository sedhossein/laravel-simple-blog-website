
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('title')</title>
    <link href="starter-template.css" rel="stylesheet">
</head>

<body>

    @include('includes.navbar')
<hr> <hr> <hr>

    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
</body>
</html>
