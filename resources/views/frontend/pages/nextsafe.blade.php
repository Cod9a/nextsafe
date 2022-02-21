@extends('frontend.layouts.main')

@section('title', 'NextSafe')

@section('description', 'Nextsafe, désinfection connectée')

@section('content')

	@include('frontend.includes.pageTitle')

	<section class="pageContent nextSafe">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<h4>De la décontamination à la désinfection : une approche sur mesure</h4>
					<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/img_cleantech.jpg') }}" alt="Img Nextsafe" class="mb-4">
					<p>S’appuyant sur son expertise et sur les innovations apportées par 99 Technologies, NextSafe propose à ses clients des solutions sur mesure à leurs problématiques de désinfection et de décontamination.</p>
					<p>NextSafe déploie ainsi des protocoles ad hoc permettant à chacun de ses interlocuteurs de disposer d’une solution clé en main, que ce soit dans le cas d’interventions récurrentes ou d’opérations plus ponctuelles (mise à blanc ou gestion de crise).</p>
				</div>
				<div class=" offset-lg-2 col-lg-5">
					<h4>99 Technologies</h4>
					<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/img_99T.jpg') }}" alt="Img 99T" class="mt-lg-4 mb-4">
					<p>La société 99 Technologies est le partenaire privilégié des acteurs de la santé, de l’industrie, des services, des transports et de la recherche pour la désinfection des surfaces par voie aérienne.</p>
					<p>NextSafe est le distributeur exclusif en France de l’HyperDryMist®, développé par la société 99 Technologies.</p>
					<p><a href="https://99technologies.ch" target="_blank" class="ninenine">www.99technologies.ch</a></p>
				</div>
			</div>
		</div>
	</section>

	@include('frontend.includes.bannerCarousel')

	@include('frontend.includes.contact')

@endsection