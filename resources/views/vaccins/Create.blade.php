@extends('vaccins.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Add vaccin</div>
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
      <form action="{{ route('vaccins.store') }}" method="post">
        {!! csrf_field() !!}
        @csrf
        <label>Vaccin Name</label></br>
        <input type="text" name="nomVaccin" id="name" class="form-control"></br>
        <label>Exp Date</label></br>
        <input type="Date" name="expDate" id="Date" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop