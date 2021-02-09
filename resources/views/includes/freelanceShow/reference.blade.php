@foreach($user->experiences as $experience)
<div class="card mb-3 text-dark p-3 shadow ml-md-3 mx-md-auto" style="max-width: 750px;">
    <div class="row no-gutters">
      <div class="col-md-2 text-center">
        {{--  <i class="bi bi-person-circle" style="font-size: 55px;"></i>  --}}
        
        @foreach ($experience['medias'] as $media)
        <img class="img-fluid rounded-circle" style="width: 80px; height: 80px;"
         src="/images/freelancers/experiences/{{ $user->first_name.'_'.$user->last_name.'_'
         .$user->id.'_'. $experience['title'].'/'.$media['name'] }}" alt="eucation media">
        @endforeach  

      </div>
      <div class="col-md-10">
        <div class="card-body pt-2">
          <h5 class="card-title d-md-flex align-items-center justify-content-between font-weight-bold">{{ $experience['title'] }}
            <span class="badge font-weight-light" style="font-size: x-small;">Du:  {{ \Carbon\Carbon::parse($experience['begin_at'])->format('d/m/Y') }}
               au : {{ \Carbon\Carbon::parse($experience['end_at'])->format('d/m/Y') }}</span>
          </h5>
          <p class="card-text">{{ $experience['description'] }}</p>
          @if(count($experience['medias']))
          <p><img class="img-fluid" src="/images/freelancers/experiences/{{ $user->first_name.'_'.$user->last_name.'_'
            .$user->id.'_'. $experience['title'].'/'.$experience['medias'][0]['name'] }}" alt="image"> </p>
        @endif
          </div>
      </div>
    </div>
  </div>
@endforeach