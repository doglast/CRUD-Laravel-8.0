<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="'viewport" content="width-device-width, initial-scale-1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CRUD com Laravel</title>
        <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">

    </head>

    <!--Cabeçalho-->
    <header class="bg-secondary">
        <div class="container">
            <nav class="navbar navbar-expand-sm  navbar-secondary">
                <a class="text-reset" href="http://galaxpay.com.br/">
                    <img width="220px" height="50px" src="{{url('assets/bootstrap/img/galaxypay.png')}}" alt="GalaxyPay">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </nav>
        </div>
    </header>

    <body style="heigth: 100%">
        @yield('content')
    </body>

    <!--Rodapé-->
    <footer class="bg-secondary p-5 text-white">
        <div class="container-fluid">
            <div class="container">
                <small> Teste Básico: Estágio Desenvolvimento WEB.
                    <div class='border-topp mt-3'>
                        &COPY; 2020 - <?= date('Y')  ?> Desenvolvido por <a href="https://github.com/doglast" class="text-reset"> Douglas Evangelista dos Santos.</a>
                    </div>
                </small>
            </div>
        </div>
    </footer>
</html>
