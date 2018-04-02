@extends('layouts.main-layout')

@section('content')

@include('partials.upper-section', array('h1'=>'Edit User'))
    @include('partials.user-edit-form')
@endsection