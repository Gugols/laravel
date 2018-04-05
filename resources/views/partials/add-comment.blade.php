<div class="respond-form p-t-0" id="respond">
    <div class="respond-comment">
        Leave a
        <span>Comment</span>
    </div>
    <form method="POST" enctype="multipart/form-data" action="{{ URL::route('comments.store', $post->id) }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="upper" for="comment">Your comment</label>
                    <textarea class="form-control required" name="body" rows="9" placeholder="Enter your comment here" id="comment" aria-required="true"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group text-center">
                    <button class="btn" type="submit">Add Comment</button>
                </div>
            </div>
        </div>
    </form>
</div>