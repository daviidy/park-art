<!-- Modal -->
<div class="modal fade bg-dark" id="offertModal" tabindex="-1" aria-labelledby="offertModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="close p-2 position-absolute rounded-circle shadow btn-close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body p-0">
        <div class="card border-0" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4 img-login" style="background-image: url('/assets/images/offert.jpg')">
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <form method="POST" action="{{ route('save-proposal') }}">
                  @csrf
                   <input type="hidden" name="project_id" value="{{ $project->id}}"> 
                  <div class="form-group">
                    <label>Montant de l'offre</label>
                    <input required type="number" name="budget" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light">
                  </div>
                  <div class="form-group">
                    <label>Délai de réalisation</label>
                    <input required type="text" name="deadline" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" placeholder="Ex: 5 mois">
                  </div>
                  <div class="form-group">
                    <label>Message (Facultatif)</label>
                    <textarea class="form-control" rows="3" name="message"></textarea>
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
</div>
