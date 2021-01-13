@extends('layouts.menuHomes')
@section('content')
<div class="col-12 col-md-11">

  <form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit">Deconnecter</button>
  </form>

  <div class="p-md-4">
    <div class="align-items-center d-flex justify-content-between mb-5 pt-5">
      <h2>Mes projets</h2>
      <a href="{{ route('projects.create') }}" class="btn-bg-plus p-2 p-md-3 rounded-lg text-decoration-none text-white shadow border-white border">Publier un projet</a>
    </div>
    <div class="pt-md-5">
      <div class="">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Titre du projet</th>
              <th scope="col">Description du projet</th>
              <th scope="col">Budget</th>
            </tr>
          </thead>

          <tbody>
            @foreach($datas as $data)
              <tr>
                <td>{{ $data->title }}</td>
                <td>{{ $data->description }}</td>
                <td>{{ $data->budget }}€</td>
              </tr>
            @endforeach
            {{-- <tr>
                <td>poisson</td>
                <td>ke—SVGs, SVG sprite, or web fonts. Use them with or without Bootstrap in any project.</td>
                <td>200€</td>
            </tr>
            <tr>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr> --}}
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
