@extends('layouts.main-layout') @section('content') @include('partials.upper-section', array('h1'=>'Conversing wih ' . $thread->participantsString(Auth::id())))

<div class="container p-t-20">
<div class="col-xs-12 col-sm-4">
    <div class="list-group private_msg">
            @each('partials.messages-thread', $threads, 'thread', 'partials.messages-no-threads')
    </div>
</div>
<div class="col-xs-12 col-sm-8">
    <div class="row justify-content-center">
        <!-- You can make it whatever width you want. I'm making it full width
                 on <= small devices and 4/12 page width on >= medium devices -->

        <div class="col-xs-12">
            <h1>{{ $thread->subject }}</h1>
            <div class="seperator"></div>
            @each('partials.messages-messages', $thread->messages, 'message') @include('partials.messages-form-message')
        </div>

    </div>
</div>
</div>


@endsection