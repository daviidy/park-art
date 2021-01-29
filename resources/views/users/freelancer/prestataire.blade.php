@extends('layouts.menu')
@section('content')
<section class="hero-pr" style="background-image:url('/assets/images/image1.jpg') ">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="text-center position-relative header-text">
          <h1 class="display-1 font-weight-bold text-white">Nos Prestataires</h1>
          <!--button class="btn mt-4 text-white rounded-pill px-5 font-weight-bolder">Créer un compte</button-->
        </div>
      </div>
    </div>
  </div>
</section>
<section class="p-md-5 p-3">
  <div class="container-fluid">
    @if(count($freelancers) > 0)

    @foreach($freelancers as $freelance)

      <div class="row">

        <div class="col-md-4">
          <a href="{{ url('/prestataire', $freelance->id) }}" class="text-decoration-none ">
            <div class="card border-0 mb-3" style="max-width: 540px;">
              <div class="row rounded-lg box-shadow no-gutters align-items-center">
                <div class="col-md-4 text-center py-md-0 py-3">
                  @if($freelance->profile_image != "image_default.png")
                  <img src="/images/{{ $freelance->profile_image }}" class="card-img img-fluid rounded-circle px-5 img-pr" alt="avatar" width="80%">
                  @else
                  <img src="/default_image/{{ $freelance->profile_image }}" class="card-img img-fluid rounded-circle px-5 img-pr" alt="avatar" width="80%">
                  @endif
                </div>
                <div class="col-md-8">
                  <div class="card-body text-muted">
                    <h5 class="card-title font-weight-bold text-md-left text-center">{{ $freelance->first_name }} {{ $freelance->last_name }}</h5>
                    <p class="card-text text-truncate">{{ \Illuminate\Support\Str::limit($freelance->description, 100, ) }} .</p>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

      </div>
    @endforeach
    @else
      <h3>Pas encore de Prestataire</h3>
    @endif


  </div>
</section>
@endsection
