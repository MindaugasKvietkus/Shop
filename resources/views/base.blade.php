<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Optional theme -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">

    <!-- Latest compiled and minified JavaScript -->
    <script
            src="https://code.jquery.com/jquery-3.1.1.js"
            integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
            crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <title>Laravel</title>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Shop</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/">Pradzia</a></li>
                <li><a href="/kategorija/kompiuteriai">Kompiuteriai</a></li>
                <li><a href="/kategorija/mobilieji-telefonai">Mobilieji Telefonai</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ route('cart') }}">Krepselis <span
                                class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                    </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
@yield('continent')
</body>
</html>