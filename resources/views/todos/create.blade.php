@extends('layouts.myapp')

@section('content')
<h3>Create Todo</h3>


<form action="{{ route('todos.store') }}" method="post">
    @csrf
    <div>
        <label>Title</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}"/>

        @if($errors->has('title'))
        <span>{{$errors->first('title') }}</span>
        @endif

    </div>
    <div>
        <label>Description</label>
        <input type="text" name="body" id="body" value="{{ old('body') }}"/>

        @if($errors->has('body'))
        <span>{{$errors->first('body') }}</span>
        @endif

    </div>
    <button type="submit">Create</button>
</form>

@endsection