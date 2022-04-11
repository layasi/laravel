@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="card">
        <div class="card-title">
            <h4 class="text-center">
                {{config('app.name')}}
            </h4>
        </div>
        <div class="card-body">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut commodi ut, voluptatem minima ad sunt aspernatur molestias delectus optio nemo reiciendis vel cupiditate et laborum atque provident at praesentium earum?
            </p>
        </div>
    </div>
@endsection