@extends('layouts.menuHomes')
@section('content')
  <main class="container-fluid">
    <form action="{{ route('logout') }}" method="post">
      @csrf
      <button type="submit">
        Deconnecter
      </button>
    </form>

    <div class="row">
      <!--menu left-->
      <div class="col-3 bg-light d-none side-menu d-md-block">
      </div>
      <!--end menu left-->
      <!--main content-->
      <div class="col-md-9 main-content">
        <div class="p-4 shadow mt-4">
          <h3>Tableau de bord freelance</h3>
        </div>
      </div>
      <!--end main content-->
      <div id="overlay"></div>
    </div>
  </main>
@endsection
