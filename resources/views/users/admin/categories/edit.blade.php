@extends('layouts.adminMenu')
@section('content')
    <main class="container-fluid">
      <div class="row">
        <!--progression-->
        @include('includes.menuAdmin')
        <!--end progression-->
        <!--main content-->
        <div class="col-md-9 main-content p-3">
          <div class="row">
            <div class="col-md-12 py-4 pr-b">
              <p class="h4"><span class="bg-primary p-2 shadow rounded-lg"><i class="bi bi-pencil-square text-white"></i></span> Modifier la catégorie </p>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-12">
              <div class="card mx-auto" style="width: 30rem;">
                <div class="card-body">
                  <h5 class="card-title">Modifier la catégorie</h5>
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end main content-->
        <div id="overlay"></div>
      </div>
    </main>
    @endsection
