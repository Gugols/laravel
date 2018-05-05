<div class="post-item border shadow">
    <div class="post-item-wrap">
    <div class="post-image" style="background-image: url('@include('partials.randombackground-url')')">
        <a href="{{ route('posts.show', $post->id) }}">
            <img alt="" src="{{ asset('storage/uploads/post_images/'.$post->image) }}">
            </a>

        </div>
        <div class="post-item-description">
            <span class="post-meta-date">
                <i class="fa fa-calendar-o"></i>{{$post->created_at->diffForHumans()}}</span>
            <span class="post-meta-comments">
                <a href="{{ route('posts.show', $post->id) }}#comments">
                    <i class="fa fa-comments-o"></i>{{ $post->comments->count() }} Comments</a>
            </span>
            <h2>
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}
                </a>
            </h2>
            <p>{{ substr($post->body,0,160) }}...</p>
            <a href="{{ route('posts.show', $post->id) }}" class="item-link">Read More
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>