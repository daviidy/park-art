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
              <p class="h4"><span class="bg-primary p-2 shadow rounded-lg"><i class="bi bi-journal-text text-white"></i></span> La liste des catégories </p>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-12">
              <div class="card p-3 shadow-sm border-0">
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom de la catégorie</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>
                          <a href="#" class="text-white bg-primary rounded p-1 pb-2 text-decoration-none"><i class="bi bi-pencil-square p-1"></i></a>
                          <a href="#" class="text-white bg-danger rounded p-1 pb-2 text-decoration-none"><i class="bi bi-trash p-1"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
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
