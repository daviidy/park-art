<div class="modal fade bg-dark" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="close p-2 position-absolute rounded-circle shadow btn-close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body p-0">
        <div class="card border-0" style="max-width: 540px;">
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
                </div>

                <div>
                    @error('first_name')
                        <p class="alert alert-danger">Veillez entré votre prénoms</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputtext">Votre Nom</label>
                    <input type="text" name="last_name" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" id="exampleInputText" aria-describedby="textHelp">
                </div>

                    <div>
                      @error('last_name')
                      <p class="alert alert-danger">Veillez entré votre nom</p>
                      @enderror
                    </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Adresse E-mail</label>
                    <input type="email" name="email_register" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                 <div>
                    @error('email_register')
                    <p class="alert alert-danger">Veillez entré votre email</p>
                    @enderror
                  </div>

                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" value="1" name="role_id" id="customRadioInline1" class="custom-control-input"/>
                    <label class="custom-control-label" for="customRadioInline1">Visiteur </label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" value="2" name="role_id" id="customRadioInline2" class="custom-control-input"/>
                    <label class="custom-control-label" for="customRadioInline2">Acteur du milieu de l'art</label>
                    <br>
                </div>

                 <div>
                    @error('role_id')
                        <p class="alert alert-danger">Veillez choisir votre type de profil</p>
                    @enderror
                  </div>


                  <div class="form-group mt-3">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input type="password" name="password_register" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" id="exampleInputPassword1">
                </div>

                  <div>
                      @error('password_register')
                          <p class="alert alert-danger">{{ $message }}</p>
                      @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Confirmez le mot de passe</label>
                    <input type="password" name="password_confirmation" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" id="exampleInputPassword1">
                  </div>
                  <div class="form-group form-check text-center">
                    <p>Avez-vous un compte ?<a href="{{ route('login') }}">Connectez-vous</a></p>
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
