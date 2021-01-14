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
      <div class="row">

        <div class="col-md-4">
          <a href="#" class="text-decoration-none ">
            <div class="card border-0 mb-3" style="max-width: 540px;">
              <div class="row rounded-lg box-shadow no-gutters align-items-center">
                <div class="col-md-4 text-center py-md-0 py-3">
                  <img src="https://trello-members.s3.amazonaws.com/5a0488143e7858da0f497a05/a2fe363dd6cf7913f7b1e7e76b11880d/30.png" class="card-img img-fluid rounded-circle px-4 img-pr" alt="avatar" width="100">
                </div>
                <div class="col-md-8">
                  <div class="card-body text-muted">
                    <h5 class="card-title font-weight-bold">Card title</h5>
                    <p class="card-text">This is a wider card with .</p>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

      </div>
  </div>
</section>
@endsection
