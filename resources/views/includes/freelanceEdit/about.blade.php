<div class="row">
  <div class="col-md-4 mb-4 d-md-block d-none"> </div>
  <div class="col-md-4 mb-4">
    <div class="card box-shadows">
      <div class="text-center card-image-box-set card-image-bg p-md-2">
        <img src="https://s3.amazonaws.com/assets.materialup.com/users/pictures/000/526/994/thumb/Group_11999.png?1608275306"
        class="card-img-top img-fluid rounded-circle mx-auto" alt="avatar" style="width: 150px;">
      </div>
      <div class="card-body text-dark">
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
          <div class="form-group">
            <label>Adresse email</label>
            <input type="email" value="{{ $user->email }}" class="form-control" name="email" readonly>
          </div>
          <div class="form-group">
            <label>Votre description</label>
            <textarea class="form-control" name="description" rows="3">{{ $user->description }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Modifier</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-4 mb-4 d-md-block d-none"></div>
</div>
