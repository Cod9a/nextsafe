@extends('frontend.layouts.main')

@section('title', 'Contactez-nous')

@section('description', 'Nextsafe, contactez-nous')

@section('content')

	@include('frontend.includes.pageTitle')

	<section class="pageContent" style="margin-top: 40px;">
		<section id="main-container" class="main-container">
      <div class="container">

        <div class="row text-center">
          <div class="col-12">
            <h2 class="section-title">Venir chez nous</h2>
            <h3 class="section-sub-title">Trouvez notre emplacement</h3>
          </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
          <div class="col-md-4">
            <div class="ts-service-box-bg text-center h-100">
              <span class="ts-service-icon icon-round">
                <i class="fas fa-map-marker-alt mr-0"></i>
              </span>
              <div class="ts-service-box-content">
                <h4>Venez chez nous</h4>
                <p>Tour ANANI - 148/149 Avenue Van Vollenhoven - Cotonou BENIN</p>
              </div>
            </div>
          </div><!-- Col 1 end -->

          <div class="col-md-4">
            <div class="ts-service-box-bg text-center h-100">
              <span class="ts-service-icon icon-round">
                <i class="fa fa-envelope mr-0"></i>
              </span>
              <div class="ts-service-box-content">
                <h4>Notre Email</h4>
                <p><a href="mailto:contact@nextsafe.com">contact@nextsafe.com</a></p>
              </div>
            </div>
          </div><!-- Col 2 end -->

          <div class="col-md-4">
            <div class="ts-service-box-bg text-center h-100">
              <span class="ts-service-icon icon-round">
                <i class="fa fa-phone-square mr-0"></i>
              </span>
              <div class="ts-service-box-content">
                <h4>Appelez-nous</h4>
                <p><a href="tel:+229 21 31 76 30">(+229) 21 31 76 30</a></p>
              </div>
            </div>
          </div><!-- Col 3 end -->

        </div><!-- 1st row end -->

        <div class="gap-60"></div>

        <div class="google-map" id="maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15861.045236199832!2d2.4299975!3d6.3602155!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7335aed09a5dfced!2sIMMEUBLE%20ANANI%20TOUR!5e0!3m2!1sfr!2sbj!4v1634113835911!5m2!1sfr!2sbj"></iframe>
        </div>

        <div class="gap-40"></div>

        <div class="row" id="cta">
          <div class="col-md-12">
            <!-- <h3 class="column-title">Nous adorons recevoir vos messages</h3> -->
            <!-- @if($comes == 'comes') -->
              <p class="comes">On vient chez vous pour une présentation ? Pas soucis, laissez-nous un message à travers ce formulaire ou contactez nous au <a href="tel:+229 21 31 76 30">(+229) 21 31 76 30</a></p>
            <!-- @endif -->
            <!-- contact form works with formspree.io  -->
            <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
            <form id="contact-form" action="{{ route('contact') }}" method="post" role="form">
              @csrf
              <div class="error-container"></div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Nom</label>
                    <input class="form-control form-control-name" name="name" id="name" placeholder="Nom & Prénom(s)" type="text" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Email</label>
                    <input class="form-control form-control-email" name="email" id="email" placeholder="Adresse Email" type="email"
                      required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Subject</label>
                    <input class="form-control form-control-subject" name="subject" id="subject" placeholder="Sujet" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Message</label>
                <textarea class="form-control form-control-message" name="message" id="message" placeholder="Message" rows="10"
                  required></textarea>
              </div>
              <div class="text-right"><br>
                <button class="btn btn-primary solid blank" type="submit">Envoyer le Message</button>
              </div>
            </form>
          </div>

        </div><!-- Content row -->
      </div><!-- Conatiner end -->
    </section>
	</section>


@endsection