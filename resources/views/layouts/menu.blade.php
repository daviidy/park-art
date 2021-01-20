<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/mediaQuery.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="content">
      <header class="position-absolute w-100" style="z-index: 1; top:0">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand text-white font-weight-bold" href="#">Park Art</a>
          <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mx-auto font-weight-bold">
              <li class="nav-item pr-md-5 active">
                <a class="nav-link text-white" href="/">Accueil <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item pr-md-5">
                <a class="nav-link text-white" href="#">A propos</a>
              </li>
              <li class="nav-item pr-md-5">
                <a class="nav-link text-white" href="#">Contactez-vous</a>
              </li>
            </ul>
            <span class="navbar-text shadow rounded-pill bg-white">
              <a href="{{ url('/login') }}" class="text-decoration-none p-3 text-capitalize font-weight-bolder" data-toggle="modal" data-target="#loginModal">Connectez-vous</a>
            </span>
          </div>
        </nav>
      </header>

        @yield('content')
        @include('includes.login')
        @include('includes.register')
        @include('includes.offert')

        <footer class="p-4 border-top">
          <p>Tous droits réservés</p>
        </footer>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
  </html>
