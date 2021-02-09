@foreach($user->educations as $education)
<div class="card mb-3 text-dark p-3 shadow mx-auto" style="max-width: 750px;">
    <div class="row no-gutters">
      <div class="col-md-2 text-center">
        {{--  <i class="bi bi-person-circle" style="font-size: 55px;"></i>  --}}
        @foreach ($education['medias'] as $media)
        <img class="img-fluid rounded-circle" style="width: 80px; height: 80px;"
         src="/images/freelancers/educations/{{ $user->first_name.'_'.$user->last_name.'_'
         .$user->id.'_'. $education['title'].'/'.$media['name'] }}" alt="eucation media">
        @endforeach      </div>
      <div class="col-md-10">
        <div class="card-body pt-2">
          <h5 class="card-title d-md-flex align-items-center justify-content-between font-weight-bold">{{ $education['title'] }}
            <span class="badge font-weight-light" style="font-size: x-small;">Du {{ \Carbon\Carbon::parse($education['begin_at'])->format('d/m/Y') }} 
              au  {{ \Carbon\Carbon::parse($education['end_at'])->format('d/m/Y') }}</span>
          </h5>
          <p class="card-text">{{ $education['description'] }}</p>
        </div>
      </div>
    </div>
  </div>
@endforeach