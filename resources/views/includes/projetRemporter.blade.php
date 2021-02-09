<div class="container">

  <div class="row">
    <div class="col-md-12">
      <div class="card border-0 mb-3">
        <div class="row rounded-lg box-shadow no-gutters p-3 shadow align-items-center">
          <div class="col-md-4 pr-4">
            <div class="p-2 p-md-0 d-flex justify-content-between align-items-center">
              @if(Auth::user()->profile_image != "image_default.png")
                <img src="/images/{{Auth::user()->profile_image }}" class="img-fluid rounded-circle" alt="..." style="width: 60px; height:60px">
                @else
                <i class="bi bi-person-circle text-secondary" style="font-size: 40px;"></i>
                @endif
              <p class="card-text text-dark">Projet2 <span class="pl-1"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-2 p-md-0">
              <p class="card-text text-dark text-truncate p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conse</p>
            </div>
          </div>
          <div class="col-md-2">
            <div class="p-2 p-md-0">
              <p class="card-text text-dark d-flex justify-content-between align-items-center">5000€
                <span class="card-text">
                  <a href="#"  target="_blank"><i class="bi bi-eye btn-delete"></i></a>
                </span>
              </p>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>
