<div id="banner-area" class="banner-area" 
    @if(Route::currentRouteName() == "nextsafe")
      style="background-image:url({{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/banner/img_banner11.jpeg') }})
    @elseif(Route::currentRouteName() == "tcare")
      style="background-image:url({{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/banner/img_banner13.jfif') }})
    @else
      style="background-image:url({{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/img_header.jpg') }})
    @endif
  ">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="hero__content2">
                <div>
                  <!-- <img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/TM.png') }}" alt="T-care.M"> -->
                </div>
                <div class="content">
                  <h1>
                    <span class="surtitle">
                      @if(Route::currentRouteName() == "hyperdrymist" || Route::currentRouteName() == "tcare")
                        La solution de décontamination
                      @endif
                      @if(Route::currentRouteName() == "nextsafe")
                        Qui sommes-nous?<br>
                      @endif
                    </span> 
                    @if(Route::currentRouteName() == "hyperdrymist")
                      HyperDryMist
                    @endif
                    @if(Route::currentRouteName() == "tcare")
                      T-care.M
                    @endif
                    @if(Route::currentRouteName() == "nextsafe")
                      <img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/logo.png') }}" class="title__logo">
                    @endif
                    @if(Route::currentRouteName() == "contact")
                      Contactez-nous
                    @endif
                  </h1>
                  <p>
                    @if(Route::currentRouteName() == "hyperdrymist")
                      HyperDryMist® est la solution de désinfection des surfaces par voie aérienne par la micro-nébulisation de peroxyde d’hydrogène (H<sub>2</sub>0<sub>2</sub>) boosté par des co-formulants (IP) et des cations d’argent.
                    @endif
                    @if(Route::currentRouteName() == "tcare")
                      Unité mobile à lampe UV C traite 50m² en 4 minutes, puissante et robuste.
                    @endif
                    @if(Route::currentRouteName() == "nextsafe")
                      Partenaire privilégié des acteurs de l’industrie, des services, des transports, de la recherche et des établissements de santé, CleanScience est le distributeur exclusif en France du produit HyperDryMist®.
                    @endif
                    @if(Route::currentRouteName() == "contact")
                      Contactez-nous à tout moment, nous sommes disponible.
                    @endif
                  </p>
                </div>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div>