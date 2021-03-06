@extends('layouts.menu')
@section('content')
<section class="hero-pr" style="background-image:url('/assets/images/image1.jpg') ">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="text-center position-relative header-text">
          <h1 class="display-1 font-weight-bold text-white">Nos Projets</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="p-md-4 p-2 bg-light">
  <div class="container-fluid">
    @foreach($categories as $category)
      @if(count($category['projects']))
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
                          <label class=" d-flex justify-content-between align-items-center" >{{ $category['name'] }} <span class="badge badge-info"> 25</span> </label>
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
              @if($category['projects'])
                  @foreach($category['projects'] as $project)

            <div class="col-md-4 mb-3">
              <div class="card shadow-sm rounded-lgs">
                <div class="card-body p-3">
                  @if($project->user->profile_image != "image_default.png")
                  <img src="/images/{{$project->user->profile_image }}" class="card-img-top img-fluid rounded-circle mx-auto" alt="avatar" style="width: 150px;">
                  @else
                  <i class="bi bi-person-circle text-black" style="font-size: 80px;"></i>
                  @endif                  <h5 class="card-title h6 font-weight-bold">{{ $project->title }}</h5>
                  <p class="card-text">{{  \Illuminate\Support\Str::limit($project->description, 200, ) }}</p>
                  <p class="card-text"> <strong>{{ $project->budget }}  € </strong> </p>
                  <div class="mb-4">
                    <ul class="list-group list-group-horizontal-md d-flex justify-content-between">
                      <li class="list-group-item border-0 badge p-2 bg-primarys">{{ $category['name'] }}</li>
                    </ul>
                  </div>
                  <div class="">
                    {{--  <a href="{{ route('proposal.create', $project->id) }}" class="btn btn-primary px-4">Postuler</a>  --}}
                    <a href="{{ url('/nos-projets', $project->id) }}" class="btn btn-primary px-5">Voir</a>
                  </div>

                </div>
              </div>
            </div>


            @endforeach
          @endif
          </div>
        </div>
      </div>
      @endif
    @endforeach
  </div>
</section>
@endsection
