<h2>Add a new message</h2>
<form action="{{ route('messages.update', $thread->id) }}" method="post">
    {{ method_field('put') }}
    {{ csrf_field() }}
        
    <!-- Message Form Input -->
    
    <div class="col-sm-8 p-l-0 p-r-0">
        <div class="form-group">
            <textarea name="message" style="height: 62px;" class="form-control">{{ old('message') }}</textarea>
        </div>
    </div>

    <!-- Submit Form Input -->
    <div class="col-sm-4">
        <div class="form-group">
            <button class="subscribe btn btn-primary btn-lg btn-block" type="submit">Send <i class="fa fa-paper-plane"></i></button>
        </div>
    </div>
</form>