<div class="container">
<section>
<div class="bootstrap-iso">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 center">
        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="/user/{{ $user->id }}">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
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

          <div class="form-group ">
              <label class="control-label " for="short_description">
                Profile picture
              </label>
              <div class="team-members team-members-circle" style="max-height: 200px; max-width: 200px;">
              <div class="team-member">
              <div class="team-image">
              <img src="{{ route('home') }}/uploads/avatars/{{ UserController::getAvatar($user->id) }}">
              </div>
            </div>
            </div>
              <input type="file" name="avatar">
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
</section>
</div>