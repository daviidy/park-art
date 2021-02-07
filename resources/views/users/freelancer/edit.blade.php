@extends('layouts.menuHomeFreelance')
@section('content')
<div class="col-12 col-md-11">
  <div class="p-md-4">
    <div class="align-items-center d-flex justify-content-between mb-5 pt-5">
      <h2 class="h3">Mes paramètres</h2>
    </div>

    <div class="pt-md-5">
      <div class="">
        <ul class="nav nav-pills p-md-4 shadow bg-white mb-3 justify-content-center" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="pills-about-tab" data-toggle="pill" href="#pills-about" role="tab" aria-controls="pills-about" aria-selected="true">A propos</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-presentation-tab" data-toggle="pill" href="#pills-presentation" role="tab" aria-controls="pills-presentation" aria-selected="false">Présentation</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-reference-tab" data-toggle="pill" href="#pills-reference" role="tab" aria-controls="pills-reference" aria-selected="false">Référence</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-formation-tab" data-toggle="pill" href="#pills-formation" role="tab" aria-controls="pills-formation" aria-selected="false">Formation</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade p-3 show active" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
            @include('includes.freelanceEdit.about')
          </div>
          <div class="tab-pane fade p-3" id="pills-presentation" role="tabpanel" aria-labelledby="pills-presentation-tab">
            @include('includes.freelanceEdit.presentation')
          </div>
          <div class="tab-pane fade p-3" id="pills-reference" role="tabpanel" aria-labelledby="pills-reference-tab">
            @include('includes.freelanceEdit.reference')
          </div>
          <div class="tab-pane fade p-3" id="pills-formation" role="tabpanel" aria-labelledby="pills-formation-tab">
            @include('includes.freelanceEdit.formation')
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
