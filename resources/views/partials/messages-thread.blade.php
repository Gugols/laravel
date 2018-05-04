<?php $class = $thread->isUnread(Auth::id()) ? 'active' : ''; ?>

{{-- <div class="media alert {{ $class }}">
    <h4 class="media-heading">
        <a href="{{ route('messages.show', $thread->id) }}">{{ $thread->subject }}</a>
        ({{ $thread->userUnreadMessagesCount(Auth::id()) }} unread)</h4>
    <p>
        {{ $thread->latestMessage->body }}
    </p>
    <p>
        <small><strong>Creator:</strong> {{ $thread->creator()->name }}</small>
    </p>
    <p>
        <small><strong>Participants:</strong> {{ $thread->participantsString(Auth::id()) }}</small>
    </p>
</div> --}}


        <a href="{{ route('messages.show', $thread->id) }}" class="list-group-item clearfix {{ $class }}">
                <div class="pm-left-img">
                    <div class="image">
    
                                <img alt="" src="{{showAvatar(getUserDetail('name', $thread->participantsString(Auth::id()), 'avatar'))}}" class="avatar">
    
                        </div>
                    </div>
                <div class="pm-text">
                    <h4 class="list-group-item-heading">{{ $thread->participantsString(Auth::id()) }}</h4>
                    <p class="list-group-item-text">{{ substr($thread->latestMessage->body,0,30) }}...</p>
                </div>
        </a>
