@extends('layouts.main-layout') @section('content') @include('partials.upper-section', array('h1'=>'All messages')) @include('partials.messages-flash')

<div class="container p-t-20">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <div class="list-group private_msg clearfix">
                @each('partials.messages-thread', $threads, 'thread', 'partials.messages-no-threads')
            </div>
        </div>
    </div>
</div>

@endsection