<?php
	defined('DIR_CONFIG') OR exit('No direct script access allowed');
?>
			<h1>News et promotions</h1>
			<p>Voici quelques idées pour vous faire plaisir tout en faisant des économies !</p>
			
			<div class="row">
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<img src="<?php echo $page->image('thumbnails/news-formule-cool.jpg'); ?>" alt="Formule cool" class="img-responsive" />
						<div class="caption">
							<h3>Abonnement : la formule cool !</h3>
							<p>Pour 400€ payables en deux fois, profitez de 450€ de prestations massages
							(8 massages d’une heure, par exemple).<br />
							Validité: 1 an, de date à date.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<img src="<?php echo $page->image('thumbnails/news-promotions.jpg'); ?>" alt="Promotion actuelle" class="img-responsive" />
						<div class="caption">
							<h3>Promotion actuelle</h3>
							<p>Réduction de 10€ à valoir sur un prochain soin, pour recommandation d’un nouveau client.<br />
							Offre valable jusqu’à fin juin 2016.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<a href="/#/bon-cadeau"><img src="<?php echo $page->image('thumbnails/news-bon-cadeau.jpg'); ?>" alt="Bon Cadeau" class="img-responsive" /></a>
						<div class="caption">
							<h3><a href="/#/bon-cadeau">Pour faire plaisir: le Bon cadeau</a></h3>
							<p>Le Bon cadeau instant pour Soi est totalement personnalisable: 
							vous choisissez le montant du cadeau et vous ajoutez un petit message, 
							le bénéficiaire choisira lui-même le type de massage bien-être qu'il souhaite.<br />
							Validité: 1 an.</p>
						</div>
					</div>
				</div>
			</div>
			
			<p style="color: red; font-weight: bold">
				Rajouter un texte pour preciser comment en beneficier
			</p>