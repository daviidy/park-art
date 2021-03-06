<div class="col-1 p-md-3 d-md-block d-none">
  <div class="bg-menu-left rounded-lg shadow" id="">
    <div class="">
      <div class="text-center py-md-4">
        @if(Auth::user()->profile_image != "image_default.png")
          <img src="/images/{{ Auth::user()->profile_image }}" alt="avatar" width="50" class="img-fluid rounded-circle" style="height: 50px;">
        @else
        <i class="bi bi-person-circle text-white" style="font-size: 30px;"></i>
        @endif
      </div>
      <div class="">
        <div class="list-group text-center h1" id="menu">
            <a href="/" class="mr-2 py-2 text-white text-decoration-none">
              <i class="bi bi-speedometer2"></i><br>
              <span class="font-text-menu">Accueil</span>
            </a>
            <a href="{{ route('freelancer-projets') }}" class="mr-2 py-2 text-white text-decoration-none">
              <i class="bi bi-layout-text-window-reverse"></i><br>
              <span class="font-text-menu">Mes projets</span>
            </a>

            <a href="/nos-prestataires" class="mr-2 py-2 text-decoration-none">
              <i class="bi bi-people text-white"></i><br>
              <span class="font-text-menu">Liste des prestataires</span>
            </a>
            <a href="/nos-projets" class="mr-2 py-2 text-decoration-none">
              <i class="bi bi-files text-white"></i><br>
              <span class="font-text-menu">Liste des projets</span>
            </a>
            <a href="{{ route('freelancer-edit', Auth::user()->id) }}" class="mr-2 py-2 text-decoration-none">
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
      <a href="#" class=" btn-bg-plus text-decoration-none shadow text-white rounded-lg p-2" ><i class="bi bi-plus"></i></a>
    </div>
  </div>
</div>
