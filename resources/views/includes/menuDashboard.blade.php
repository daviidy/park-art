<div class="col-1 p-md-3 d-md-block d-none">
  <div class="bg-menu-left rounded-lg shadow">
    <div class="">
      <div class="text-center p-md-4">
        @if(Auth::user()->profile_image != "image_default.png")
          <img src="/images/{{ Auth::user()->profile_image }}" alt="avatar" width="50" class="img-fluid rounded-circle">
        @else
          <img src="/default_image/{{ Auth::user()->profile_image }}" class="card-img-top img-fluid rounded-circle w-50 mx-auto" alt="...">
        @endif

      </div>
      <div class="">
        <div class="list-group text-center h1">
            <a href="/" class="mr-2 py-2 text-white text-decoration-none">
              <i class="bi bi-speedometer2"></i><br>
              <span class="font-text-menu">Accueil</span>
            </a>
            <a href="{{ route('client.my-profile.index') }}" class="mr-2 py-2 active text-white text-decoration-none">
              <i class="bi bi-layout-text-window-reverse"></i><br>
              <span class="font-text-menu">Mes projets</span>
            </a>
            <a href="{{ route('projects.create') }}" class="mr-2 py-2 text-decoration-none">
              <i class="fas fa-paper-plane text-white"></i><br>
              <span class="font-text-menu">Publier</span>
            </a>
            <a href="/nos-prestataires" class="mr-2 py-2 text-decoration-none">
              <i class="bi bi-people-fill text-white"></i><br>
              <span class="font-text-menu">Prestataires</span>
            </a>
            {{-- @if(Auth::user()->role_id == 1) --}}
                <a href="{{ route('client.my-profile.index') }}" class="mr-2 py-2 text-decoration-none">
            {{-- @elseif(Auth::user()->role_id == 1)
                  <a href="{{ route('freelancer.profile.index') }}" class="mr-2 py-2 text-decoration-none">
            @endif --}}
              <i class="bi bi-person-square text-white"></i><br>
              <span class="font-text-menu">Mon profil</span>
            </a>
            <a href="#" class="mr-2 py-2 text-decoration-none">
              <i class="bi bi-gear-fill text-white"></i><br>
              <span class="font-text-menu">Paramètre</span>
            </a>
            <a href="#" class="mr-2 py-2 text-decoration-none">
              <i class="bi bi-chat-dots-fill text-white"></i><br>
              <span class="font-text-menu">Méssagerie</span>
            </a>

              <form action="{{ route('logout') }}" method="post">
                @csrf
                  <button type="submit" class="mr-2 py-2 text-decoration-none btt">
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
