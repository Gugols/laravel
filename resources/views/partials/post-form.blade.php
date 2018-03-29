<form class="form-horizontal" method="POST" action="/posts">
  {{ csrf_field() }}
<fieldset>

<!-- Form Name -->
<legend>New Post</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title">Title</label>  
  <div class="col-md-4">
  <input id="title" name="title" type="text" placeholder="placeholder" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="body">Text</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="body" name="body">default text</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit">Ok</label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Button</button>
  </div>
</div>

</fieldset>
</form>
