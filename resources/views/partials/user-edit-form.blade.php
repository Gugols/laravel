<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>
  .bootstrap-iso .formden_header h2,
  .bootstrap-iso .formden_header p,
  .bootstrap-iso form {
    font-family: Arial, Helvetica, sans-serif;
    color: black
  }

  .bootstrap-iso form button,
  .bootstrap-iso form button:hover {
    color: white !important;
  }

  .asteriskField {
    color: red;
  }
</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <form class="form-horizontal" method="POST" action="/user/{{ $user->id }}">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <div class="form-group">
            <select name="profile_type" class="form-control form-control-lg">
              <option value="1">Student</option>
              <option value="2">Educational institution</option>
              <option value="3">Company or organization</option>
            </select> <br>
            <div class="alert alert-info">
              <strong>Info!</strong> Only Educational institution or Company / organization can be the patron. And only student can
              receive the donation since we are student-first platform. 
            </div>
            <p></p>
          </div>
          <hr>
          <div class="form-group ">
            <label class="control-label requiredField" for="name">
              Name
              <span class="asteriskField">
                *
              </span>
            </label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-user">
                </i>
              </div>
            <input class="form-control" id="name1" name="name" type="text" value="{{ $user->name }}" />
            </div>
          </div>
          <div class="form-group ">
            <label class="control-label requiredField" for="email">
              Email
              <span class="asteriskField">
                *
              </span>
            </label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-at">
                </i>
              </div>
              <input class="form-control" id="email" name="email" type="text" value="{{ $user->email }}" />
            </div>
          </div>
          <div class="form-group ">
            <label class="control-label " for="tel">
              Phone
            </label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-phone">
                </i>
              </div>
              <input class="form-control" id="tel" name="phone" type="text" value="{{ $user->phone }}" />
            </div>
          </div>
          <div class="form-group ">
            <label class="control-label " for="school">
              School
            </label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-book">
                </i>
              </div>
              <input class="form-control" id="school" name="school" type="text" value="{{ $user->school }}" />
            </div>
          </div>
          <div class="form-group ">
            <label class="control-label " for="short_description">
              Short description
            </label>
            <textarea class="form-control" cols="40" id="short_description" name="short_description" rows="5">{{ $user->short_description }}</textarea>
          </div>
          <div class="form-group ">
            <label class="control-label " for="description">
              Longer description
            </label>
            <textarea class="form-control" cols="40" id="description" name="description" rows="10">{{ $user->description }}</textarea>
          </div>
          <div class="form-group">
            <div>
              <button class="btn btn-primary " name="submit" type="submit">
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>