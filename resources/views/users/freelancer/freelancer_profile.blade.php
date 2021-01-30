@extends('layouts.menuHomeFreelance')
@section('content')
<div class="col-12 col-md-11 side-content">
  <span class="d-md-none d-block">
    <i class="bi bi-list hamburger position-relative border p-2 font-weight-bold shadow-sm bg-light " style="font-size:30px; top:15px" ></i>
  </span>
  <div class="p-md-4">
    <div class="align-items-center d-flex justify-content-between mb-5 pt-5">
      <h2>Mon Profil</h2>
      <!--a href="{{ route('projects.create') }}" class="btn-bg-plus p-2 p-md-3 rounded-lg text-decoration-none text-white shadow border-white border">Publier un projet</a-->
    </div>
    <div class="pt-md-5">

      <div class="row row-cols-1 row-cols-md-2">
        <div class="col-md-3 mb-4 d-md-block d-none"> </div>
        <div class="col-md-6 mb-4">
          <div class="card box-shadows p-1">
            <div class="text-center px-md-5 ">
                @if($user->profile_image != "image_default.png")
                <img src="/images/{{ $user->profile_image }}" class="card-img-top p-2 img-fluid rounded-circle w-50 mx-auto" alt="...">
                @else
                <i class="bi bi-person-circle text-secondary" style="font-size: 130px;"></i>
                @endif
            </div>
            <div class="card-body p-md-2">
              <ul class="list-group text-center">
                <li class="align-items-center border-0 list-group-item">
                  <!--span class=""><i class="bi bi-person-circle h2"></i></span-->
                  <span class="font-weight-bold badge">Prénoms : </span>{{ $user->first_name }}
                </li>
                <li class="align-items-center border-0 list-group-item">
                  <!--span class=""><i class="bi bi-person-circle h2"></i></span-->
                  <span class="font-weight-bold badge">Nom : </span>{{ $user->last_name }}
                </li>
                <li class="align-items-center border-0 list-group-item">
                  <!--span class=""><i class="bi bi-person-circle h2"></i></span-->
                  <span class="font-weight-bold badge">Description : </span>{{ $user->description }}
                </li>
                <li class="align-items-center border-0 list-group-item">
                  <!--span class=""><i class="bi bi-envelope h2"></i></span-->
                  <span class="font-weight-bold badge">Email : </span>{{ $user->email }}
                </li>
                <li class="align-items-center border-0 list-group-item">
                  <!--span class=""><i class="bi bi-envelope h2"></i></span-->
                  <span class="font-weight-bold badge">Nombre de projet : </span>{{ count($user->projects) }}
                </li>
              </ul>
              <div class="py-3 text-center">
                <a href="{{ route('freelancer-edit',$user->id) }}" class="btn card-image-bg shadow-sm text-btn-size text-white font-weight-bold">Modifier mon profil</a>
                <a href="{{ route('projects.create') }}" class="btn border ml-md-2 mt-4 mt-md-0 text-btn-size font-weight-bold">Publier un projet</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4 d-md-block d-none"></div>
      </div>


    </div>
  </div>
</div>
@endsection
