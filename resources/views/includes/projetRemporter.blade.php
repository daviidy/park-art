<div class="container">

  <div class="row">
    <div class="col-md-12">
      <div class="card border-0 mb-3">
        <div class="row rounded-lg box-shadow no-gutters p-3 shadow align-items-center">
          <div class="col-md-3 pr-4">
            <div class="p-2 p-md-0 d-flex justify-content-around align-items-center">
              @if(Auth::user()->profile_image != "image_default.png")
                <img src="/images/{{Auth::user()->profile_image }}" class="img-fluid" alt="..." style="width: 50px">
                @else
                <i class="bi bi-person-circle text-secondary" style="font-size: 40px;"></i>
                @endif
              <p class="card-text text-dark">Projet2 <span class="pl-1"> <a href="#"><i class="bi bi-pencil-square btn-delete"></i></a></span> </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-2 p-md-0">
              <p class="card-text text-dark text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conse</p>
            </div>
          </div>
          <div class="col-md-2">
            <div class="p-2 p-md-0">
              <p class="card-text text-dark">5000€</p>
            </div>
          </div>
          <div class="col-md-1">
            <div class="p-2 p-md-0 justify-content-md-around d-flex align-items-center">
              <p class="card-text m-0 pr-3 pr-md-0"><a href="#"><i class="bi bi-trash text-danger btn-delete"></i></a></p>
              <p class="card-text"><a href="#"  target="_blank"><i class="bi bi-eye btn-delete"></i></a></p>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>
