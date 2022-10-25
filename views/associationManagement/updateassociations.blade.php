
@extends('layouts.app')
@section('content')
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.html"></a>
                    </div>
                    <h1 class="auth-title">Edit Association <i class="fa fa-pencil-alt"></i> </h1>
                    <p class="auth-subtitle mb-5">Input your imformation.</p>
                       {{$i}}
                    <form method="POST" action="{{ url('association/update/'.$i) }}" class="md-float-material" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter Association Name">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>

                        </div>



                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-lg" name="location" value="{{ old('location') }}" placeholder="Enter Association coordinates">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>

                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="tel" class="form-control form-control-lg" name="phone" value="{{ old('phone') }}" placeholder="Enter Association Phone Number">
                            <div class="form-control-icon">
                                <i class="bi bi-phone"></i>
                            </div>

                        </div>




                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-lg" name="status" placeholder="association status">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Create</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                </div>
            </div>
        </div>
    </div>
@endsection
