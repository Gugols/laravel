<div class="comments p-b-0" id="comments">
<div class="comment" id="comment-1-2">
        <div class="image">
            <a href="{{ URL::route('user.show', $message->user->id) }}">
                <img alt="" src="{{showAvatar($message->user->avatar)}}" class="avatar">
            </a>
        </div>
        <div class="text">
            <a href="{{ URL::route('user.show', $message->user->id) }}">
                <h5 class="name">{{ $message->user->name }}</h5>
            </a>
            <br>
            <span class="comment_date">{{ $message->created_at->diffForHumans() }}</span>
            <div class="text_holder">
                <p>{{ $message->body }}</p>
            </div>
        </div>
    </div>
</div>