@extends('frontend.layouts.main')

@section('title', 'Accueil')

@section('description', 'Nextsafe, désinfection connectée')

@section('content')

	@include('frontend/includes/bannerCarousel')

	<section class="teaserPage">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-6">
	        <img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/tubes2.jpg') }}" alt="Tubes" class="img-fluid">
	      </div>
	      <div class="col-md-6">
	        <h1>
	          <span class="surtitle">Qui sommes-nous?</span>
	          <img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/logo.png') }}" class="title__logo">
	        </h1>
	        <p>S’appuyant sur son expertise et sur les innovations apportées par 99 Technologies, CleanScience propose à ses clients des solutions sur mesure à leurs problématiques de désinfection et de décontamination.</p>
	        <a href="{{ route('nextsafe') }}" class="btn btn-secondary">En savoir plus</a>
	      </div>
	    </div>
	  </div>
	</section>

	@include('frontend/includes/subscribe')

	@include('frontend/includes/news')

@endsection