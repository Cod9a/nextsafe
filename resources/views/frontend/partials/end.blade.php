<!-- initialize jQuery Library -->
  <script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/jQuery/jquery.min.js') }}"></script>
  <!-- Bootstrap jQuery -->
  <script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/bootstrap/bootstrap.min.js') }}" defer></script>
  <!-- Slick Carousel -->
  <script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/slick/slick.min.js') }}"></script>
  <script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/slick/slick-animation.min.js') }}"></script>
  <!-- Color box -->
  <script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/colorbox/jquery.colorbox.js') }}"></script>
  <!-- shuffle -->
  <script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/shuffle/shuffle.min.js') }}" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/google-map/map.js') }}" defer></script>

  <!-- Template custom -->
  <script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/js/script.js') }}"></script>

  <script type="text/javascript">
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
          e.preventDefault();

          document.querySelector(this.getAttribute('href')).scrollIntoView({
              behavior: 'smooth'
          });
      });
  });
</script>

@yield('customScripts')