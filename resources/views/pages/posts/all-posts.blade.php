@extends('layouts.main-layout')

@section('content')
    @include('partials.upper-section', array('h1'=>'All Posts'))

    <section>
        <div class="container">
        <div id="blog" class="grid-layout post-3-columns m-b-30 grid-loaded" data-item="post-item">
                @foreach ($posts as $post)
                    @include('partials.posts-user-thumbnail-shadow')
                @endforeach
            </div>
            <div class="col-xs-12 text-center">{{ $posts->links() }}</div>
        </div>
    </section>
@endsection