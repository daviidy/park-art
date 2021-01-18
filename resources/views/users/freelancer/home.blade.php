@extends('layouts.menuHomes')
@section('content')
<div class="col-12 col-md-11">
  <div class="p-md-4">
    <div class="align-items-center d-flex justify-content-between mb-5 pt-5">
      <h2 class="h3">Mes projets</h2>
      <a href="#" class="btn-bg-plus p-2 p-md-3 rounded-lg text-decoration-none text-white shadow">Publier un projet</a>
    </div>
    <div class="pt-md-5">
      <div class="">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Projet en cours</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Projets remportés</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">@include('includes.projetEnCours')</div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">@include('includes.projetRemporter')</div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
