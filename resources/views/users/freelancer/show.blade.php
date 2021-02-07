@extends('layouts.menu')
@section('content')
      <section class="hero-pro-show"></section>
      <section class="mb-5">
        <div class="">
          <div class="position-absolute p-3 text-center" style="top:220px; left:50px">
            <img width="150" height="150" class="rounded-circle" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/0tTy4z3lTbCkw18ehjQ8" >
            <i class="bi bi-person-circle text-white bg-dark p-3 rounded-lg" style="font-size: 100px;"></i>
            <h4 class="pt-2">Arsene</h4>
          </div>
        </div>
      </section>
      <section class="p-md-5 p-3">
        <div class="container-fluid">
          <div class="row row-cols-1 row-cols-md-2">
            <div class="col-md-12">
              <div class="">
                <ul class="nav nav-pills p-md-4 shadow-sm bg-white mb-3 justify-content-center" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-presentation-tab" data-toggle="pill" href="#pills-presentation" role="tab" aria-controls="pills-presentation" aria-selected="true">Présentation</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-reference-tab" data-toggle="pill" href="#pills-reference" role="tab" aria-controls="pills-reference" aria-selected="false">Référence</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-formation-tab" data-toggle="pill" href="#pills-formation" role="tab" aria-controls="pills-formation" aria-selected="false">Formation</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-projet-tab" data-toggle="pill" href="#pills-projet" role="tab" aria-controls="pills-projet" aria-selected="false">Projets remportés</a>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade p-3 show active" id="pills-presentation" role="tabpanel" aria-labelledby="pills-presentation-tab">
                    @include('includes.freelanceShow.presentation')
                  </div>
                  <div class="tab-pane fade p-3" id="pills-reference" role="tabpanel" aria-labelledby="pills-reference-tab">
                    @include('includes.freelanceShow.reference')
                  </div>
                  <div class="tab-pane fade p-3" id="pills-formation" role="tabpanel" aria-labelledby="pills-formation-tab">
                    @include('includes.freelanceShow.formation')
                  </div>
                  <div class="tab-pane fade p-3" id="pills-projet" role="tabpanel" aria-labelledby="pills-projet-tab">
                    @include('includes.freelanceShow.projetRemporte')
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>
@endsection
