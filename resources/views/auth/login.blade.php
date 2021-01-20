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
  <body class="bg-dark">
    <div class="content bg-dark">
      <section class="p-3 p-md-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="">
                <div class="">
                  <div class="">
                    <div class="p-0">
                      <div class="card border-0 mx-auto" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4 img-login" style="background-image: url('/assets/images/login.jpg')">
                          </div>
                          <div class="col-md-8">

                            <div class="card-body p-4">
                              <form action="/login" method="post">
                                @csrf
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Adresse E-mail</label>
                                  <input type="email" name="email" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div>
                                  @error('email')
                                  <p class="alert alert-danger">{{ $message }}</p>
                                  @enderror
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputPassword1">Mot de passe</label>
                                 <input type="password" name="password" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" id="exampleInputPassword1">
                                </div>

                                <div>
                                   @error('password')
                                   <p class="alert alert-danger">{{ $message }}</p>
                                   @enderror
                                 </div>

                                 <div class="form-group form-check border-bottom text-center">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                                  <p><a href="{{ url('forgot-password') }}">Mot de passe oublié ?</a></p>
                                </div>
                                <div class="form-group form-check text-center">
                                  <p>Vous n'avez pas de compte ?<a href="{{ url('/register') }}">Inscrivez-vous</a></p>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 rounded-pill">Se connecter</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<footer class="p-4 border-top">
  <p class="text-white">Tous droits réservés</p>
</footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
