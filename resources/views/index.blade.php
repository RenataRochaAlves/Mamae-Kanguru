<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script type="text/javascript" src="js/index.js"></script>-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />

</head>

<body>
    <header>
        <nav class="#48beae">
            <div class="">
                <a class="logo"><img class="imagem-1" src="{{ asset('/img/2NomeBrancoCortado.png') }}" alt="Logo"></a>
                <ul class="abas hide-on-med-and-down">
                    <li class=""><a href="#">Reservas</a></li>
                    <li class=""><a href="#">Solidariedade</a></li>
                    <li class=""><a href="#">Painel</a></li>
                    <li class=""><a href="#">Eventos</a></li>
                    <li class=""><a href="#">Avisos</a></li>
                    <li class=""><a class="pesquisar" href="#"><i class="material-icons">search</i></a>
                    </li>
                </ul>
                <ul class="abas mobile-menu hide-on-large-only">
                    <li class="menus"><a data-target="slide-out" class="sidenav-trigger triger-index" href="#"><i class=" material-icons">menu</i></a></li>
                    <li class=""><a href="#"><i class="material-icons">home</i></a></li>
                    <li class=""><a href="#"><i class="material-icons">message</i></a></li>
                    <li class=""><a href="#"><i class="material-icons">notifications</i></a></li>
                    <li class=""><a><i class="material-icons pesquisa-close">search</i></a></li>
                </ul>
            </div>
        </nav>
        <section id="slide-out" class="sidenav sidenave-index perfil-mobile show-on-medium-and-up">
            <div class="foto-perfil">
                <img class="circle" src="{{ asset('/img/foto_perfil.jpg') }}" alt="Foto perfil">
                <a class="btn-floating btn-large waves-effect waves-light">
                    <i class="material-icons">edit</i>
                </a>
            </div>
            <div class="sobre">
                <article>
                    <h6 class="nomeusuario center-align">Anna Souza</h6>
                    <p class="descricaousuario center-align">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Obcaecati illum suscipit harum laborum dolorem sapiente non dolor.</p>
                </article>
                <div>
                    <a class="linksperfil waves-effect waves btn-flat">Mensagens privadas</a>
                    <a class="linksperfil waves-effect waves btn-flat">Configurações</a>
                </div>
                <div>
                    <ul class="abas center-align">
                        <li class=""><a href="#">Reservas</a></li>
                        <li class=""><a href="#">Solidariedade</a></li>
                        <li class=""><a href="#">Painel</a></li>
                        <li class=""><a href="#">Eventos</a></li>
                        <li class=""><a href="#">Avisos</a></li>
                    </ul>





                </div>
                <div class="blocohashtags center-align">
                    <a class="hashtags waves-effect waves btn-flat">#procuro</a>
                    <a class="hashtags waves-effect waves btn-flat">#ofereço</a>
                    <a class="hashtags waves-effect waves btn-flat">#aviso</a>
                </div>
            </div>
        </section>
    </header>
    <main class="main">

    </main>

    <footer id="footer" class="row">
        <div class="page-footer">
            <p>&copy; 2020 Copyright Mamãe-Kanguru</p>
            <img class="logofooter center" src="./img/2NomeBranco.png" alt="Logo UNIU">
            <a class="botaosuporte waves-effect waves-teal btn-flat white-text"><i class="large material-icons right">contact_support</i>Suporte</a>
        </div>
    </footer>

    <script src="{{ asset('/js/jQuery341.js') }}"></script>
    <script src="{{ asset('/js/materialize.min.js') }}"></script>
    <script src="{{ asset('/js/modules.js') }}"></script>
    <script src="{{ asset('/js/index.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>

</html>