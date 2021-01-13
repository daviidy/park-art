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
                    <label for="exampleInputtext">Nom et Prénoms</label>
                    <input type="text" name="name" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" id="exampleInputText" aria-describedby="textHelp">
                    @error('name')
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
                    <p>Avez-vous un compte ?<a href="#">Connectez-vous</a></p>
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
