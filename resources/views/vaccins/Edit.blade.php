@extends('vaccins.layout')
@section('content')
<div class="card">
  <div class="card-header">Update vaccin</div>
  <div class="card-body">
      
      <form action="{{ route('vaccins.update' ,$vaccin->id) }}" method="post">
        {!! csrf_field() !!}
        @csrf
        @method("PUT")
        <label>Vaccin Name</label></br>
        <input type="text" name="nomVaccin" id="name" value="{{$vaccin->nomVaccin}}" class="form-control"></br>
        <label>Exp Date</label></br>
        <input type="Date" name="expDate" id="Date" value="{{$vaccin->expDate}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" value="{{$vaccin->description}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop