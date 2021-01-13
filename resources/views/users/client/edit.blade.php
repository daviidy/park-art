@extends('layouts.menuHomes')
@section('content')
<div class="col-12 col-md-11">
  <div class="p-md-4">
    <div class="align-items-center d-flex justify-content-between mb-5 pt-5">
      <h2>Mes projets</h2>
      <a href="#" class="btn-bg-plus p-2 p-md-3 rounded-lg text-decoration-none text-white shadow border-white border">Publier un projet</a>
    </div>
    <div class="pt-md-5">
      <div class="row row-cols-1 row-cols-md-2">
        <div class="col-md-4 mb-4 d-md-block d-none"> </div>
        <div class="col-md-4 mb-4">
          <div class="card box-shadows">
            <div class="text-center card-image-box-set card-image-bg p-md-5">
              <img src="https://s3.amazonaws.com/assets.materialup.com/users/pictures/000/526/994/thumb/Group_11999.png?1608275306" class="card-img-top img-fluid rounded-circle w-50 mx-auto" alt="...">
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label>Modifier votre photo</label>
                  <input type="file" class="form-control-file">
                </div>
                <div class="form-group profit-225">
                  <label>Nom</label>
                  <input type="email" class="form-control" readonly>
                </div>
                <div class="form-group profit-225">
                  <label>Adresse email</label>
                  <input type="email" class="form-control" readonly>
                </div>
                <button type="submit" class="btn btn-primary w-100">Modifier</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 d-md-block d-none"></div>
      </div>
    </div>
  </div>
</div>
@endsection
