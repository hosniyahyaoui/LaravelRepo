@extends('layouts.app')
@section('content')
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.html"></a>
                    </div>
                    {{-- message --}}
                    {!! Toastr::message() !!}
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>
                   
                    @if(session()->has('error'))
                        <div class="text-danger text-center text-bold">
                            {{ session()->get('error') }}
                        </div>
                      
                    @endif
                 
                    <br>
                   
                   
                    <form method="POST" action="{{ route('login') }}" class="md-float-material">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter email">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Enter Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="remember_me" id="remember_me" name="remember_me">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>

                        <h3 class="auth-subtitle mb-5">Or Login With</h3>
                        <hr>
                        <a href="{{route('facebook.login')}}" class="btn btn-facebook btn-user btn-block">
                            <i > <img  src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/facebook_circle_color-512.png" width="40px"> </i> Login With Facebook
                         </a>
                         <hr>
                         <a href="{{route('google.login')}}" class="btn btn-google btn-user btn-block">
                            <i > <img  src="https://play-lh.googleusercontent.com/aFWiT2lTa9CYBpyPjfgfNHd0r5puwKRGj2rHpdPTNrz2N9LXgN_MbLjePd1OTc0E8Rl1" width="50px"> </i> Login With Google
                         </a>
                         <hr>
                         <a href="{{route('twitter')}}" class="btn btn-twitter btn-user btn-block">
                            <i > <img  src="data:image/jpeg;base64,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" width="50px"> </i> Login With Twitter
                         </a>
                         <hr>
                         <a href="{{route('github.login')}}" class="btn btn-github btn-user btn-block">
                            <i > <img  src="data:image/png;base64,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" width="50px"> </i> Login With Github
                         </a>
                         <hr>
                         <a href="{{route('linkedin.login')}}" class="btn btn-linkedin btn-user btn-block">
                            <i > <img  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAllBMVEUMZMX///8AYcQAWcFDf8nL3PIAWrzQ3vMAYcI0eclZjtAucslAgsz6/v3x9/sgbclOhM8AX8QAYsAAX70AV70AWMLm7vgAXb4sdsw5fsoRbsVmltK6z+iUt+AMZcGDrN3c6fNvnddiltWqwuPA0+r0+vyOrt+lweR9pduuyueUst9Lh81pldd1mtYdbcunxOXO4u7Z4fGRyVlRAAAEKUlEQVR4nO3ce1faMBzG8SblEpSCiUUuQrkMhsCc+v7f3Ko4KjW/yLY0WXOez9mf4Ml3vSW1NYoAAAAAAAAAAAAAAAAAAAAAAAAAAADgYiriIsqU72FURcapGnXHk5aMue+xVCCT6n56x960Z2OpMt8jsozz+Xve0Xqc+h6SXbKzYOeSfex7UBap+J591lThHI3awPxw5KGcVFUj0RayaRrI6UaUj8GTpfA9NivknApkvTC2YdwjC9lc+h6dBWpFB7JFCIXx1FDIRr6HZ0Fq2EkZewjgXNMnLhVH34a+x/fPeMdYOK3/gchvTIFsXf/ZKR+bC+u/DcW1cS/d1f84jFobU+H3ANYXadNU2PU9PAvkd0Ngz/forMgMhU/1P5Xm4h0ZmHQCOAzz68WEPNdsg9iE+ZH4QATeBTApPYqf9PvoKIh99E2qOxQ3jVvf47JHDT5fMl5GAQW+3tNvnF/4N3shwrhJc8Ljw/Q0Q13MJ4GcRc8IORjP99vZfpWlQe2gH3EZx7Gs/4IJAADqQ3DJX/+FM38vqHyKlA5Hhx+Pj49X43468P34CheEiz9Z+pTMlrvFaQ6YbNrblRpKf6vNbHRNKX2yT/kwSVd5XluzGGs//Ew9NfIGS/RYs3X2yUGzp7dpnMYu+zPql1mbp46f+XxeSCkVxrpt8+bmWJgJOTPeYP7m5QkWi4Wye0d94t3m3sNmtFao5OyLvle7zPnRaKlQCb6+IDBfXvddJ1oq5BH5WE7JXd/xwWilUKnJpYGM9a7dPk5mpfCWP18cmO+okdOtaKVwYHxm5ZP1wOWNPBuFneUfBTK2dHkzyEbhwfirco3NxOF+aqPw8rPMbzuHV34bhX+h4e6q6KnQ4ZM6ngrZyNlG9FXo7hfMvgp7zt7o8FXIDq52U2+FznbTKgovmgAsalq4mB0mQqjJYfvler98o6sWhevuYPh2C5jz4WD1ReMPR4soi4W91dmtXy7MK469o7mpvcLn8nRaSWPi9PzH/++FCXvW3LuXpoXxi6MllK1tqHtGLBMd0zccLYNtFR60W8T0wkqv7yTQVuGTfpfLuvRXkms3sxo7hQlx/yy7NayOO3Uq3MXExY148PFY6OZyYafwihqsXNJfGteoMCGXQoYfzxo1KmxSO2kkJvTLcXUq3BreraFnp3UqNLwT3aJPpnUqPNBjTV+CKDScFVv0t+pUaLiytegXq1BoCQoLKNRDYfVQWEChHgqrh8ICCvVQWD0UFlCoh8LqobCAQj0UVg+FBRTqobB6KCygUA+F1UNhAYV6KKweCgso1ENh9VBYQKEeCquHwkKAhe1SIf2UoaFwSP+/dB29FtTvUsbnH+Q3VxTDmxOq+zffskqJiOtFpZda+OV/M6uQKepLof0NWAAAAAAAAAAAAAAAAAAAAAAAAAAAgAr8Aj5RWY0PDbn2AAAAAElFTkSuQmCC" width="50px"> </i> Login With Linkedin
                         </a>
                         <hr>
                    </form>
                     
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Don't have an account? <a href="{{route('register')}}"
                                class="font-bold">Sign
                                up</a>.</p>
                        <p><a class="font-bold" href="{{ route('forget-password') }}">Forgot password?</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                </div>
            </div>
        </div>
    </div>
@endsection
