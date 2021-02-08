@extends('layouts.menuHomes')
@section('content')
<div class="col-12 col-md-11 side-content">
  <span class="d-md-none d-block">
    <i class="bi bi-list hamburger position-relative border p-2 font-weight-bold shadow-sm bg-light " style="font-size:30px; top:15px" ></i>
  </span>
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
                      @if(Auth::user()->profile_image != "image_default.png")
                      <img src="/images/{{Auth::user()->profile_image }}" class="card-img-top img-fluid rounded-circle mx-auto" alt="avatar" style="width: 150px;">
                      @else
                      <i class="bi bi-person-circle text-black" style="font-size: 55px;"></i>
                      @endif
                      <p class="card-text">{{ $project->title }} <span class="pl-1"> <a href="{{ route('projects.edit', $project->id) }}"><i class="bi bi-pencil-square btn-delete"></i></a></span> </p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="p-2 p-md-0">
                      <p style="cursor: pointer" data-proposals="{{ $project->users }}" class="card-text proposals" data-toggle="modal">
                        <span><i class="bi bi-eye-fill"></i></span>
                        Voir la liste des offres
                      </p>
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
                            <input type="submit" value="">
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
      {{-- {{ $projects->onEachSide(5)->links() }} --}}
    </div>
  </div>
</div>
@endsection
