<header id="header" class="header-two">
  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                
                <div class="logo">
                    <a class="d-block" href="{{ route('index') }}">
                      <img loading="lazy" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/logo.png') }}" alt="Nextsafe">
                    </a>
                </div><!-- logo end -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav ml-auto align-items-center">
                      <li class="nav-item"><a class="nav-link {{ Route::currentRouteName() == 'index' ? 'active' : '' }}" href="{{ route('index') }}">Accueil</a></li>
                      <li class="nav-item"><a class="nav-link {{ Route::currentRouteName() == 'tcare' ? 'active' : ''  }}" href="{{ route('tcare') }}">T-care</a></li>
                      <li class="nav-item"><a class="nav-link {{ Route::currentRouteName() == 'hyperdrymist' ? 'active' : '' }}" href="{{ route('hyperdrymist') }}">HyperDryMist<sup>®</sup></a></li>
                      <li class="nav-item"><a class="nav-link {{ Route::currentRouteName() == 'nextsafe' ? 'active' : '' }}" href="{{ route('nextsafe') }}">NextSafe</a></li>
                      <li class="nav-item"><a class="nav-link {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
                      <li class="header-get-a-quote">
                          <a class="btn btn-primary" href="{{ route('contact', 'comes') }}#cta">Venir chez vous</a>
                      </li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>