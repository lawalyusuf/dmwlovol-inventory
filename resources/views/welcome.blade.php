<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
        <!-- Styles -->
        <link href="{{asset('css/app.css') }}" type="text/css" rel="stylesheet">
    
    <title>DMW LOVOL ENGINEERING</title>
</head>
<body>

<div id="app">
    <br><br>
    <h2>Welcome to home page</h2>
    
    <router-view></router-view>



<!-- Scripts -->
<script src="{{asset('js/app.js')}}"></script>

</div>

</body>
</html>