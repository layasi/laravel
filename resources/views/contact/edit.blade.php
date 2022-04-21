@extends('layouts.app')
@section('title', 'Edit Message')
@section('content')
    <div class="card-upper">
        <div class="card-header">
            Edit Message
        </div>
        <div class="card-body">
            <h4>Editing Message: Message {{$message->id}}</h4>
        </div>
            <form action="{{route('update', $message->id)}}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="" value="{{$message->name}}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="" value="{{$message->email}}">
                </div>
                <div class="form-group">
                    <label for="name">Phone Number</label>
                    <input type="text" name="number" class="form-control" id="" value="{{$message->number}}">
                </div>
                <div class="form-group">
                    <label for="name">Message</label>
                    <textarea name="message" class = "form-control" id="" cols="30" rows="10">{{$message->message}}</textarea>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection