@extends('layouts.main-layout')

@section('content')
    @include('partials.upper-section', array('h1'=>'Send a new message'))
    <h1>Create a new message</h1>
    <form action="{{ route('messages.store') }}" method="post">
        {{ csrf_field() }}
        <div class="col-md-6">
            <!-- Subject Form Input -->
            <div class="form-group">
                <label class="control-label">Subject</label>
                <input type="text" class="form-control" name="subject" placeholder="Subject"
                       value="{{ old('subject') }}">
            </div>
    
            <!-- Message Form Input -->
            <div class="form-group">
                <label class="control-label">Message</label>
                <textarea name="message" class="form-control">{{ old('message') }}</textarea>
            </div>
    
            {{-- @if($users->count() > 0)
                <div class="checkbox">
                    @foreach($users as $user)
                        <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                                                value="{{ $user->id }}">{!!$user->name!!}</label>
                    @endforeach
                </div>
            @endif --}}
            <input type="hidden" name="recipients" value="{{$send_to->id}}">
    
            <!-- Submit Form Input -->
            <div class="form-group">
                <button class="subscribe btn btn-primary btn-lg btn-block" type="submit">Submit</button>
            </div>
        </div>
    </form>

@endsection

