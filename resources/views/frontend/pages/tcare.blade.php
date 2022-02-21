@extends('frontend.layouts.main')

@section('title', 'T-care')

@section('description', 'Nextsafe, T-care')

@section('content')
	
	@include('frontend.includes.pageTitle')

	<section class="pageContent">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="d-flex justify-content-center">
						<img loading="lazy" class="img-fluid mainImg" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/tcare/TM1.png') }}" alt="T-care.M">
					</div>

					<div class="others">
						<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/tcare/TM1.png') }}" class="img-thumbnail active" alt="">
						<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/tcare/TM2.jpg') }}" class="img-thumbnail" alt="">
						<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/tcare/TM3.jpg') }}" class="img-thumbnail" alt="">
						<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/tcare/TM4.jpg') }}" class="img-thumbnail" alt="">
						<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/tcare/TM5.jpg') }}" class="img-thumbnail" alt="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="title">
						T-care.M unité de désinfection par lampe UV-C
					</div>
					<p><span style="text-decoration: underline;">Principe Actif appliqué</span> : <span class="font-weight-bold">Rayonnement UV de type C.</span></p>
					<p>L’exposition du virus aux rayons UV-C a pour effet de décomposer la protéine du virus. Des études d’aout 2020 ont permis d’établir que la résistance du SARS-CoV-2 se situe en moyenne à un niveau de 81 joules /m². En prenant en compte l’endurance de l’ensemble des coronavirus connus, la préconisation se place désormais à 141 J/m² pour un niveau d’élimination de 99,9%.
					T-care.M est composé de 6 lampes ERIES de 36Watts</p>
				</div>

				<div class="col-sm-12">
					<div class="descriptionArea">
						<h4>Description</h4>
						<div class="title">
							T-care.M Solution de traitement UV-C Mobile
						</div>
						<p class="text-justify">
							En tant que fabricant de connectivité et d’éclairage nexTxen a développé des solutions de traitement de l’Air et des Surfaces pour donner suite à l’épidémie de covid-19 et aux demandes de professionnels de la santé et du tourisme hôtelier.
						</p>
						<p>
							L’efficacité d’une lampe germicide
						</p>
						<p class="text-justify">
							Cet équipement se destine exclusivement au traitement sanitaire avec un objectif premier : pratiquer l’opération en un temps court, de l’ordre de 3 à 6 minutes, en fonction de variables de superficies des lieux à décontaminer. Cette solution peut se décliner en diverses versions couvrant unitairement 50 à 225 m².
						</p>
						<p class="text-justify">
							Le temps extrêmement cout de traitement permet de déplacer facilement le dispositif de pièces en pièces et ainsi de pouvoir réaliser une décontamination sur de grandes surfaces en un temps relativement court (500 à 2 000 m² / heure) avec une disponibilité immédiate des surface traitées aussitôt le cycle de traitement finalisé. « T-care.M » est conçu pour qu’en permanence chaque cm² soit irradié par 5 tubes simultanément. Le rayonnement s’effectue sur le plan horizontal et à 360°, ceci permet de couvrir au mieux toutes les surfaces maquées (dessous de tables et de chaises).
						</p>
						<p class="text-justify">
							Différents protocoles sont disponibles et peuvent être contrôlés à la lettre, à distance, grâce à la solution de connectivité embarquée par notre unité mobile et ainsi fournir une garantie formelle de la bonne exécution du traitement Sanitaire. L’ensemble des données de traitement peuvent être stockées et analysées pour perfectionner et optimiser les temps et les doses en fonctions de multiples paramètres.
						</p>
						<p>
							La rencontre entre lampe UV germicide et IoT.
						</p>
						<p class="text-justify">
							Le système de pilotage est constitué par une platine de type smartphone qui devra être placée sur la poignée de la porte, celle-ci fermée, afin de prévenir l’extinction des tubes UV-C en cas de pénétration dans la pièce en dépit de l’avertissement d’interdiction d’accès. Toutes les précautions sont mobilisées pour que toute intrusion accidentelle ou malveillante soit stoppée.
						</p>
						<p class="text-justify">
							Les tubes UV-C sont positionnés verticalement sur L’appareil pour une plus grande efficacité de rayonnement, chacun bénéficie d’une protection mécanique adaptée mais en cas de choc qui entrainerait la casse d’un tube, aucun bris de verre n’est à craindre, ni aucune émanation de mercure car les tubes sont gainés d’une enveloppe souple, très résistante qui assure la conservation de tous les débris (brevet pour l’industrie alimentaire de notre marques historique ERIES).
						</p>
						<p>
							<h5>Fonctionnalités :</h5>
								<ol>
									<li>Action de désinfection de l’air et des surfaces des espaces clos.</li>
									<li>Réduction de la charge Virale (covid-19) et bactérienne résiduelle présente dans une pièce.</li>
									<li>Identification indispensable de l’opérateur qualifié avant toute mise en service.</li>
									<li>Identification de la pièce, pour recueillir et appliquer les consignes de décontamination prédéfinies.</li>
									<li>Commutation en mode d’action manuel possible pour des opérateurs confirmés.</li>
								</ol>
						</p>
						<p>
							<h5>Sécurité :</h5>
							– TCare-M est doté de plusieurs systèmes de détection de présence, pour interrompre, en cas d’intrusion, le traitement en cours d’exécution.<br>
							– La commande de pilotage de TCare-M se compose :<br>
							D’un « Accroche-Porte » en plexiglass qui abrite et positionne une mini tablette tactile sur la poignée de porte de la pièce à traiter.<br>
							D’une mini tablette de commande et pilotage des actions de décontamination requises.<br>
							TCare-M démarrera son action de traitement UV-C uniquement après un temps révolu d’immobilisation de la tablette de commande (3 secondes). Le moindre mouvement de celle-ci suspendra la stérilisation en cours.<br>
							– Tous les types d’interruption sont systématiquement répertoriés et compensés par un allongement du temps de traitement.
						</p>
						<p>
							<h5>Préconisation :</h5>
							Traitement à effectuer IMPÉRATIVEMENT en l’absence de toute présence Humaine, Animale. Rayons Dangereux pour les yeux et la peau
						</p>

						<h4>Caractéristiques</h4>
						<ul>
							<li>Alimentation électrique : 230 V.</li>
							<li>Consommation : 360 W.</li>
							<li>Conditions d’usage : Température : 5° – 55° Humidité : 80% max</li>
							<li>Lampe UV-C : 6 lampes ERIES x 36 W.</li>
							<li>Durée de Vie des lampes : 9 000 heures à la norme L70 (passer cette durée l’efficacité est compromise)</li>
							<li>Radiation à 3 mètres : 0,63 W/m², soit 141 Joules en 3 minutes et 45 secondes.</li>
							<li>Longueur d’onde lampe : 254 nanomètres.</li>
							<li>Protection lampe (casse) : Gaine de protection, contient les bris de verre et les vapeurs.</li>
							<li>TCare-M permet à chaque cm² de recevoir le rayonnement de 5 tubes UV-C simultanément.</li>
							<li>Impact sur les végétaux : Les UV-C renforcent le système immunitaire des plantes face aux parasites</li>
							<li>Les doses maximales varient en fonctions des espèces (moyenne : 850 J / 10 jours)</li>
						</ul>

						<h4>Connectivité</h4>
						<ul>
							<li>Inter équipements : Bluetooth 5</li>
							<li>Contrôle et Certification : UMTS</li>
							<li>Restitution des données : Internet</li>
							<li>Platine de Pilotage : Tablette Bluetooth, NFC, UMTS</li>
							<li>Support poignée : Polycarbonate</li>
							<li>Hauteur : 1770 mm</li>
							<li>Diamètre Pied : 670 mm</li>
							<li>Diamètre Colonne : 300 mm</li>
							<li>Poids : 33 kg</li>
							<li>Conditionnement : Carton : L : 1100 x l : 790 x h : 470 mm</li>
							<li>Normes Appliquées : CE – CEM – RoHS</li>
							<li>Garantie de Fonctionnement : 2 ans retours usine (hors Tube et hors casse)</li>
						</ul>

						<h4>Exemple d’installation par notre partenaire historique Defis & Trans Actions</h4>
						<iframe src="https://www.youtube.com/embed/_MNT9tqS4yw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="mt-2"></iframe>
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