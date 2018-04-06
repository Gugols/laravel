<div class="comment" id="comment-1-2">
    <div class="image">
        <a href="{{ URL::route('user.show', $comment->user->id) }}">
            <img alt="" src="{{showAvatar($avatar)}}" class="avatar">
        </a>
    </div>
    <div class="text">
        <a href="{{ URL::route('user.show', $comment->user->id) }}">
            <h5 class="name">{{ $name }}</h5>
        </a>
        @can('delete', $comment)
        <a href="{{ route('comments.delete', $comment->id) }}" class="btn btn-danger btn-xs btn-icon-only" role="button" data-method="delete"
            data-disable-with="Deleting..." data-confirm="Are you sure you want to delete this post??">
            <i class="fa fa-trash"></i>
        </a>
        @endcan
        <br>
        <span class="comment_date">{{ $date->format('M d Y') }}</span>
        <div class="text_holder">
            <p> {{ $body }}</p>
        </div>
    </div>
</div>