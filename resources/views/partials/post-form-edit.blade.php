<section>
        <div class="container"></div>
        <div class="row"></div>
        <div class="col-md-6 col-md-offset-3">
            <form method="POST" enctype="multipart/form-data" action="{{ URL::route('posts.update', $post->id) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
        <div class="form-group">
            <label class="upper" for="phone">Title</label>
        <input id="title" name="title"  value="{{ $post->title }}" type="text" class="form-control input-md" required="">
        </div>
        <div class="form-group">
        <label class="upper" for="phone">Text</label>
        <textarea class="form-control" id="body" name="body">{{ $post->body }}</textarea>
        </div>
        <div class="form-group">
              <input type="file" name="image">
        </div>
        <div class="form-inline form-group">
        <button class="btn btn-default" type="submit">Submit</button>
        </div>
        </form>
        </div>
        </div>
        </div>
      </section>