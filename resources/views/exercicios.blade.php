<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>iSeniors &mdash;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iSeniors</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700, 900|Vollkorn:400i" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('site/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/stylehome.css')}}">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" id="home-section">
    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-xl-2">
                        <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0" style="color:black">iSeniors<span class="text-primary">.</span> </a></h1>
                    </div>
                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="/home" class="nav-link">Home</a></li>
                                <li><a href="/emergencia" class="nav-link">Emergência</a></li>
                                <li class="has-children">
                                    <a href="#about-section" class="nav-link">Saúde</a>
                                    <ul class="dropdown">
                                        <li><a href="consultas/" class="nav-link">Consultas</a></li>
                                        <li><a href="medicamentos/" class="nav-link">Medicamentos</a></li>
                                    </ul>
                                </li>
                                <li><a href="/comprinhas" class="nav-link">Compras</a></li>
                                <li class="has-children">
                                    <a href="#about-section" class="nav-link">Entretenimento</a>
                                    <ul class="dropdown">
                                        <li><a href="/classe/exercicios" class="nav-link">Exercícios</a></li>
                                        <li><a href="/classe/filmes" class="nav-link">Filmes</a></li>
                                    </ul>
                                </li>
                        </nav>
                    </div>
                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>
                </div>
            </div>
        </header>

        <section class="site-section" style="background-color: #ffffcc">
            <div class="container">
                <div class="row justify-content-center" data-aos="fade-up">
                    <div class="col-lg-6 text-center heading-section mb-5"><br><br>
                        <h1 class="text mb-2" style="color:black">Exercícios:</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <iframe width="450" height="250" src="https://www.youtube.com/embed/YTUEan019KI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <br><br>
                        <iframe width="450" height="250" src="https://www.youtube.com/embed/49E33qYS-Ms" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-6">
                        <iframe width="450" height="250" src="https://www.youtube.com/embed/g5a1q_9-8XA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <br><br>
                        <iframe width="450" height="250" src="https://www.youtube.com/embed/09YpzyfdIVE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
</body>
</html>