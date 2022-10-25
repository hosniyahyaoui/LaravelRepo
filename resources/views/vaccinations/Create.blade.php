@extends('vaccinations.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Add vaccination sheet</div>
  <div class="card-body">
      @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whooops!</strong>There were some problems with your input.
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
      </div>
      @endif
      <form action="{{ route('vaccinations.store') }}" method="post">
        {!! csrf_field() !!}
        @csrf
        <label>Vaccination Date</label></br>
        <input type="Date" name="dateVaccination" id="Date" class="form-control" ></br>
        <label>isDone</label></br>
        <input type="Number" name="estFait" id="estFait" class="form-control" ></br>
        <label>Result</label></br>
        <input type="text" name="resultat" id="resultat" class="form-control" ></br>
        <label>Vaccin</label></br>
        <select class="form-control" name="vaccin_id" id="validationServer04" aria-describedby="validationServer04Feedback" required>
        <option>-Select-</option>
        @foreach($vaccin as $v)
            <option value="{{ $v->id }}">{{ $v->nomVaccin }}</option>
          @endforeach
        </select></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop