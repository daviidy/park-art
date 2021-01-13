<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/master.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  </head>
  <body class="bg-main">
    <div class="main bg-main">
      <section class="p-md-5">
        <div class="container-fluid">
          <div class="row rounded-lg bg-content shadow">
            <div class="col-1 p-md-3 d-md-block d-none">
              <div class="bg-menu-left rounded-lg shadow">
                <div class="">
                  <div class="text-center p-md-4">
                    <img src="https://trello-members.s3.amazonaws.com/5a0488143e7858da0f497a05/a2fe363dd6cf7913f7b1e7e76b11880d/50.png" alt="avatar" width="50" class="img-fluid rounded-circle">
                  </div>
                  <div class="">
                    <div class="list-group text-center h1">
                        <a href="{{ route('projects.index') }}" class="mr-2 py-2 active text-white text-decoration-none">
                          <i class="bi bi-layout-text-window-reverse"></i><br>
                          <span class="font-text-menu">Mes projets</span>
                        </a>
                        <a href="{{ route('projects.create') }}" class="mr-2 py-2 text-decoration-none">
                          <i class="fas fa-paper-plane text-white"></i><br>
                          <span class="font-text-menu">Publier</span>
                        </a>
                        <a href="#" class="mr-2 py-2 text-decoration-none">
                          <i class="bi bi-people-fill text-white"></i>
                          <span class="font-text-menu">Prestataires</span>
                        </a>
                        <a href="#" class="mr-2 py-2 text-decoration-none">
                          <i class="bi bi-person-square text-white"></i><br>
                          <span class="font-text-menu">Mon profil</span>
                        </a>
                        <a href="#" class="mr-2 py-2 text-decoration-none">
                          <i class="bi bi-gear-fill text-white"></i><br>
                          <span class="font-text-menu">Paramètre</span>
                        </a>
                        <a href="#" class="mr-2 py-2 text-decoration-none">
                          <i class="bi bi-chat-dots-fill text-white"></i><br>
                          <span class="font-text-menu">Méssagerie</span>
                        </a>
                      </div>
                  </div>
                </div>
                <div class="text-center p-3 mt-5">
                  <a href="{{ route('projects.create') }}" class=" btn-bg-plus text-decoration-none shadow text-white rounded-lg p-2" ><i class="bi bi-plus"></i></a>
                </div>
              </div>
            </div>

@yield('content')

</div>
</div>
</section>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
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
