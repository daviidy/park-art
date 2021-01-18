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

              <div class="" >
                <div class="">
                  <div class="">
                    <div class="p-0">
                      <div class="card border-0 mx-auto" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4 img-login" style="background-image: url('/assets/images/login.jpg')">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body p-4">
                              <form method="post" action="register">
                                @csrf
                                <div class="form-group">
                                  <label for="exampleInputtext">Votre Prénoms</label>
                                  <input type="text" name="first_name" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" id="exampleInputText" aria-describedby="textHelp">
                                  @error('first_name')
                                      <p>{{ $message }}</p>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputtext">Votre Nom</label>
                                  <input type="text" name="last_name" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" id="exampleInputText" aria-describedby="textHelp">
                                  @error('last_name')
                                      <p>{{ $message }}</p>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Adresse E-mail</label>
                                  <input type="email" name="email" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  @error('email')
                                      <p>{{ $message }}</p>
                                  @enderror
                                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" value="1" name="role_id" id="customRadioInline1" class="custom-control-input"/>
                                  <label class="custom-control-label" for="customRadioInline1">Client</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" value="2" name="role_id" id="customRadioInline2" class="custom-control-input"/>
                                  <label class="custom-control-label" for="customRadioInline2">Prestataire</label>
                                  <br>
                                  @error('role_id')
                                      <p>{{ $message }}</p>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Mot de passe</label>
                                  <input type="password" name="password" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" id="exampleInputPassword1">
                                  @error('password')
                                      <p>{{ $message }}</p>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Confirmez le mot de passe</label>
                                  <input type="password" name="password_confirmation" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" id="exampleInputPassword1">
                                  @error('password_confirmation')
                                     <p>{{ $message }}</p>
                                  @enderror
                                </div>
                                <div class="form-group form-check text-center">
                                  <p>Avez-vous un compte ?<a href="{{ url('/login') }}">Connectez-vous</a></p>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 rounded-pill">S'inscrire</button>
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
