@extends('layouts.app')
@section('Title')
    create item
@endsection
@section('content')
    <h1 class="text-center my-5"> create item</h1>
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
    <form action="/createPost" method="POST"> 
        @csrf <!-- To make sure that request doesn't come from external source -->
        <div class="form-group">
            <label for="name">Todo name </label>
            <input  id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Todo 1" value="{{old('name')}}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" rows="3">{{old('description')}}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Create</button>
        </div>
    </form>
@endsection