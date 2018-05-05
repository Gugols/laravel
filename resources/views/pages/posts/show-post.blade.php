@extends('layouts.main-layout') @section('content') @include('partials.upper-section', array('h1'=> $post->title, 'image'
=> asset('storage/uploads/post_images/').'/'.$post->image ))


<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">
            <div class="content col-md-9">
                <p>{{ $post->body }}</p>
                <br> @can('update', $post)
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary" role="button" data-method="get" data-disable-with="Please wait...">
                    Edit
                </a>
                @endcan @can('delete', $post)
                <a href="{{ route('posts.delete', $post->id) }}" class="btn btn-danger" role="button" data-method="delete" data-disable-with="Deleted!"
                    data-confirm="Are you sure you want to delete this post??">
                    Delete
                </a>
                @endcan
                <div class="col-xs-12 donate-cta small">
                        @include('partials.user-footer-donate',  array('user' => $post->user))
                </div>
                <div class="seperator">
                    <i class="fa fa-diamond"></i>
                </div>
                <div class="comments p-b-0" id="comments">
                    <div class="comment_number">
                        Comments
                        <span>( {{ $post->comments->count() }} )</span>
                    </div>
                    <div class="comment-list">
                        @foreach ($post->comments as $comment) @include('partials.list-post-comments', array( 'body' => $comment->body, 'name' =>
                        $comment->user->name, 'date' => $comment->created_at, 'avatar' => $comment->user->avatar, )) @endforeach
                    </div>
                </div>
                @include('partials.add-comment')
            </div>
        </div>
    </div>
</section>
@endsection