<section id="news" class="news">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">Pour la désinfection</h2>
          <h3 class="section-sub-title">Nos produits</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
        <div class="col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="/" class="latest-post-img">
                    <img loading="lazy" class="img-fluid" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/hyperdrymist.jpg') }}" alt="img">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                    <a href="{{ route('hyperdrymist') }}" class="d-inline-block">99T</a>
                </h4>
              </div>
          </div><!-- Latest post end -->
        </div><!-- 1st post col end -->

        <div class="col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="/" class="latest-post-img">
                    <img loading="lazy" class="img-fluid" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/TM_big.png') }}" alt="img">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                    <a href="{{ route('tcare') }}" class="d-inline-block">T-care.M</a>
                </h4>
              </div>
          </div><!-- Latest post end -->
        </div><!-- 2nd post col end -->
    </div>
    <!--/ Content row end -->

  </div>
  <!--/ Container end -->
</section>