<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Doctor - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Heebo|Pacifico&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="/frontend/css/main-css.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="/frontend/js/main-js.js"></script>
    @yield('style')
</head>
<body>
<header>
    @include('.frontend.layouts.header-doctor')
</header>
<main>
    @yield('content')
</main>
<footer>
    @include('frontend.layouts.footer')
</footer>
<script>
    $('.stat-work').click(function () {
        $(this).hide();
        $('.stop-work').show();
    })
    $('.stop-work').click(function () {
        $(this).hide();
        $('.stat-work').show();
    })
</script>
</body>
</html>
