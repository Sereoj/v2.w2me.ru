<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{ $meta_title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <!-- Иконки -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body class="d-flex flex-column h-100">
<style>
    body {
        position: relative;
    }

    .images-list {
        position: relative;
    }

    .images-list-text {
        position: absolute;
        bottom: 0px;
        left: 0px;
        padding: 0 20px 0 20px;
        color: white;
        background-color: rgba(0, 0, 0, 0.5);
        width: 100%;
    }

    .carousel-caption {
        text-shadow: 2px 2px 4px #000;
    }

    .btn {
        margin-top: 10px;
    }

    .img-profile{
        height: 200px;
        width: 200px;
    }
</style>

<header>
    @include('layouts.navbar')
</header>
<main class="d-flex py-4">
    <div class="container">
        {{ $content }}
    </div>
</main>
<footer class="footer mt-auto py-4">
    <div class="container d-flex">
        <p>© 2021 World to Me</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
</body>

</html>
