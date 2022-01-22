<!doctype html>
<html lang="pt-br">

<head>
    <title>iSeniors &mdash;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700, 900|Vollkorn:400i" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('site/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/stylehome.css')}}">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">
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
        </header><br><br><br><br>

        <content class="grid">
            <section class="side">
                <section id="emergencia">
                    <h2 class="text" style="padding-top:22px; text-align:center; color:black">Ana cedro</h2>
                    <img class="logo" src="logo.png" width="250" alt="">
                    <div class="card">
                        <p style="margin-left:20px; margin-top:15px; color:black">Idade: 25 anos </p>
                        <p style="margin-left:20px; color:black">Telefone: (49) 96625-6989 </p>
                        <p style="margin-left:20px; color:black">E-mail: anacedro@gmail.com </p>
                    </div>
                    <br>
                    <div class="espaco-oculto">
                    </div>
                </section>
                <section class="side">
                    <section id="emergencia">
                        <h2 class="texto-centro" style="padding-top:22px">Como funciona a compra:</h2>
                        <img class="logo" src="logo.png" width="250" alt="">
                        <p class="borda">Na coluna a direita, você irá colocar seus dados e o que você precisa que a pessoa que você selecionou compre para você,
                            quando a mesma confirmar que fará sua compra, você receberá um aviso no e-mail, juntamente com o horário estipulado da entrega na sua residência.
                        </p>
                        <br>
                        <div class="espaco-oculto">
                        </div>
                    </section>
                </section>
            </section>
            <br>
            <div class="espaco-oculto">
            </div>

            <content class="main">
                <section id="contato" class="cancer">
                    <h2 class="texto">Contato</h2><br>
                    <p class="intro" style="color:black"> <i class="fas fa-envelope"></i> Mande um
                        e-mail para: anacedro@gmail.com ou preencha o formulário abaixo. </p>
                    <form class="needs-validation" novalidate><br>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">Primeiro nome</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Nome" value="Emelly" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Sobrenome</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Sobrenome" value="Becker" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom03">Email</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Email" aria-describedby="inputGroupPrepend" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom03">Telefone</label>
                                <input type="text" class="form-control" id="validationCustom03" placeholder="Telfone" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom04">Rua</label>
                                <input type="text" class="form-control" id="validationCustom04" placeholder="Estado" required>
                                <div class="invalid-feedback">
                                    Por favor, informe um estado válido.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">CEP</label>
                                <input type="text" class="form-control" id="validationCustom05" placeholder="CEP" required>
                                <div class="invalid-feedback">
                                    Por favor, informe um CEP válido.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class=" col-md-10 mb-3">
                                <label for="validationTextarea">Descrição da compra</label>
                                <textarea class="form-control" id="validationTextarea" placeholder="Descrição da compra" required></textarea>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Concordo com os termos e condições
                                </label>
                                <div class="invalid-feedback">
                                    Você deve concordar, antes de continuar.
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </form>
                </section>
</body>

</html>