@extends('layouts.menuHomes')
@section('content')
<div class="col-12 col-md-11">
  <div class="p-md-4">
    <div class="align-items-center d-flex justify-content-between mb-5 pt-5">
      <h2 class="h3">Mes projets</h2>
      <a href="{{ route('projects.create') }}" class="btn-bg-plus p-2 p-md-3 rounded-lg text-decoration-none text-white shadow">Publier un projet</a>
    </div>

    <div class="pt-md-5">
      <div class="">
        <div class="container">

          <div class="row">
            <div class="col-md-12">
              @foreach($projects as $project)
              <div class="card border-0 mb-3">
                <div class="row rounded-lg box-shadow no-gutters p-3 shadow align-items-center">
                  <div class="col-md-3 pr-4">
                    <div class="p-2 p-md-0 d-flex justify-content-around align-items-center">
                      <img src="https://oschoolelearning.com/images/courses/logos/1580161319.png" alt="" class="img-fluid " style="width: 50px">
                      <p class="card-text">{{ $project->title }} <span class="pl-1"> <a href="#"><i class="bi bi-pencil-square btn-delete"></i></a></span> </p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="p-2 p-md-0">
                      <p class="card-text">{{ $project->description }}</p>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="p-2 p-md-0">
                      <p class="card-text">{{ $project->budget }}€</p>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div class="">
                      <p class="card-text"><a href="{{ route('projects.edit', $project->id) }}">
                    </a></p>

                    <a href="#">
                        <form action="{{ route('projects.destroy', $project->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="supprimer">
                            <i class="bi bi-trash text-danger btn-delete"></i>
                            <input>
                        </form>
                    </a>
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
