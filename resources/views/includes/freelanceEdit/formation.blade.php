<div class="p-3 d-md-flex d-inline justify-content-around align-items-center w-75 mb-3 mx-auto">
  <p class="mb-3"><a href="#" class="p-2 border rounded border-info text-white text-decoration-none shadow bg-info" data-toggle="modal" data-target="#addFormationModal">Ajouter une reférence</a></p>
  <p><a href="#" class="p-2 border rounded border-primary text-white text-decoration-none shadow bg-primary" data-toggle="modal" data-target="#editFormationModal">Modifier mes reférences</a></p>
</div>
<div class="card mb-3 text-dark p-3 shadow mx-auto" style="max-width: 750px;">
    <div class="row no-gutters">
      <div class="col-md-2 text-center">
        <i class="bi bi-person-circle" style="font-size: 55px;"></i>
        <img class="img-fluid rounded-circle" style="width: 80px; height: 80px;" src="https://images.unsplash.com/photo-1573164574230-db1d5e960238?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="avatar">
      </div>
      <div class="col-md-10">
        <div class="card-body pt-2">
          <h5 class="card-title d-md-flex align-items-center justify-content-between font-weight-bold">Card title
            <span class="badge font-weight-light" style="font-size: x-small;">Du: 22/03/2021 au : 22/04/2021</span>
          </h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text">
            <a href="#" class="p-2 border rounded border-primary text-decoration-none">Modifier</a>
            <a href="#" class="p-2 border rounded border-danger text-danger text-decoration-none">Supprimer</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal add Reference-->
  <div class="modal fade bg-dark" id="addFormationModal" tabindex="-1" aria-labelledby="addFormationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body p-0">
          <div class="card border-0" style="max-width: 540px;">
              <div class="col-md-12">
                <div class="card-body p-4">
                  <div class="">
                    <h4 class="text-black-50 d-md-flex align-items-center justify-content-between">Ajouter une Formation <span class="close p-2 rounded-circle shadow btn-close" data-dismiss="modal" aria-label="Close"><i class="bi bi-x"></i></span></h4>
                  </div>
                  <form >
                    <div class="form-group text-black-50">
                      <label>Type</label>
                      <select required class="form-control border-left-0 border-right-0 border-top-0 border-primary" id="exampleFormControlSelect1">
                        <option>Diplôme</option>
                        <option>Certification</option>
                      </select>
                    </div>
                    <div class="form-group text-black-50">
                      <label>Titre</label>
                      <input required type="text" name="" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light">
                    </div>
                    <div class="form-group text-black-50">
                      <label>Etablissement</label>
                      <input required type="text" name="" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light">
                    </div>
                    <div class="form-group text-black-50">
                      <label>Date de début</label>
                      <input required type="date" name="" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light">
                    </div>
                    <div class="form-group text-black-50">
                      <label>Date de fin</label>
                      <input required type="date" name="" id="date" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" placeholder="Ex: 5 mois">
                    </div>
                    <div class="form-group form-check text-black-50" id="date-none">
                      <input type="checkbox" class="form-check-input border-left-0 border-right-0 border-top-0 border-primary" id="customCheck">
                      <label class="form-check-label">Je suis actuellement en train de suivre cette formation.t</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 rounded-pill">Soumettre</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--END add Modal Reference-->

<!-- Modal edit Reference-->
<div class="modal fade bg-dark" id="editFormationModal" tabindex="-1" aria-labelledby="editFormationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <span class="close p-2 position-absolute rounded-circle shadow btn-close" data-dismiss="modal" aria-label="Close"><i class="bi bi-x"></i></span>
      <div class="modal-body p-0">
        <div class="card border-0" style="max-width: 540px;">
            <div class="col-md-12">
              <div class="card-body p-4">
                <h4 class="text-black-50 d-md-flex align-items-center justify-content-between">Modifier ma Formation <span class="close p-2 rounded-circle shadow btn-close" data-dismiss="modal" aria-label="Close"><i class="bi bi-x"></i></span></h4>
                <form >
                  <div class="form-group text-black-50">
                    <label>Type</label>
                    <select required class="form-control border-left-0 border-right-0 border-top-0 border-primary" id="exampleFormControlSelect1">
                      <option>Diplôme</option>
                      <option>Certification</option>
                    </select>
                  </div>
                  <div class="form-group text-black-50">
                    <label>Titre</label>
                    <input required type="text" name="" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light">
                  </div>
                  <div class="form-group text-black-50">
                    <label>Etablissement</label>
                    <input required type="text" name="" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light">
                  </div>
                  <div class="form-group text-black-50">
                    <label>Date de début</label>
                    <input required type="date" name="" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light">
                  </div>
                  <div class="form-group text-black-50">
                    <label>Date de fin</label>
                    <input required type="date" name="" id="date-2" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" placeholder="Ex: 5 mois">
                  </div>
                  <div class="form-group form-check text-black-50" id="date-none-2">
                    <input type="checkbox" class="form-check-input border-left-0 border-right-0 border-top-0 border-primary" id="customCheck-2">
                    <label class="form-check-label">Je suis actuellement en train de suivre cette formation.t</label>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 rounded-pill">Soumettre</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--END Modal edit Reference-->
