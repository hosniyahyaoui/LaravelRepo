@extends('vaccinations.layout')
@section('content')
<div class="card">
  <div class="card-header">Update vaccination sheet</div>
  <div class="card-body">
      
      <form action="{{ route('vaccinations.update' ,$vaccination->id) }}" method="post">
        {!! csrf_field() !!}
        @csrf
        @method("PUT")
        <label>Vaccination Date</label></br>
        <input type="Date" name="dateVaccination" id="Date" value="{{$vaccination->dateVaccination}}" class="form-control"></br>
        <label>isDone</label></br>
        <input type="text" name="estFait" id="estFait" value="{{$vaccination->estFait}}" class="form-control"></br>
        <label>Result</label></br>
        <input type="text" name="resultat" id="resultat" value="{{$vaccination->resultat}}" class="form-control"></br>
        <label>Vaccin</label></br>
        <select class="form-control" name="vaccin_id" id="validationServer04" aria-describedby="validationServer04Feedback" required>
        <option>-Select-</option>
        @foreach($vaccin as $v)
            <option value="{{ $v->id }}">{{ $v->nomVaccin }}</option>
          @endforeach
        </select></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop