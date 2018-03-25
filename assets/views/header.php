<?php
	defined('DIR_CONFIG') OR exit('No direct script access allowed');
?>
	<nav class="navbar _navbar-fixed-top">
		<div class="container container-fluid">
			<!-- Menu Top bar -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-top-menu" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a href="#/" class="navbar-brand navbar-logo">
					<img src="<?php echo $page->image('logo.gif'); ?>" title="logo IPS" />
					<span>instant pour Soi</span>
				</a>
			</div>
			<!-- Foldable menu -->
			<div class="collapse navbar-collapse" id="navbar-top-menu">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a class="dropdown-toggle with-icon icon-prestations" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Prestations <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#/massages" class="-with-icon">Massages</a></li>
							<li><a href="#/aromatherapy" class="-with-icon">Aromathérapie</a></li>
							<li><a href="#/tarifs" class="-with-icon">Tarifs</a></li>
							<li><a href="#/bon-cadeau" class="-with-icon">Bon cadeau</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle with-icon icon-nous" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Informations <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#/institut" class="-with-icon">L'institut</a></li>
							<li><a href="#/practicien" class="-with-icon">Votre practicien</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#/ethique" class="-with-icon">Ethique</a></li>
						</ul>
					</li>
					<li><a href="#/news"class="with-icon icon-news">Promotions</a></li>
					<li><a href="#/contact"class="with-icon icon-contact">Contact</a></li><!-- Also include: Location & Informations Legales -->
				</ul>
			</div>
		</div>
	</nav>
