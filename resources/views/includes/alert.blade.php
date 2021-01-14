
@if ($message = Session::get('success'))
  <div class="alert alert-primary" role="alert">
    {{ $message }}
  </div>
@endif
