@foreach($posts as $post)
    @include('partials.posts-small-snippet', $post)
@endforeach