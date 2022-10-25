@extends('vaccinations.layout')
@section('content')
<div class="card">
  <div class="card-header">List of vaccination sheets</div>
  <div class="card-body">
  
        <div class="card-body">
          @foreach($vaccinations as $vaccination)
          <h5 class="card-text">Vaccin : {{ $vaccination->vaccin_id }}</h5>
        <p class="card-title">Vacination Date : {{ $vaccination->dateVaccination }}</p>
        <p class="card-text">isDone : {{ $vaccination->estFait }}</p>
        <p class="card-text">Result : {{ $vaccination->resultat }}</p>
        <p class="card-text">Vaccin : {{ $vaccination->vaccin_id }}</p>
        @endforeach
  </div>
      
    </hr>
  
  </div>
</div>
@endsection