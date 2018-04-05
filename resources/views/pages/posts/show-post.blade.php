@extends('layouts.main-layout')

@section('content')
@include('partials.upper-section', array('h1'=> $post->title, 'image' => asset('storage/uploads/post_images/').'/'.$post->image ))

<section>
    <div class="container">
    <div class="row">
        <div class="content col-md-9">
<p>{{ $post->body }}</p> <br>

@can('update', $post)
<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary" role="button" 
        data-method="get" data-disable-with="Please wait...">
          Edit
      </a>
@endcan

@can('delete', $post)
<a href="{{ route('posts.delete', $post->id) }}" class="btn btn-danger" role="button" 
        data-method="delete" data-disable-with="Deleted!"
        data-confirm="Are you sure you want to delete this post??">
          Delete
      </a>
@endcan
</div>
</div>
</div>
</section> 
@endsection