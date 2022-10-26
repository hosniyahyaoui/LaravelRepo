@extends('layouts.master')
@section('menu')
@extends('sidebar.form_staff')
@endsection
@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>animaux Input Information</h3>
                <p class="text-subtitle text-muted">animaux information</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Input</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    
    {{-- message --}}

    {!! Toastr::message() !!}

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Input Information</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                @if ($errors->any())
      <div class="alert alert-danger">
        <strong>bad information</strong>There were some problems with your input.
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
      </div>
      @endif
                    <form class="form form-horizontal" action="{{ route('animaux.store') }}" method="POST">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                            <div class="col-md-4">
                                    <label>lcoal</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                    <div class="position-relative">

                                    <select name="local_id" class="form-control" name="resoureceName">

<option>Select Locaux</option>

@foreach ($locaux as $item)
  <option value="{{ $item->id }}">{{ $item->titre }} </option>
@endforeach    </select>
</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}"
                                                placeholder="Enter name" id="first-name-icon" name="nom">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person-check-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>description</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}"
                                                placeholder="Enter description" id="first-name-icon" name="description">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person-check-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>datedeNaissance</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="date" class="form-control @error('datedeNaissance') is-invalid @enderror" value="{{ old('datedeNaissance') }}"
                                                placeholder="Enter datedeNaissance" id="first-name-icon" name="datedeNaissance">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person-check-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>datedubutTraitement</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="date" class="form-control @error('datedubutTraitement') is-invalid @enderror" value="{{ old('datedubutTraitement') }}"
                                                placeholder="Enter datedubutTraitement" id="first-name-icon" name="datedubutTraitement">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person-check-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>typeMaladie</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" class="form-control @error('type_maladie') is-invalid @enderror" value="{{ old('type_maladie') }}"
                                                placeholder="Enter typeMaladie" id="first-name-icon" name="type_maladie">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person-check-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>dureeTraitement</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="number" class="form-control @error('dureeTraitement') is-invalid @enderror" value="{{ old('dureeTraitement') }}"
                                                placeholder="Enter dureeTraitement" id="first-name-icon" name="dureeTraitement">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person-check-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-md-4">
                                    <label>prixTraitement</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" class="form-control @error('prixTraitement') is-invalid @enderror" value="{{ old('prixTraitement') }}"
                                                placeholder="Enter prixTraitement" name="prixTraitement">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>age</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="number" class="form-control @error('age') is-invalid @enderror" value="{{ old('age') }}"
                                                placeholder="Enter age" id="first-name-icon" name="age">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person-check-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             
                                <div class="col-md-4">
                                    <label>poid</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" class="form-control @error('poid') is-invalid @enderror" value="{{ old('poid') }}"
                                                placeholder="Enter poid" id="first-name-icon" name="poid">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person-check-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>espece</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" class="form-control @error('espece') is-invalid @enderror" value="{{ old('espece') }}"
                                                placeholder="Enter espece" id="first-name-icon" name="espece">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person-check-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                



                               
                             

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Cannel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2022 &copy; wassym jaffel</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                href="">wassym jaffel</a></p>
            </div>
        </div>
    </footer>
</div>
@endsection