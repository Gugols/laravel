@extends('layouts.main-layout')

@section('content')
    @include('partials.upper-section', array('h1'=>'All messages'))
    @include('partials.messages-flash')
    <div class="list-group private_msg clearfix">
        @each('partials.messages-thread', $threads, 'thread', 'partials.messages-no-threads')
    </div>
@endsection