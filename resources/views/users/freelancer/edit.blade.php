@extends('layouts.menuHomeFreelance')
@section('content')
<div class="col-12 col-md-11 side-content">
  <span class="d-md-none d-block">
    <i class="bi bi-list hamburger position-relative border p-2 font-weight-bold shadow-sm bg-light " style="font-size:30px; top:15px" ></i>
  </span>
  <div class="p-md-4">
    <div class="align-items-center d-flex justify-content-between mb-5 pt-5">
      <h2>Modifié mon profil</h2>
      <a href="#" class="btn-bg-plus p-2 p-md-3 rounded-lg text-decoration-none text-white shadow">Publier un projet</a>
    </div>

    {{-- @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
    </div>
    @endif --}}

    <div class="pt-md-5">
      <div class="row row-cols-1 row-cols-md-2">
        <div class="col-md-4 mb-4 d-md-block d-none"> </div>
        <div class="col-md-4 mb-4">
          <div class="card box-shadows">
            <div class="text-center card-image-box-set card-image-bg p-md-5">
              @if($user->profile_image != "image_default.png")
                  @if(Session::get('image'))
                  <img src="/images/{{ Session::get('image') }}" class="card-img-top img-fluid rounded-circle w-50 mx-auto" alt="...">
                  @else
                    <img src="/images/{{ $user->profile_image }}" class="card-img-top img-fluid rounded-circle w-50 mx-auto" alt="...">
                  @endif
              @else
                <img src="/default_image/{{ $user->profile_image }}" class="card-img-top img-fluid rounded-circle w-50 mx-auto" alt="...">
              @endif

            </div>
            <div class="card-body">
              <form method="post" action="{{ route('freelancer-update') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>Modifier votre photo</label>
                  <input type="file" name="profile_image" class="form-control-file">
                  @error('profile_image')
                    {{ $message }}
                  @enderror
                </div>
                <div class="form-group profit-225">
                  <label>Prénoms</label>
                  <input type="text" class="form-control" name="name" value="{{ $user->first_name }}" readonly>
                </div>
                <div class="form-group profit-225">
                  <label>Nom</label>
                  <input type="text" class="form-control" name="name" value="{{ $user->last_name }}" readonly>
                </div>
                <div class="form-group profit-225">
                  <label>Votre description</label>
                  <textarea name="description" id="" cols="30" rows="10">{{ $user->description }}</textarea>
                </div>
                <div class="form-group profit-225">
                  <label>Adresse email</label>
                  <input type="email" value="{{ $user->email }}" name="email" class="form-control" readonly>
                </div>
                <button type="submit" class="btn btn-primary w-100">Modifier</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 d-md-block d-none"></div>
      </div>
    </div>
  </div>
</div>
@endsection
