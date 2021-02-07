@extends('layouts.menu')
@section('content')
      <section class="hero-pro-show"></section>
      <section class="mb-5">
        <div class="">
          <div class="position-absolute p-3" style="top:250px; left:50px">
          @if($project->user->profile_image != "image_default.png")
            <img width="150" height="150" src="/images/{{ $project->user->profile_image }}" alt="" class=" rounded-lg">
          @else
          <i class="bi bi-person-circle text-info" style="font-size: 110px;"></i>
          @endif
            <h4 class="pt-2">{{ $project->user->first_name }} {{ $project->user->last_name }}</h4>
          </div>
        </div>
      </section>
      @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
      </div>
    @endif
    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
  @endif
      <section class="p-md-5 p-3">
        <div class="container-fluid">
          <div class="row row-cols-1 row-cols-md-2">
            <div class="col-md-12">
              <div class="card rounded-lg shadow">
                <div class="card-body">
                  <div class="container">
                    <div class="pt-3">
                      <div class="d-md-flex justify-content-between align-items-center">
                        <div class="">
                          <p class="h6 badge font-weight-light">Catégories :<span class="font-weight-bold ">Web</span> </p>
                        </div>
                        <div class="d-md-flex justify-content-between align-items-center">
                          <p class="h6 badge font-weight-light"> Posté le <span class="font-weight-bold">15/02/2021</span></p>
                          <p class="h6 badge font-weight-light pl-md-4"><span class="font-weight-bold">{{  count($proposal) }}</span> offre(s)</p>
                        </div>
                      </div>
                    </div>
                    <div class="row border rounded-lg mt-3">
                      <div class="col-md-8 py-2 d-flex justify-content-between align-items-center">
                        <h4 class="h6">Budget :</h4>
                        <p class="mb-0 font-weight-bold">{{ $project->budget }}€</p>
                      </div>
                      @if($hasProposal)
                        <div class="col-md-4 border-left p-3 text-center">
                            <p>Vous avez deja postulier merci de bien vouloir patienter 😊</p>
                        </div>
                      @else
                        <div class="col-md-4 border-left p-3 text-center">
                                <span class="btn btn-primary" data-toggle="modal" data-target="#offertModal">Proposer une offre</span>
                        </div>
                    </div>
                    @endif
                    <div class="row">
                      <div class="col-md-12 pt-md-4 pt-3">
                        <h4 class="pb-3 font-weight-bold">Description</h4>
                        <p>{{ $project->description }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
