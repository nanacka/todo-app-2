@extends('layouts.app')

@section('content')
<h1>here</h1>

<p>{{ $todo->title }}</p>
<p>{{ $todo->body }}</p>



<div>
    <a href="{{ route('todos.edit', $todo->id) }}">edit</a>
    
    <form method="POST" action="{{ route('todos.destroy', $todo->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    
</div>

@endsection