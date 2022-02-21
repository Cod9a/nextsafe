<section class="cta--contact text-center">
  <div class="cta__container">
    <img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/img_contact.svg') }}" alt="" class="cta__illu">
    <h2 class="h1">Nous contacter</h2>
    <p>Nous serions très heureux de nous entretenir avec vous au sujet de votre projet d’installation. Laissez-nous un message et nous vous répondrons aussi vite que possible.</p>
    <a href="{{ route('contact') }}" class="btn btn-secondary">Nous contacter</a>
  </div>
</section>