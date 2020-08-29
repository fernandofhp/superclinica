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
        <div class="container">            
            <div class="jumbotron text-center m-2 p-2">                                   
                <div class="container col-4">
                    <div class="row">
                        <div class="col-sm">
                            <img src="img/clinica.png" alt="" class="src"> 
                        </div>
                        <div class="col-sm">
                            <h1>SUPER CLÍNICA</h1>
                        </div>                                             
                    </div>
                </div>                  
                    <hr>
                <div class="text-center " >        
                    @yield('corpo')
                </div>             
            </div>             
        </div>                                           
    </div>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    @yield('jscripts')
</body>
</html>