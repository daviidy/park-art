
<div class="p-3 d-md-flex d-inline justify-content-around align-items-center w-75 mb-3 mx-auto">
  <p class="mb-3"><a href="#" class="p-2 border rounded border-info text-white text-decoration-none shadow bg-info" 
    data-toggle="modal" data-target="#addFormationModal">Ajouter une formation</a></p>
  <p><a href="#" class="p-2 border rounded border-primary text-white text-decoration-none shadow bg-primary" 
    data-toggle="modal" data-target="#editFormationModal">Modifier mes formations</a></p>
</div>
@foreach($user->educations as $education)
<div class="card mb-3 text-dark p-3 shadow mx-auto" style="max-width: 750px;">
    <div class="row no-gutters">
      <div class="col-md-2 text-center">
        <i class="bi bi-person-circle" style="font-size: 55px;"></i>
        @foreach ($education['medias'] as $media)
        <img class="img-fluid rounded-circle" style="width: 80px; height: 80px;"
         src="/images/freelancers/educations/{{ Auth::user()->first_name.'_'.Auth::user()->last_name.'_'
         .Auth::user()->id.'_'. $education['title'].'/'.$media['name'] }}" alt="education media">
        @endforeach
      </div>
      <div class="col-md-10">
        <div class="card-body pt-2">
          <h5 class="card-title d-md-flex align-items-center justify-content-between font-weight-bold">{{ $education['title'] }}
            <span class="badge font-weight-light" style="font-size: x-small;">Du: {{ \Carbon\Carbon::parse($education['begin_at'])->format('d/m/Y') }} au : {{ \Carbon\Carbon::parse($education['end_at'])->format('d/m/Y') }}</span>
          </h5>
          <p class="card-text">{{ $education['description'] }}.</p>
          <p class="card-text">
            <a href="#" class="p-2 border rounded border-primary text-decoration-none">Modifier</a>
            <a onclick="return confirm('Voulez-vous vraiment supprimée cette formation ?')" href="{{ route('delete-education', ['id'=>$education['id']]) }}" 
              class="p-2 border rounded border-danger text-danger text-decoration-none">Supprimer</a>
          </p>
        </div>
      </div>
    </div>
  </div>
@endforeach
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
                  <form method="POST" action="{{ route('save-education') }}" enctype="multipart/form-data">
                    @csrf
                    <!--<div class="form-group text-black-50">
                      <label>Type</label>
                      <select required class="form-control border-left-0 border-right-0 border-top-0 border-primary" id="exampleFormControlSelect1">
                        <option>Diplôme</option>
                        <option>Certification</option>
                      </select>
                    </div>-->
                    <div class="form-group text-black-50">
                      <label>Titre</label>
                      <input required type="text" name="title" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light">
                    </div>
                    <div class="form-group text-black-50">
                      <label>Description</label>
                      <input required type="text" name="description" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light">
                    </div>
                   <!-- <div class="form-group text-black-50">
                      <label>Etablissement</label>
                      <input required type="text" name="etablissement" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light">
                    </div> -->
                    <div class="form-group text-black-50">
                      <label>Date de début</label>
                      <input required type="date" name="begin_at" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light">
                    </div>
                    <div class="form-group text-black-50">
                      <label>Date de fin</label>
                      <input required type="date" name="end_at" id="date" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" placeholder="Ex: 5 mois">
                    </div>
                    <div class="form-group text-black-50">
                      <label>Medias</label>
                      <input type="file" name="medias[]" id="date-2" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light"
                      accept="image/x-png,image/gif,image/jpeg" placeholder="" multiple>
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
                <form method="POST" action="{{ route('save-education') }}" enctype="multipart/form-data">
                  <div class="form-group text-black-50">
                    <label>Type</label>
                    <select required class="form-control border-left-0 border-right-0 border-top-0 border-primary" id="exampleFormControlSelect1">
                      <option>Diplôme</option>
                      <option>Certification</option>
                    </select>
                  </div>
                  <div class="form-group text-black-50">
                    <label>Titre</label>
                    <input required type="text" name="title" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light">
                  </div>
                  <div class="form-group text-black-50">
                    <label>Description</label>
                    <input required type="text" name="description" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light">
                  </div>
                  <div class="form-group text-black-50">
                    <label>Etablissement</label>
                    <input  type="text" name="etablissement" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light">
                  </div>
                  <div class="form-group text-black-50">
                    <label>Date de début</label>
                    <input required type="date" name="begin_at" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light">
                  </div>
                  <div class="form-group text-black-50">
                    <label>Date de fin</label>
                    <input required type="date" name="end_at" id="date-2" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" placeholder="Ex: 5 mois">
                  </div>
                  <div class="form-group text-black-50">
                    <label>Medias</label>
                    <input required type="date" name="medias[]" id="date-2" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" placeholder="" multiple>
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
