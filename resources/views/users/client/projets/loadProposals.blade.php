@foreach($offers['proposals'] as $offer)
<div class="col-md-6">
  <div class="p-3 shadow-sm border rounded mb-3">
    <a href="#" class="text-decoration-none text-dark">
      <p class="font-weight-bold d-flex justify-content-between align-items-center">Nom :<span class="font-weight-light text-capitalize">{{ $offer['first_name'] .' '.$offer['last_name'] }}</span> </p>
      <p class="font-weight-bold d-flex justify-content-between align-items-center">Budget :<span class="font-weight-light text-capitalize"> {{ $offer['pivot']['budget'] }}  € </span></p>
      <p class="font-weight-bold d-flex justify-content-between align-items-center">Deadline : <span class="font-weight-light text-capitalize"> {{ $offer['pivot']['deadline'] }} jours</span></p>
    </a>
  </div>
</div>
@endforeach