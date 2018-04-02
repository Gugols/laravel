@include('partials.upper-section', array('h1'=>'Please select your profile type'))

<br>
  
  <section class="p-t-10">
      <div class="container">
      <div class="row">
      <div class="col-md-4 col-md-offset-4">
          <form class="form-horizontal" method="POST" action="/user/{{ $user->id }}/select-type">
            {{ csrf_field() }} {{ method_field('PUT') }}
            <fieldset>
              <div class="container container-table">
                <div class="col-xs-6">
                  <div class="form-group">
                                  <!-- Form Name -->
              <h3>I represent a ...</h3>
                    <select name="profile_type" class="form-control form-control-lg">
                      <option value="1">Student</option>
                      <option value="2">Educational institution</option>
                      <option value="3">Company or organization</option>
                    </select>
                    <hr>
                    <div class="alert alert-info">
                      <strong>Info!</strong> Only Educational institution or Company / organization can be patrons. And only students can
                      receive the donation since we are student-first platform.
                    </div>
                    <p></p>
                  </div>
          
                  <!-- Button -->
                  <div class="form-group">
          
                    <button id="submit" name="submit" class="btn btn-primary">Continue</button>
          
                  </div>
                </div>
              </div>
          
            </fieldset>
          </form>
      </div>
      </div>
      </div>
      </section>

