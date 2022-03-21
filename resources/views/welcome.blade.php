<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- <script src="https://unpkg.com/vue@3.0.2"></script> -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-light bg-dark mb-3">
            <a class="navbar-brand text-light" href="#">DASHBOARD</a>
        </nav>
        <div class="components">
            <example-component />
        </div>
    </div>



<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>