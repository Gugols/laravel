<section id="page-title" data-parallax-image="
@if(isset($image) && $image !== null)
{{ $image }}
@else
http://maecenas.test/images/app/knowledge.jpg
@endif
"><div class="parallax-container" data-velocity="-.090" style="background: url(&quot;@if(isset($image) && $image !== null)
{{ $image }}
@else
http://maecenas.test/images/app/knowledge.jpg
@endif&quot;) 0px;"></div>
    <div class="container">
    <div class="page-title">
    <h1>{{ $h1 }}</h1>
    </div>
    </div>
  </section>
  @include('flash::message')
  