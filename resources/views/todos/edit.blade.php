@extends('layouts.app')
@section('Title')
    Edit item
@endsection
@section('content')
    <h1 class="text-center my-5"> Edit item</h1>
    {{--
    @if ($errors->any())
    <div class="alert alert-danger">
    <ul class="list-group">
          @foreach ($errors->all() as $error)
           <li class="list-group-item">
           {{$error}}
           </li>
          @endforeach
    </ul>
    </div>    
    @endif
       --}}
    <form action="/editPost" method="POST"> 
        @csrf <!-- To make sure that request doesn't come from external source -->
        <input type="hidden" name="id" value="{{$todo->id}}"/>
        <div class="form-group">
            <label for="name">Todo name </label>
            <input  id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Todo 1" value="{{old('name', $todo->name)}}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" rows="3">{{old('description',$todo->description)}}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-check">
            <input id="completed" name="completed" class="form-check-input" type="checkbox" value="{{old('completed',$todo->completed)}}" @if ($todo->completed == true) checked @endif>
            <label class="form-check-label" for="completed">
                Completed?
            </label>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Edit</button>
        </div>
    </form>
@endsection