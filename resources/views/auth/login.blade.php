@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Login</h2>
            <form action="{{route('auth.login')}}" method="post">
                @csrf
                @if(session('status'))
                <div class="row mb-3">
                    <div class="alert alert-danger col-md-4 offset-md-4">{{session('status')}}</div>
                </div>
                @endif
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
                        <div class="col-md-4">
                            <input type="email" name="email" id="" class = "form-control @error('email') is-invalid @enderror" placeholder="Type Your Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>The email field cannot be empty</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
                        <div class="col-md-4">
                            <input type="password" name="password" id="" class = "form-control @error('password') is-invalid @enderror" placeholder="Type Your Password">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>The password field cannot be empty</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-4 offset-md-4">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                    </div>      
                </form>
            
        </div>
    </div>
@endsection