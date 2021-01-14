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
          <div class="card card-image-box box-shadows p-1">
            <div class="text-center card-image-box card-image-bg p-md-5">
              <img src="https://s3.amazonaws.com/assets.materialup.com/users/pictures/000/526/994/thumb/Group_11999.png?1608275306" class="card-img-top img-fluid rounded-circle w-50 mx-auto" alt="...">
            </div>
            <div class="card-body">
              <ul class="list-group">
                <li class="border-0 list-group-item d-flex justify-content-between align-items-center">
                  <span class=""><i class="bi bi-person-circle h2"></i></span>
                  Arsene Kouassi
                </li>
                <li class="border-0 list-group-item d-flex justify-content-between align-items-center">
                  <span class=""><i class="bi bi-envelope h2"></i></span>
                  arsene@oschool.ci
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 d-md-block d-none"></div>
      </div>
    </div>
  </div>
</div>
@endsection
