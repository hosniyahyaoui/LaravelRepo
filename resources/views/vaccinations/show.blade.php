@extends('vaccinations.layout')
@section('content')
<div class="card">
  <div class="card-header">Vaccination sheet details</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-text">Vaccin : {{ $vaccination->vaccin_id }}</h5>
        <p class="card-title">Vacination Date : {{ $vaccination->dateVaccination }}</p>
        <p class="card-text">isDone : {{ $vaccination->estFait }}</p>
        <p class="card-text">Result : {{ $vaccination->resultat }}</p>
        <p class="card-text">Vaccin : {{ $vaccination->vaccin_id }}</p>
  </div>
      
    </hr>
  
  </div>
</div>