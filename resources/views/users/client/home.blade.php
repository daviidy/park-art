@extends('layouts.menuHomes')
@section('content')
<div class="col-12 col-md-11">
  <div class="p-md-4">
    <div class="align-items-center d-flex justify-content-between mb-5 pt-5">
      <h2>Mes projets</h2>
      <a href="{{ route('projects.create') }}" class="btn-bg-plus p-2 p-md-3 rounded-lg text-decoration-none text-white shadow">Publier un projet</a>
    </div>

    <div class="pt-md-5">
      <div class="">
        <div class="container">
          <div class="row">
            <div class="col-md-12 d-md-block d-none">
              <div class="card border-0 mb-3 bg-transparent">
                <div class="row rounded-lg border-bottoms no-gutters p-3 align-items-center">
                  <div class="col-md-3">
                    <div class="">
                      <p class="card-text">Titre du projet</p>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="">
                      <p class="card-text">Description du projet</p>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="">
                      <p class="card-text">Card title</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              @foreach($projects as $project)
              <div class="card border-0 mb-3">
                <div class="row rounded-lg box-shadow no-gutters p-3 shadow align-items-center">
                  <div class="col-md-3">
                    <div class="">
                      <p class="card-text">{{ $project->title }} </p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="">
                      <p class="card-text">{{ $project->description }}</p>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="">
                      <p class="card-text">{{ $project->budget }}€</p>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div class="">
                      <p class="card-text"><a href="{{ route('projects.edit', $project->id) }}"><i class="bi bi-trash text-danger btn-delete"></i></a></p>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
