@extends('vaccins.layout')
@section('content')
<div class="card">
  <div class="card-header">Vaccin details</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Vaccin Name : {{ $vaccin->nomVaccin }}</h5>
        <p class="card-text">Expiratin Date : {{ $vaccin->expDate }}</p>
        <p class="card-text">Description : {{ $vaccin->description }}</p>
  </div>
      
    </hr>
    <!-- <a href="{{ route('vaccins.pdf') }}" class="btn btn-secondary btn-sm" title="PDF">
<i class="fa fa-plus" aria-hidden="true"></i> PDF
</a> -->
  
  </div>
</div>
@endsection