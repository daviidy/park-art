<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
  <link rel="stylesheet" href="/css/homes.css">
  <!--link rel="icon" href="#"-->
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> -->
  <script src="https://kit.fontawesome.com/d86848cfe0.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="navbar-brand">
          <a class="text-decoration-none" href="#">
            <i class="fas fa-bars hamburger"></i>
          </a>
          <a class="text-decoration-none" href="#">Navbar</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav  mx-auto font-weight-bold">
            <li class="nav-item pr-md-5 active">
              <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item pr-md-5">
              <a class="nav-link" href="#">A propos</a>
            </li>
            <li class="nav-item pr-md-5">
              <a class="nav-link" href="#">Contactez-vous</a>
            </li>
          </ul>
            <div class="dropdown">
              <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="https://trello-members.s3.amazonaws.com/5a0488143e7858da0f497a05/a2fe363dd6cf7913f7b1e7e76b11880d/50.png" alt="" class="img-fluid rounded-circle" width="50" height="50">
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Modifier profil</a>
                <a class="dropdown-item" href="#">Déconnexion</a>
              </div>
            </div>
        </div>
      </nav>
  </header>

@yield('content')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.3.1/highlight.min.js"></script>
  <script>
    hljs.initHighlightingOnLoad();
  </script>
  <!--COPYRIGTH SCRIPT-->
  <script>
    var date = new Date();
    var annee = date.getFullYear();
    document.getElementById('year').innerHTML = annee;
  </script>

  <script>
    $('.hamburger').click(function() {
      if ($(window).width() < 600) {
        $('.side-menu').toggleClass('col-3');
        $('.side-menu').toggleClass('d-none');
        $('.side-menu').toggleClass('col-8');
        $('.side-menu').toggleClass('d-block');
        $('.main-content').toggleClass('d-none');
        $('#overlay').fadeToggle(300);
      } else {
        $('.side-menu').toggleClass('d-md-block');
        $('.main-content').toggleClass('col-md-9');
        $('.main-content').toggleClass('col-md-12');
        $('main').toggleClass('container-fluid');
        $('main').toggleClass('container');
      }
    });
  </script>
  </body>

  </html>
