<section class="cta cta--hyperdrymist bg-gradient py-medium">
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="cta__content">
          <div class="cta__img">
            <img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/hyperdrymist/HDM1.jpg') }}" alt="HyperDryMist" class="">
          </div>
          <div class="wysiwyg">
            <h1>
              <span class="surtitle">La solution de décontamination</span>
              HyperDryMist<sup>®</sup>
            </h1>

            <p>HyperDryMist® est une solution de micro-nébulisation entièrement automatisée qui allie la performance du peroxyde d’hydrogène (H202) à celle de co-formulants (IP) à base de cations d’argents.</p>

            <a href="{{ route('hyperdrymist') }}" class="btn btn-secondary">En savoir plus</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/banner/deco_banner.svg') }}" alt="" class="cta__deco">
</section>