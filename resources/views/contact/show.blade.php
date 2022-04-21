@extends('layouts.app')
@section('title', 'Messages')
@section('content')
    <div class="container">
        <div class="row">
            @if(session('success'))
            <div class="alert alert-success col-md-6">{{session('success')}}</div>
            @endif
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th>S/No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $key => $message)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$message->name}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->number}}</td>
                        <td>{{$message->message}}</td>
                        <td><a href="{{route('contact.index')}}" class = "btn btn-success">Create</a>
                            <a href="{{route('contact.edit', $message->id)}}" class = "btn btn-primary">Edit</a>
                            <form action="{{route('contact.delete', $message->id)}}" method="POST" onClick="return confirm('Are you sure')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class = "btn btn-danger mt-1">Delete</button>
                            </form></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection