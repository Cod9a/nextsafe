@extends('frontend.layouts.main')

@section('title', 'HyperDryMist')

@section('description', 'Nextsafe, HyperDryMist')

@section('content')

	@include('frontend.includes.pageTitle')

	<section class="pageContent">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="d-flex justify-content-center">
						<img loading="lazy" class="img-fluid mainImg" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/hyperdrymist/HDM1.jpg') }}" alt="HyperDryMist">
					</div>

					<div class="others">
						<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/hyperdrymist/HDM1.jpg') }}" class="img-thumbnail active" alt="">
						<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/hyperdrymist/HDM2.jpg') }}" class="img-thumbnail" alt="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="title">
						La technologie HyperDryMist<sup>®</sup>
					</div>
					<p>
						HyperDryMist® est la solution de désinfection des surfaces par voie aérienne par la micro-nébulisation de peroxyde d’hydrogène (H202) boosté par des co-formulants (IP) et des cations d’argent.
					</p>
					<p>
						A chaque fois qu’un contrôle de la charge microbienne est nécessaire, HyperDryMist® garantit une décontamination optimale des surfaces, de l’environnement et des équipements, y compris les plus difficiles à atteindre.
					</p>
					<p>
						Cette technologie, unique et innovante, délivre une performance inégalée sans aucune toxicité, sans risque de corrosion et en préservant totalement l’environnement.
					</p>
				</div>
			</div>

			<div class="health">
				<div class="row align-items-center" style="background: #17691C;">
					<div class="col-lg-7" style="background: url({{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/hdm.jpg') }}); height: 400px; background-size: cover; background-repeat: no-repeat;">
					</div>
					<div class="col-lg-5 text">
						<h4>Santé</h4>
						<p>
							Tous les établissements de santé sont confrontés au risque infectieux qui affecte chaque année plus de 800'000 patients en France.
						</p>
						<p>
							HyperDryMist® contribue à la réduction des infections nosocomiales par une désinfection efficiente et efficace des surfaces ciblées.
						</p>
					</div>
				</div>
			</div>

			<div class="locs">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="loc">
							<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/hyperdrymist/HDM5.jpg') }}">
							<div class="description">
								<p class="title">Hôtelerie et loisirs</p>
								<p>Les hôtels et les établissements de loisirs sont confrontés à une demande d’hygiène et de désinfection croissante de la part de leurs clients. HyperDryMist® garantit un standard très élevé de propreté et de sécurité environnementale.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="loc">
							<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/hyperdrymist/HDM4.jpg') }}">
							<div class="description">
								<p class="title">Industrie pharmaceutique, recherche et ultra-propreté</p>
								<p>Les hôtels et les établissements de loisirs sont confrontés à une demande d’hygiène et de désinfection croissante de la part de leurs clients. HyperDryMist® garantit un standard très élevé de propreté et de sécurité environnementale.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="loc">
							<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/hyperdrymist/HDM6.jpg') }}">
							<div class="description">
								<p class="title">Tertiaire</p>
								<p>Les hôtels et les établissements de loisirs sont confrontés à une demande d’hygiène et de désinfection croissante de la part de leurs clients. HyperDryMist® garantit un standard très élevé de propreté et de sécurité environnementale.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="loc">
							<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/hyperdrymist/HDM3.jpg') }}">
							<div class="description">
								<p class="title">Transports</p>
								<p>Les hôtels et les établissements de loisirs sont confrontés à une demande d’hygiène et de désinfection croissante de la part de leurs clients. HyperDryMist® garantit un standard très élevé de propreté et de sécurité environnementale.</p>
							</div>
						</div>
					</div>

					<div class="col-sm-12 mt-4">
						<h4 style="text-transform: none;">La technologie HyperDryMist<sup>®</sup></h4>
						<iframe width="900" height="506" src="https://www.youtube.com/embed/ilYxbsMIVKc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection

@section('customScripts')

	<script>
        var thumbnails = document.querySelectorAll('.img-thumbnail');
        var main = document.querySelector('.mainImg');
        
        Array.from(thumbnails).forEach((element) => {
            element.addEventListener('click', function() {
                var current = document.querySelector('.img-thumbnail.active');
                main.src = this.src;
                current.classList.remove('active');
                this.classList.add('active');
            })
        })
    </script>

@endsection