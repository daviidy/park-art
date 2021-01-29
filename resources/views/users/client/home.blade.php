@extends('layouts.menuHomes')
@section('content')
<div class="col-12 col-md-11 side-content">
  <span class="d-md-none d-block">
    <i class="bi bi-list hamburger position-relative border p-2 font-weight-bold shadow-sm bg-light " style="font-size:30px; top:15px" ></i>
  </span>
  <div class="p-md-4">
    <div class="align-items-center d-flex justify-content-between mb-5 pt-5">
      <h2 class="h3">Mes actions</h2>
    </div>

    <div class="pt-md-5">
      <div class="card-deck text-center">
        <div class="card p-4 shadow">
          <a href="{{ route('projects.create') }}" class="text-decoration-none text-info">
            <i class="fas fa-paper-plane" style="font-size: 60px;"></i>
            <div class="card-body">
              <h5 class="card-title h3">Publier un projet</h5>
            </div>
          </a>
        </div>

        <div class="card p-4 shadow">
          <a href="#" class="text-decoration-none text-info">
            <i class="fas fa-users" style="font-size: 60px;"></i>
            <div class="card-body">
              <h5 class="card-title h3">Voir les acteurs du milieu de l'art</h5>
            </div>
          </a>
        </div>
        <div class="card p-4 shadow">
          <a href="#" class="text-decoration-none text-info">
            <i class="fas fa-paste" style="font-size: 60px;"></i>
            <div class="card-body">
              <h5 class="card-title h3">Voir mes projets</h5>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
