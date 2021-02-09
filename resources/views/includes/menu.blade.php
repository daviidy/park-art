<header class="position-absolute w-100" style="z-index: 1; top:0">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand text-white font-weight-bold" href="#">Park Art</a>
    <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mx-auto font-weight-bold">
        <li class="nav-item pr-md-5 active">
          <a class="nav-link text-white" href="/">Accueil <span class="sr-only">(current)</span></a>
        </li>
        @if(Auth::user()))
        <li class="nav-item pr-md-5">
          <a class="nav-link text-white" href="/nos-projets">Nos projets</a>
        </li>
        <li class="nav-item pr-md-5">
          <a class="nav-link text-white" href="/nos-prestataires">Nos prestataires</a>
        </li>
        @endif
        <li class="nav-item pr-md-5">
          <a class="nav-link text-white" href="#">A propos</a>
        </li>
        <li class="nav-item pr-md-5">
          <a class="nav-link text-white" href="#">Contactez-vous</a>
        </li>
      </ul>
      <div class="main-connect">
        {{--  <span class="mb-3 mb-md-0 navbar-text shadow rounded-pill bg-white" data-toggle="tooltip" data-placement="bottom" title="Inscrivez-vous">
          <a href="#" class="text-decoration-none p-3 text-capitalize font-weight-bolder" data-toggle="modal" data-target="#registerModal">Inscrivez-vous</a>
        </span>  --}}
        @if(!Auth::user())
        <span class="navbar-text shadow rounded-pill bg-white" data-toggle="tooltip" data-placement="bottom" title="Connectez-vous">
          <a href="#" class="text-decoration-none p-3 text-capitalize font-weight-bolder" data-toggle="modal" data-target="#loginModal"><i class="fas fa-sign-in-alt"></i> Connexion</a>
        </span>
        @else
        <div class="dropdown">
          <a class="dropdown-toggle p-0 bg-transparent" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @if(Auth::user()->profile_image != "image_default.png")
              <img src="/images/{{ Auth::user()->profile_image }}" alt="avatar" width="50" class="img-fluid rounded-circle">
            @else
              <i class="bi bi-person-circle text-white" style="font-size: 30px;"></i>
            @endif
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ Auth::user()->role->name == "client" ? route('displayAllMyProjects') : route('freelancer-projets') }}">Tableau de bord</a>
            <a class="dropdown-item" href="#">
              <form action="{{ route('logout') }}" method="post">
                @csrf
                  <button type="submit" class="">
                    <span class="font-text-menu">Deconnexion</span>
                  </button>
              </form>
            </a>
          </div>
      </div>
      @endif
    </div>
  </nav>
</header>
