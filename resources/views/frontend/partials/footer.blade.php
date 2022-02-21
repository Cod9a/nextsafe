<footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">A Propos</h3>
            <img loading="lazy" class="footer-logo" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/logo.png') }}" alt="Nextsafe">
            <p>Nous sommes spécialisés dans la désinfection connectée.</p>
            <div class="footer-social">
              <ul>
                <li><a href="/" aria-label="Facebook" target="_blank"><i
                      class="fab fa-facebook-f" target="_blank"></i></a></li>
                <li><a href="/" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </li>
                <li><a href="/" aria-label="Instagram" target="_blank"><i
                      class="fab fa-instagram"></i></a></li>
              </ul>
            </div><!-- Footer social end -->
          </div><!-- Col end -->

          <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
            <h3 class="widget-title">Nos heures ouvertures</h3>
            <div class="working-hours">
              Nous restons disponible 24h/7 pour vous. Contactez-nous à tout moment.
              <br><br> Lundi - Samedi: <span class="text-right">08:00 - 18:00 </span>
              <br><br><i class="fas fa-phone"></i> <a href="tel:+229 21 31 76 30">(+229) 21 31 76 30</a></span>
              <br><i class="fas fa-envelope"></i> <a href="mailto:contact@nextsafe.com">contact@nextsafe.com</a></span>
            </div>
          </div><!-- Col end -->

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Liens rapides</h3>
            <ul class="list-arrow">
              <li><a href="{{ route('index') }}">Accueil</a></li>
              <li><a href="{{ route('hyperdrymist') }}">HyperDryMist<sup>®</sup></a></li>
              <li><a href="{{ route('nextsafe') }}">Nextsafe</a></li>
              <li><a href="{{ route('contact') }}">Contact</a></li>
              <li><a href="{{ route('contact', 'comes') }}#cta">Venir chez vous</a></li>
            </ul>
          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="copyright-info text-center">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script>, Développé par <a href="/">TwoFTechnologies</a></span>
            </div>
          </div>

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer>