@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <h4>Dashboard</h4>
            @if (Session::has('success'))
            <div class="alert alert-success col-6">{{Session::get('success')}}</div>
            @endif
        </div>
    </div>
@endsection