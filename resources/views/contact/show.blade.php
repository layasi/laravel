@extends('layouts.app')
@section('title', 'Messages')
@section('content')
    <div class="container">
        <div class="row">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th>S/No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $message)
                    <tr>
                        <td>{{$message->id}}</td>
                        <td>{{$message->name}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->number}}</td>
                        <td>{{$message->message}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection