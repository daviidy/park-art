

      <!-- Modal -->
      <div class="modal fade bg-dark" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
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
                      <form action="/login" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Adresse E-mail</label>
                          <input type="email" name="email" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Mot de passe</label>
                         <input type="password" name="password" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" id="exampleInputPassword1">
                        </div>
                        <div class="form-group form-check border-bottom text-center">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                          <p><a href="#">Mot de passe oublié ?</a></p>
                        </div>
                        <div class="form-group form-check text-center">
                          <p>Vous n'avez pas de compte ?<a href="#">Inscrivez-vous</a></p>
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
