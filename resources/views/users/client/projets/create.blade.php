@extends('layouts.menuHomes')
@section('content')
<div class="col-12 col-md-11">
  <div class="p-md-4">
    <div class="d-md-flex justify-content-between align-items-center">
      <h2>Publier un projet</h2>
    </div>
    <div class="pt-md-5">
      <div class="p-4">
        <div class="card mx-auto shadow " style="width: 30rem;">
            <!--img src="images/projet.jpg" class="card-img-top img-fluid" alt="..."-->
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label>Titre du projet</label>
                  <input type="text" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label >Description du projet</label>
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label>Budget</label>
                  <select class="form-control">
                    <option>- 500 €</option>
                    <option>500 à 1000 €</option>
                    <option>1000 à 10000 €</option>
                    <option>+ 10000 €</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary w-100 rounded-pill">Publier le projet</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
