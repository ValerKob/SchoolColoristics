<!DOCTYPE html>
<html lang="RU-ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/reset.css?<?= time() ?>">
    <link rel="stylesheet" href="./assets/css/header.css?<?= time() ?>">
    <link rel="stylesheet" href="./assets/css/footer.css?<?= time() ?>">
    <link rel="stylesheet" href="./assets/css/mainPage.css?<?= time() ?>">
    <link rel="stylesheet" href="./assets/css/mainStyle.css?<?= time() ?>">

    <title>@yield('title')</title>
</head>

<body>
    <!-- Header -->
    @include('includes.main.header')

    <!-- Main -->
    @yield('content')

    <!-- Fooret -->
    @include('includes.main.footer')
</body>

</html>