<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="imagem/png" href="/images/favicon.png" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160392302-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-160392302-1');
</script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/black.css') }}" rel="stylesheet">
    <link href="{{ asset('css/counter.css') }}" rel="stylesheet">

    <link href="https://unpkg.com/basscss@8.0.2/css/basscss.min.css" rel="stylesheet">
    <style>
    .flex_container{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        max-width: 800px;
        margin: 0 auto;
    }
    .back{
        background: #323232;
    }
    .search{
        flex-direction: row;
        width: 70%;
        height: 3rem;
        padding: 0.5rem;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        z-index: 100;
        text-align: center;
    }
    .search input[type=search] {
        position: relative;
        padding: 0.3rem;
        padding-right: 0;
        width: 70%;
        z-index: 901;
    }
    input, button .button {
        font-family: "Arial", sans-serif;
        font-size: 1rem;
        color: #747474;
        background: #fff;
        margin: 0;
        border: none;
        outline: none;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .flex_container span a{
        font-weight: bold;
        color: #FFF;
    }
    div.item{
        /* O flex: 1; é necessário para que cada item se expanda ocupando o tamanho máximo do container. */
        flex: 1;
        margin: 3px;
        text-align: center;
        font-size: 1em;
        justify-content: center;
    }
    div.item input{
        width: 100%;
        height: 100%;
    }
    .font-gill {
        font-family: "Gill Sans", sans-serif;
    }
</style>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div id="app" class="bg-green-light">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    @if (Auth::guest())
                                <!-- <li><a href="{{ route('login') }}">Login</a></li> -->
                                <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
                    @else
                    <button type="button" data-toggle="collapse" data-target="#app-navbar-collapse" class="navbar-toggle collapsed"><span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                    @endif
                </div>
                <div class="center">
                    <a href="https://www.allankardec.online/">
                        <img src="https://www.allankardec.online/images/logo_2.png" width="298" height="96" alt="logo">
                    </a>    
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <!-- <li><a href="{{ route('login') }}">Login</a></li> -->
                            <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">

                                    <li>
                                        <li><a href="{{ url('/manuscritos/') }}">Gerenciar itens</li>
                                        @if(Auth::user()->type == 'admin')
                                            <li><a href="{{ url('/usuarios/') }}">Gerenciar Usuários</li> 
                                        @endif
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="back">
            <div class="flex_container">
                <div class="search">
                    <div class="item">
                        <form action="/search" method="get">
                            <input type="search" name="q" placeholder="Digite sua pesquisa">
                        </form>
                    </div>
                </div>
                <span class="font-gill h5 center">
                    <a href="/jobs">Veja nosso acervo</a>
                </span>
            </div>
        </div>
        @yield('content')
    </div>
    <footer class="footer line-height-4">
            <nav class="footer-exhibitions my2">
                <div class="container">
                    <div class="py2">
                        <a href="https://www.allankardec.online/links">LINKS DE INTERESSE PARA PESQUISADORES
                            E ESTUDIOSOS DO ESPIRITISMO</a>
                    </div>
                </div>
            </nav>
            <nav class="footer-navigation">
                <ul>
                    <li><a href="https://www.allankardec.online/sobre">SOBRE</a></li>
                    <li><a href="https://www.allankardec.online/contato">CONTATO</a></li>
                    <li><a href="https://www.allankardec.online/glossario">GLOSSÁRIO</a></li>
                    <li><a href="https://www.allankardec.online/termos">TERMOS E CONDIÇÕES</a></li>
                </ul>
            </nav>
            <nav class="footer-copyright">
                <div class="container">
                    <div>
                        ©Copyright 2019 Allan Kardec.online<span class="mobile-hide"> / Designed by: <a
                                href="http://www.pdwebdesign.com.br/">PDWebdesign</a></span>
                    </div>
                </div>
            </nav>
        </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')
    
</body>
</html>
