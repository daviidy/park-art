@extends('layouts.menu')
@section('content')
      <section class="hero-pro-show"></section>
      <section class="p-md-5 p-3">
        <div class="container-fluid">
          <div class="row row-cols-1 row-cols-md-2">
            <div class="col-md-3 d-md-block d-none"> </div>
            <div class="col-md-6">
              <div class="card rounded-lg shadow">
                <div class="mb-5" style="background-image: url('images/myProjet.jpg');background-size: cover;background-repeat: no-repeat; height:160px;" >
                  <div class="position-absolute p-3" style="top:97px">
                    <img width="100" height="100" src="https://trello-members.s3.amazonaws.com/5a0488143e7858da0f497a05/a2fe363dd6cf7913f7b1e7e76b11880d/30.png" alt="" class=" rounded-lg">
                    <h4 class="pt-2">nom du client</h4>
                  </div>
                </div>
                <div class="card-body">
                  <div class="container">
                    <div class="pt-5">
                      <div class="d-md-flex justify-content-between align-items-center">
                        <div class="">
                          <p class="h6 badge font-weight-light">Catégories :<span class="font-weight-bold ">Web</span> </p>
                        </div>
                        <div class="d-md-flex justify-content-between align-items-center">
                          <p class="h6 badge font-weight-light"> Poster le <span class="font-weight-bold">15/02/2021</span></p>
                          <p class="h6 badge font-weight-light pl-md-4"><span class="font-weight-bold">50</span> postulant(s)</p>
                        </div>
                      </div>
                    </div>
                    <div class="row border rounded-lg mt-3">
                      <div class="col-md-8 py-2 d-flex justify-content-between align-items-center">
                        <h4 class="h6">Budget :</h4>
                        <p class="mb-0">500€</p>
                      </div>
                      <div class="col-md-4 border-left p-3 text-center">
                        <span class="btn btn-primary">Proposer un offre</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 pt-md-4 pt-3">
                        <h4 class="pb-3 h6">Description</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-md-block d-none"></div>
          </div>
        </div>
      </section>
@endsection
