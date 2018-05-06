<div class="post-thumbnail-entry">
    <div class="post-thumbnail-content">
        <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
        <span class="post-date">
            <i class="fa fa-clock-o"></i> {{ $post->created_at->diffForHumans() }}</span>
        <span class="post-category">
            <i class="fa fa-user"></i> {{$post->user->name}}</span>
    </div>
</div>