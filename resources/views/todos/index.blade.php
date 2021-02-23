@extends('layouts.app')
@section('Title')
    Todo List
@endsection
@section('content')
    <h1 class="text-center my-5">ToDos Page</h1>
    <div class="row jusify-content-center">
        <div class="col-md-8 offset-md-2">
            <div class="card card-default">
                <div class="card-header"> Todos</div>
                <div class="card-body">
                    <ul class="list-group">
                    @foreach ($todos as $todo )
                        <li class="list-group-item">
                            {{ $todo->name}}                        
                            <a href="/delete/{{ $todo->id}}" class="btn btn-danger btn-sm float-right">Delete</a>
                            <a href="/edit/{{ $todo->id}}" class="btn btn-secondary btn-sm float-right mr-2">Edit</a>
                            <a href="/details/{{ $todo->id}}" class="btn btn-primary btn-sm float-right mr-2">Details</a>
                               @if ($todo->completed == false)
                                <a href="/Completed/{{ $todo->id}}" class="btn btn-success btn-sm float-right mr-2">Done?</a>                                                              
                              @else
                                <i class="fas fa-check float-right mr-4"></i>                     
                            @endif 
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>  
        </div>
    </div>    
@endsection