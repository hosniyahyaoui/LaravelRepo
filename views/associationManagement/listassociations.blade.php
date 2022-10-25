@extends('layouts.master')
@section('menu')
    @extends('sidebar.usermanagement')
@endsection
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                        <h3>Association Management Control</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Association Management</li>
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
                        User Datatable
                    </div>
                    <div class="card-body">
                        <input id="myInput" type="text" class="form-check-info" placeholder="Search..">
                        <a href="{{ route('associations/form_add') }}"><td><button class="btn btn-danger">add</button></td></a>
                        <table class="table table-striped" id="table1">
                            <thead>
                            <tr>
                                <th>Association_name</th>

                                <th>Association_location</th>
                                <th>Status</th>
                                <th>Association_phone_number</th>
                                <th>Joined</th>
                                <th class="text-center">Modify</th>
                                <th class="text-center">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($associations as $v)
                                <tbody>
                                <tr>
                                    <td>{{ $v->association_name }}</td>
                                    <td>{{ $v->association_location }}</td>
                                    <td>{{ $v->association_status }}</td>
                                    <td>{{$v->association_phone_number}}</td>
                                    <td>{{ $v->created_at}}</td>
                                    <td><a href="{{url('associations/form_update/'.$v->id)}}"><button class="btn btn-warning">Edit</button></a></td>
                                    <td><a href="{{ url('association/delete/'.$v->id) }}"><button class="btn btn-success">Remove</button></a></td>
                                </tr>
                                </tbody>
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
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                            href="">wassym jaffel</a></p>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#table1 tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <sript src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></sript>
@endsection
