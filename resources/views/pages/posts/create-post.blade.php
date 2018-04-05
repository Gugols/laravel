@extends('layouts.main-layout')

@section('content')
    @include('partials.upper-section', array('h1'=>'Create a new post'))
    @include('partials.post-form')
@endsection