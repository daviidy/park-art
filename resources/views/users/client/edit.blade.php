@extends('layouts.menuHomes')
@section('content')
<div class="col-12 col-md-11">
  <div class="p-md-4">
    <div class="align-items-center d-flex justify-content-between mb-5 pt-5">
      <h2>Mes projets</h2>
      <a href="#" class="btn-bg-plus p-2 p-md-3 rounded-lg text-decoration-none text-white shadow border-white border">Publier un projet</a>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
    </div>
    @endif

    <div class="pt-md-5">
      <div class="row row-cols-1 row-cols-md-2">
        <div class="col-md-4 mb-4 d-md-block d-none"> </div>
        <div class="col-md-4 mb-4">
          <div class="card box-shadows">
            <div class="text-center card-image-box-set card-image-bg p-md-5">
              <img src="/images/{{ Session::get('image') }}" class="card-img-top img-fluid rounded-circle w-50 mx-auto" alt="...">
              {{-- <img src="/images/{{ $user->profile_image }}.png" class="card-img-top img-fluid rounded-circle w-50 mx-auto" alt="..."> --}}
            </div>
            {{ $errors }}
            <div class="card-body">
              <form method="post" action="{{ route('my-profile.update', $user->id) }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                  <label>Modifier votre photo</label>
                  <input type="file" name="profile_image" class="form-control-file">
                  @error('profile_image')
                    {{ $message }}
                  @enderror
                </div>
                <div class="form-group profit-225">
                  <label>Nom</label>
                  <input type="email" class="form-control" name="name" value="{{ $user->name }}" readonly>
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
