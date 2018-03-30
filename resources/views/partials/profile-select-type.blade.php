<form class="form-horizontal" method="POST" action="{{ URL::route('profile.store') }}">
    {{ csrf_field() }}
  <fieldset>
  
  <!-- Form Name -->
  <legend>I represent a ...</legend>
  
  <div class="form-group">
    <select name="type" class="form-control form-control-lg">
        <option value="1">Student</option>
        <option value="2">Educational institution</option>
        <option value="3">Company or organization</option>
    </select>
    <hr>
    <div class="alert alert-info">
            <strong>Info!</strong> Only Educational institution or Company / organization can be the patron. And only student can receive the donation since we are student-first platform.
          </div>
    <p></p>
  </div>
  
  <!-- Button -->
  <div class="form-group">

      <button id="submit" name="submit" class="btn btn-primary">Continue</button>

  </div>
  
  </fieldset>
  </form>
  