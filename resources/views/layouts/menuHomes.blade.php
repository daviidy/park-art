<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title></title>
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/mediaQuery.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>

  </head>
  <body class="bg-main">
    <div class="main bg-main">
      <section class="p-md-5">
        <div class="container-fluid">
          @include('includes.alert')
          <div class="row rounded-lg bg-content shadow">
            @include('includes.menuDashboard')
            @yield('content')
            @include('includes.offertListe')
          </div>
        </div>
      </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
      $('.hamburger').click(function() {
        if ($(window).width() < 600) {
            $('.side-menu').toggleClass('d-block');
            $('.side-content').toggleClass('d-none');
            $('#overlay').fadeToggle(300);
            }
      });
      $('.close-btn').click(function() {
        if ($(window).width() < 600) {
            $('.side-menu').removeClass('d-block');
            $('.side-content').removeClass('d-none');
            $('#overlay').fadeToggle(300);
            }
      });
    </script>
    <script>
        const currentLocation =location.href;
        const menuItem = document.querySelectorAll('#Menu a');
        const menuLength = menuItem.length;
        for (let i = 0; i < menuLength; i++) {
          if (menuItem[i].href === currentLocation) {
            menuItem[i].className = "mr-2 py-2 active text-white text-decoration-none d-md-block d-flex align-items-center justify-content-around"
          }
        }
        $('.proposals').on('click', function(){
          var proposals = $(this).data('proposals');
          var _token   = $('meta[name="csrf-token"]').attr('content');
          var proposals = $(this).data('proposals');
         if(proposals.length){
          $.ajax({
              url: "project/proposals",
              data: { _token: _token, "proposals": proposals},
              type: 'post',
              success: function(data) {
                  $('#offers').html(data);
                  $('#offertListModal').modal('show')
              }
            }); 
         }else{
          $('#offers').html('Aucune offre disponible.');
          $('#offertListModal').modal('show')
         }
        })
    </script>

@include('flashy::message')
  </body>
</html>
