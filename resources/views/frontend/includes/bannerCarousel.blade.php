<div class="banner-carousel banner-carousel-2 mb-0">
  <div class="banner-carousel-item" style="background-image:url({{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/banner/img_banner13.jpeg') }})">
    <div class="container">
        <div class="hero__content">
          <div>
            <img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/99T.jpg') }}" alt="99T">
          </div>
          <div class="content">
            <h1><span class="surtitle">La solution de décontamination</span> HyperDryMist<sup>®</sup></h1>
            <p>HyperDryMist® est la solution de désinfection des surfaces par voie aérienne par la micro-nébulisation de peroxyde d’hydrogène (H<sub>2</sub>0<sub>2</sub>) boosté par des co-formulants (IP) et des cations d’argent.</p>
            <p><a class="btn btn-secondary" href="{{ route('hyperdrymist') }}">En savoir plus</a></p>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url({{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/slider-main/bg7.jpeg') }})">
    <div class="container">
      <div class="hero__content">
        <div>
          <img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/TM.png') }}" alt="T-care.M">
        </div>
        <div class="content">
          <h1><span class="surtitle">La solution de décontamination</span> T-care.M</h1>
          <p>Unité mobile à lampe UV C traite 50m² en 4 minutes, puissante et robuste.</p>
          <p><a class="btn btn-secondary" href="{{ route('tcare') }}">En savoir plus</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- @if(Route::currentRouteName() == 'nextsafe')
  <img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/banner/deco_banner.svg') }}" alt="" class="cta__deco">
@endif --}}