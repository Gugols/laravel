@extends('layouts.layout')

@section('content')
<h2>{{ $post->title }}</h2> <hr> 
<p>{{ $post->body }}</p> <br>
<form action="{{ URL::route('posts.delete',$post->id) }}" method="POST">
    {{method_field('DELETE')}}
    <input type="hidden" name="_method" value="DELETE">
    @csrf
<input type="hidden" name="id" value="{{ $post->id }}">
<button type="submit" class="btn btn-danger">Delete</button>
</form>
    
@endsection