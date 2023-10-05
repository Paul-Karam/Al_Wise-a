<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="./scss/app.scss">
        @vite(["resources/scss/app.scss", "resources/js/app.js"])
        <title>Al Wise'a</title>
    </head>
<body>
    <div class="container">

        @include('layouts/white-nav')
        @include('layouts/sidebar')

        @yield('content')

        @include('layouts/footer')
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>