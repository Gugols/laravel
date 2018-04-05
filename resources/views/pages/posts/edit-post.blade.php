@extends('layouts.main-layout')

@section('content')
    @include('partials.upper-section', array('h1'=>'Edit post'))
    @include('partials.post-form-edit')
@endsection