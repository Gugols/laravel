<form class="form-horizontal" method="POST" action="/user/{{ $user->id }}/select-type">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
      <fieldset>
      
      <!-- Form Name -->
      <legend>I represent a ...</legend>
      
      <div class="form-group">
        <select name="profile_type" class="form-control form-control-lg">
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
      