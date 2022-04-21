@extends('layouts.app')
@section('title', 'Contact')
@section('content')

    <h4>Contact Us</h4>
    @auth
    <div class="col-6 mb-2">
        <a href = "{{route('contact.show')}}" class="btn btn-primary float-end">Show Messages</a>
    </div>
    @endauth 
    <p>Drop me a line anytime. Just fill the form and i will get right back at you. *wink*</p>
    @if (Session::has('success'))
    <div class="alert alert-success col-6">{{Session::get('success')}}</div>
    @endif
    <form action="{{route ('contact.store')}}" method="post" class="col-6">
        @csrf
        <div class="mb-3">
            <label for="name">Name:</label>
            <input type="text" name="name" id="" class = "form-control @error('name') is-invalid @enderror" placeholder="Type Your Name">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>The name field cannot be empty</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" name="email" id="" class = "form-control @error('email') is-invalid @enderror" placeholder="Type Your Email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>The email field cannot be empty</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone-number">Phone Number:</label>
            <input type="tel" name="number" id="" class = "form-control @error('number') is-invalid @enderror" placeholder="Type Your Phone Number">
            @error('number')
                <span class="invalid-feedback" role="alert">
                    <strong>The phone-number field cannot be empty</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="message">Message:</label>
            <textarea class ="form-control @error('message') is-invalid @enderror" name="message" id="" cols="30" rows="10" placeholder="Let us know your enquiry here"></textarea>
            @error('message')
                <span class="invalid-feedback" role="alert">
                    <strong>The message field cannot be empty</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection