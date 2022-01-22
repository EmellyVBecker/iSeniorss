<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700, 900|Vollkorn:400i" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('site/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/stylehome.css')}}">

    <title>iSeniors</title>

    <!-- Styles -->
    <style>
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .links>a {
            color: white;
            padding: 0 25px;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            font-family: 'Quicksand', sans-serif;
        }
    </style>
</head>

<body>
<section class="site-blocks-cover overflow-hidden bg" style="background-color: #FFFFB7;">
      <div class="container">
        <div class="row">
          <div class="col-md-5 align-self-center text-center text-md-left">
            <div class="intro-text">
              <h1>iSeniors</h1>
              <p class="mb-5" style="font-size: 25px;">O assistente virtual para terceira idade.</p>
            </div>
          </div>
          <div class="col-md-7 align-self-end text-center text-md-right">
          <img src="https://scontent.fxap5-1.fna.fbcdn.net/v/t39.30808-6/221811599_2633584336944604_6471412612268498220_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeF84pClfEJrwIZz4scpvkjx-xWIIvxQmoz7FYgi_FCajFgmz4JzrcBCwnOMqw-Y429Jg4re1BBdtmY-lb5PcdPE&_nc_ohc=GKgUn9vqyQAAX_Pa8WO&_nc_ht=scontent.fxap5-1.fna&oh=00_AT8G4vK2ZOuBODk6MXZekmJWVl1fbPwikmlyXsEgOk-xkA&oe=61F101CB" alt="Image" class="img-fluid cover-img" style="height:600px; width: 1850px;">
            </div>
        </div>
      </div>
    </section> 
    </div>
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}" style="color:black">Home</a>
        @else
        <a href="{{ route('login') }}" style="color:black">Login</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" style="color:black">Register</a>
        @endif
        @endauth
    </div>
    @endif

    </div>
</body>

</html>