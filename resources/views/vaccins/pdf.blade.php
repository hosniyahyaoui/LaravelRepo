@extends('vaccins.layout')
@section('content')
<div class="card">
  <div class="card-header">List of vaccins detailed</div>
  <div class="card-body">
  
        <div class="card-body">
          @foreach($vaccins as $vaccin)
        <h5 class="card-title">Vaccin Name : {{ $vaccin->nomVaccin }}</h5>
        <p class="card-text">Expiratin Date : {{ $vaccin->expDate }}</p>
        <p class="card-text">Description : {{ $vaccin->description }}</p>
        @endforeach
  </div>
      
    </hr>
  
  </div>
</div>
@endsection