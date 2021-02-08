<h4 class="text-black-50 d-md-flex align-items-center justify-content-between">Modifier ma Formation <span class="close p-2 rounded-circle shadow btn-close" data-dismiss="modal" aria-label="Close"><i class="bi bi-x"></i></span></h4>

<form method="POST" action="{{ route('update-education') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group text-black-50">
      <label>Titre</label>
      <input type="hidden" name="education_id" value="{{ $education->id }}">
      <input required type="text" name="title" value="{{ $education->title}}" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light">
    </div>
    <div class="form-group text-black-50">
      <label>Description</label>
      <input required type="text" value="{{ $education->description }}" name="description" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light">
    </div>
    <div class="form-group text-black-50">
      <label>Date de début</label>
      <input required type="date" value="{{ $education->begin_at }}" name="begin_at" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light">
    </div>
    <div class="form-group text-black-50">
      <label>Date de fin</label>
      <input required type="date" name="end_at" value="{{ $education->end_at }}" id="date" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" placeholder="Ex: 5 mois">
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