<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PHP Does Not Suck</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Scope+One" rel="stylesheet">

    <!-- Styles -->

    <link rel="stylesheet" href="/css/app.css">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="pull-right navigation">
                <a href="{{ url('/about') }}">About</a>
                <a href="{{ url('/api') }}">API</a>
            </div>
        </div>
    </div>

    <div class="container main">
        <div class="content">
            <div class="row">
                <div class="title"><a href="/">
                    <h1>PHP Does Not Suck</h1>
                </a>
                <a href="/">
                    <img class="logo" src="/img/logo.png" alt="PHP Does Not Suck" />
</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 quotationmarks">
                &#8220
                </div>

                @yield('content')

                <div class="col-md-2 quotationmarks">
                &#8221
                </div>
            </div>

        </div>
    </div>

    <div id="footer" class="container-fluid">
        <div>
        Curated and built by <a href="https://www.linkedin.com/in/meredithmatthews/">Mer</a>, Designed by <a href="http://theaxisofeva.com">Eva</a>
        </div>
    </div>

</body>
</html>
