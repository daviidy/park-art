@extends('layouts.menu')
@section('content')
<section class="hero-pr" style="background-image:url('/assets/images/image1.jpg') ">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="text-center position-relative header-text">
          <h1 class="display-1 font-weight-bold text-white">Nos Projets</h1>
          <!--button class="btn mt-4 text-white rounded-pill px-5 font-weight-bolder">Créer un compte</button-->
        </div>
      </div>
    </div>
  </div>
</section>
<section class="p-md-4 p-2 bg-light">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="">
          <div class="accordion" id="accordionExample">
            <div class="card border-0">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-dark text-left font-weight-bold text-decoration-none d-flex justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Catégories <span><i class="bi bi-chevron-up"></i></span>
                  </button>
                </h2>
              </div>

              <div id="collapseOne" class="collapse show bg-light p-2" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body p-2">
                  <ul class="list-group">
                    <li class="list-group-item border-0 bg-light">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input">
                        <label class=" d-flex justify-content-between align-items-center" >Web <span class="badge badge-info"> 25</span> </label>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="row">
            @if($projects)
                @foreach($projects as $project)

          <div class="col-md-4">
            <div class="card shadow-sm rounded-lgs">
              <div class="card-body p-3">
                <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/0tTy4z3lTbCkw18ehjQ8" alt="" class="img-fluid rounded-lgs p-2" style="width: 100px;height: 100px">
                <h5 class="card-title h6 font-weight-bold">{{ $project->title }}</h5>
                <p class="card-text">{{  \Illuminate\Support\Str::limit($project->description, 200, ) }}</p>
                <p class="card-text">{{ $project->budget }}</p>
                <div class="mb-4">
                  <ul class="list-group list-group-horizontal-md d-flex justify-content-between">
                    <li class="list-group-item border-0 badge p-2 bg-primarys">Full time</li>
                    <li class="list-group-item border-0 badge p-2 bg-primarys">Min. 1 an</li>
                    <li class="list-group-item border-0 badge p-2 bg-primarys">senior level</li>
                  </ul>
                </div>
                <div class="text-center">
                  <a href="{{ url('/nos-projets', $project->id) }}" class="btn btn-primary px-4">Postuler</a>
                  <a href="#" class="btn btn-primary px-5">Voir</a>
                </div>

              </div>
            </div>
          </div>


          @endforeach
        @endif
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
