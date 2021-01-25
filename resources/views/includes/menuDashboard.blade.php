<div class="col-md-1 col-12 p-md-3 p-0 d-md-block side-menu d-none querryMenu">
  <i class="bi bi-x-circle close-btn position-absolute text-white d-md-none d-block" style="right: 15px"></i>
  <div class="bg-menu-left p-3 p-md-0 rounded-lg shadow">
    <div class="">
      <div class="text-center p-md-4">
        @if(Auth::user()->profile_image != "image_default.png")
          <img src="/images/{{ Auth::user()->profile_image }}" alt="avatar" width="50" class="img-fluid rounded-circle">
        @else
          <img src="/default_image/{{ Auth::user()->profile_image }}" class="card-img-top img-fluid rounded-circle w-50 mx-auto" alt="...">
        @endif

      </div>
      <div class="">
        <div class="list-group text-center h1" id="Menu">
            <a href="/" class="mr-2 py-2 text-white text-decoration-none d-md-block d-flex align-items-center justify-content-around">
              <i class="bi bi-speedometer2"></i><br>
              <span class="font-text-menu">Accueil</span>
            </a>
            <a href="{{ route('client.my-profile.index') }}" class="mr-2 py-2 active text-white text-decoration-none d-md-block d-flex align-items-center justify-content-around">
              <i class="bi bi-layout-text-window-reverse"></i><br>
              <span class="font-text-menu">Mes projets</span>
            </a>
            <a href="{{ route('projects.create') }}" class="mr-2 py-2 text-decoration-none d-md-block d-flex align-items-center justify-content-around">
              <i class="fas fa-paper-plane text-white"></i><br>
              <span class="font-text-menu">Publier</span>
            </a>
            <a href="/nos-prestataires" class="mr-2 py-2 text-decoration-none d-md-block d-flex align-items-center justify-content-around">
              <i class="bi bi-people-fill text-white"></i><br>
              <span class="font-text-menu">Prestataires</span>
            </a>
            {{-- @if(Auth::user()->role_id == 1) --}}
                <a href="{{ route('client.my-profile.index') }}" class="mr-2 py-2 text-decoration-none d-md-block d-flex align-items-center justify-content-around">
            {{-- @elseif(Auth::user()->role_id == 1)
                  <a href="{{ route('freelancer.profile.index') }}" class="mr-2 py-2 text-decoration-none d-md-block d-flex align-items-center justify-content-around">
            @endif --}}
              <i class="bi bi-person-square text-white"></i><br>
              <span class="font-text-menu">Mon profil</span>
            </a>
            <a href="#" class="mr-2 py-2 text-decoration-none d-md-block d-flex align-items-center justify-content-around">
              <i class="bi bi-gear-fill text-white"></i><br>
              <span class="font-text-menu">Paramètre</span>
            </a>
            <a href="#" class="mr-2 py-2 text-decoration-none d-md-block d-flex align-items-center justify-content-around">
              <i class="bi bi-chat-dots-fill text-white"></i><br>
              <span class="font-text-menu">Méssagerie</span>
            </a>

              <form action="{{ route('logout') }}" method="post">
                @csrf
                  <button type="submit" class="mr-2 py-2 text-decoration-none btt d-md-block d-flex align-items-center justify-content-around w-100">
                    <i class="bi bi-box-arrow-right text-white"></i><br>
                    <span class="font-text-menu">Deconnecter</span>
                  </button>
              </form>

          </div>
      </div>
    </div>
    <div class="text-center p-3 mt-5">
      <a href="{{ route('projects.create') }}" class=" btn-bg-plus text-decoration-none shadow text-white rounded-lg p-2" ><i class="bi bi-plus"></i></a>
    </div>
  </div>
</div>
