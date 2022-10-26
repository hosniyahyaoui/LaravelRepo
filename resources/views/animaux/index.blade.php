@extends('layouts.master')
@section('menu')
@extends('sidebar.viewrecord')
@endsection
@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>View Record</h3>
                    <p class="text-subtitle text-muted">locales information list</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        {{-- message --}}
        {!! Toastr::message() !!}
        <section class="section">
            <div class="card">
                <div class="card-header">
                    locaux list
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                
                                <th>Name</th>
                                <th>description</th>
                                <th>datedeNaissance</th>
                                <th>datedubutTraitement</th>
                                <th>typeMaladie</th>
                                <th>dureeTraitement</th>
                                <th>prixTraitement</th>
                                <th>espece</th>
                                <th>age</th>
                                <th>poids</th>
                                <th>locaux</th>
                                <th class="text-center">Modify</th>
                            </tr>    
                        </thead>
                        <tbody>
                            @foreach ($animaux as $item)
                                <tr>
                                    <td class="name">{{ $item->id }}</td>
                                    <td class="name">{{ $item->description }}</td>
                                    <td class="name">{{ $item->datedeNaissance }}</td>
                                    <td class="email">{{ $item->datedubutTraitement }}</td>
                                    <td class="phone_number">{{ $item->type_maladie }}</td>
                                    <td class="phone_number">{{ $item->dureeTraitement }}</td>
                                    <td class="phone_number">{{ $item->prixTraitement }}</td>
                                    <td class="phone_number">{{ $item->espece }}</td>
                                    <td class="phone_number">{{ $item->age }}</td>
                                    <td class="phone_number">{{ $item->poid }}</td>
                                    <td class="phone_number">{{ $item->local_id }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('/animaux/create') }}">
                                            <span class="badge bg-info"><i class="bi bi-person-plus-fill"></i></span>
                                        </a>
                                        <a href="{{ url('/admin/animaux/edit/'.$item->id) }}">
                                            <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                        </a>    
                                        <a href="{{ url('/animaux/delete/'.$item->id) }}" onclick="return confirm('Are you sure to want to delete it?')"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <div class="footer clearfix mb-0 text-muted ">
            <div class="float-start">
                <p>2022 &copy; wassym jaffel</p>
            </div>
            <div class="float-end">
                <p>Crafted with<span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                href="">wassym jaffel</a></p>
            </div>
        </div>
    </footer>
</div>
@endsection
