@extends('layouts.app')
@section('Title')
    Todo item
@endsection
@section('content')
    <h1 class="text-center my-5"> {{$todo->name}}</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">Details</div>
                <div class="card-body">
                 {{$todo->description}}
                </div>
                <a href="/edit/{{ $todo->id}}" class="btn btn-secondary btn-sm float-right">Edit</a>
            </div>
        </div>
    </div>
@endsection