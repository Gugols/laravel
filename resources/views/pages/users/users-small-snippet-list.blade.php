@foreach($users as $user)
<div class="col-md-3">
    <div class="team-member">
        <div class="team-image">
            <img src="{{ route('home') }}/uploads/avatars/{{ $user->avatar }}">
        </div>
        <div class="team-desc">
            <h3>{{ $user->name }}</h3>
            <span>{{ $user->role }}</span>
            <p>{{\Illuminate\Support\Str::words($user->description, 15, '...')}} </p>
        </div>
    </div>
</div>
@endforeach