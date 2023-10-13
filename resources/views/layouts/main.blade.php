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

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sansita:ital,wght@0,400;0,700;0,800;0,900;1,400;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>@yield('title')</title>
</head>

<body>
    <!-- Header -->
    @include('includes.main.header')

    <!-- Main -->
    @yield('content')

    <!-- Fooret -->
    @include('includes.main.footer')

    <!-- JS -->
    <script src="./assets/js/burger.js?<?= time() ?>"></script>
    <script src="./assets/js/tabs.js?<?= time() ?>"></script>
</body>

</html>