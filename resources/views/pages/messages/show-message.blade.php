@extends('layouts.main-layout')

@section('content')
    @include('partials.upper-section', array('h1'=>'Send a new message'))

    <div class="col-md-6">
        <h1>{{ $thread->subject }}</h1>
        @each('partials.messages-messages', $thread->messages, 'message')

        @include('partials.messages-form-message')
    </div>
@endsection