<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>
  </head>
  <body class="main-content1">
    @include('includes.menu')
    @yield('content')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
    /*COPYRIGTH SCRIPT*/
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
    <script>
      $(document).ready(function() {
        $("#viewAnswer").click(function() {
          $(this).addClass("d-none");
          $("#verifyAnswer").removeClass("d-none")
        });

        $("#restartQuiz").click(function() {
          $("#verifyAnswer").addClass("d-none");
          $("#viewAnswer").removeClass("d-none")
        });
      });
    </script>

    <script>

        $(document).ready(function(){
          $("#courseSearch").keyup(function() {

            // Retrieve the input field text and reset the count to zero
            var filter = $(this).val(),
              count = 0;

            // Loop through the comment list
            $("#contentUsers .filter").each(function() {


              // If the list item does not contain the text phrase fade it out
              if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).hide();

                // Show the list item if the phrase matches and increase the count by 1
              } else {
                $(this).show();
                count++;
              }

            });

          });

        });


    </script>

@include('flashy::message')
  </body>
  </html>
