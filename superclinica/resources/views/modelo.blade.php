<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <link href="/css/all.css" rel="stylesheet" type="text/css" >
    <script src="/js/all.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    @yield('estilos');
    <title>SUPER CLINICA</title>
</head>
<body>
    <div class="container estojo p-1 mt-0 mb-1" style="">
        <div class="jumbotron text-center m-2 p-2">
            <h1>SUPER CLINICA</h1>
            <hr>
            <div class=" text-center" >            
        
            @yield('corpo')
        </div>        
        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        <i class="fas fa-baby"></i>
    </div>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    @yield('jscripts')
</body>
</html>