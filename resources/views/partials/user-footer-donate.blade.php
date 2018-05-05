<section class="p-b-0 p-t-15">
        <div class="col-xs-12 p-b-20">
        <div class="row">
        <div class="col-md-5"> <img alt="" class="p-r-30" id="donation-cta-img-left" src="{{ asset('images/app/bonsai_medium.jpg') }}" style="max-width: 500px;"> </div>
        <div class="col-md-7">
        <hr class="space">
        
        
        <h1 class="heading-jumbo">Like what you see?</h1>
        
        <p class="lead">Help <strong>{{ $user->name }}</strong> achieve excellence! <strong><a href="{{ route('donations.create', $user->id) }}">Donate!</a></strong></p>
        
                </div>
        </div>
        </div></section>