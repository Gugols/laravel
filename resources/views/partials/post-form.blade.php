<section>
  <div class="container"></div>
  <div class="row"></div>
  <div class="col-md-6 col-md-offset-3">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
      <form method="POST" enctype="multipart/form-data" action="{{ URL::route('posts.store') }}">
          {{ csrf_field() }}
  <div class="form-group">
      <label class="upper" for="phone">Title</label>
  <input id="title" name="title" type="text" class="form-control input-md" required="">
  </div>
  <div class="form-group">
      <label class="upper" for="phone">Text</label>
  <textarea class="form-control" id="body" name="body"></textarea>
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