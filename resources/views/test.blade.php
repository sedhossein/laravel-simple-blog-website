<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">


    <title>@yield('title')</title>

</head>
<body>

<div class="container">
    @if( Request::is('/'))
    @endif
    <div class="row">
        <div class="col-md-9 col-lg-9">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
                <a class="navbar-brand" href="#">My Blog</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarCollapse" aria-controls="navbarCollapse"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about-me">about me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact-me">Contact me</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="col-md-3 col-lg-3">
        </div>
    </div>

    <footer>
    </footer>
</div>


</body>
</html>
