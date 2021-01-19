@extends('layouts.menu')
@section('content')
      <section class="hero-pro-show"></section>
      <section class="p-md-5 p-3">
        <div class="container-fluid">
          <div class="row row-cols-1 row-cols-md-2">
            <div class="col-md-3 d-md-block d-none"> </div>
            <div class="col-md-6">
              <div class="card rounded-lg shadow">
                <div class="mb-5" style="background-image: url('images/myProjet.jpg');background-size: cover;background-repeat: no-repeat; height:160px;" >
                  <div class="position-absolute p-3" style="top:97px">
                  @if($project->user->profile_image != "image_default")
                    <img width="100" height="100" src="/images/{{ $project->user->profile_image }}" alt="" class=" rounded-lg">
                  @else
                    <img width="100" height="100" src="/default_image/{{ $project->user->profile_image }}" alt="" class=" rounded-lg">
                  @endif
                    <h4 class="pt-2">{{ $project->user->first_name }} {{ $project->user->last_name }}</h4>
                  </div>
                </div>
                <div class="card-body">
                  <div class="container">
                    <div class="pt-5">
                      <div class="d-md-flex justify-content-between align-items-center">
                        <div class="">
                          <p class="h6 badge font-weight-light">Catégories :<span class="font-weight-bold ">Web</span> </p>
                        </div>
                        <div class="d-md-flex justify-content-between align-items-center">
                          <p class="h6 badge font-weight-light"> Poster le <span class="font-weight-bold">15/02/2021</span></p>
                          <p class="h6 badge font-weight-light pl-md-4"><span class="font-weight-bold">50</span> postulant(s)</p>
                        </div>
                      </div>
                    </div>
                    <div class="row border rounded-lg mt-3">
                      <div class="col-md-8 py-2 d-flex justify-content-between align-items-center">
                        <h4 class="h6">Budget :</h4>
                        <p class="mb-0">{{ $project->budget }}</p>
                      </div>
                      <div class="col-md-4 border-left p-3 text-center">
                        <span class="btn btn-primary">Proposer un offre</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 pt-md-4 pt-3">
                        <h4 class="pb-3 h6">Description</h4>
                        <p>{{ $project->description }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-md-block d-none"></div>
          </div>
        </div>
      </section>
@endsection
