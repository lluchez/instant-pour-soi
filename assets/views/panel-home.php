<?php
	defined('DIR_CONFIG') OR exit('No direct script access allowed');
?>
			<div id="home-carousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#home-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#home-carousel" data-slide-to="1"></li>
					<li data-target="#home-carousel" data-slide-to="2"></li>
					<li data-target="#home-carousel" data-slide-to="3"></li>
					<li data-target="#home-carousel" data-slide-to="4"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active slide-1">
						<img src="<?php echo $page->image('slideshow/institut.jpg'); ?>" alt="Institut" class="hidden-xs" />
						<img src="<?php echo $page->image('slideshow/sm-institut.jpg'); ?>" alt="Institut" class="visible-xs" />
						<div class="text text">Bienvenue à <i class="nowrap">instant pour Soi</i></div>
					</div>
					
					<div class="item slide-2">
						<img src="<?php echo $page->image('slideshow/massages.jpg'); ?>" alt="Massages" class="hidden-xs" />
						<img src="<?php echo $page->image('slideshow/sm-massages.jpg'); ?>" alt="Massages" class="visible-xs" />
						<div class="text text"><span class="lg-nowrap">Des massages bien-être</span> totalement personnalisés</div>
					</div>
					
					<div class="item slide-3">
						<img src="<?php echo $page->image('slideshow/bon-cadeau.jpg'); ?>" alt="Bon cadeau" class="hidden-xs" />
						<img src="<?php echo $page->image('slideshow/sm-bon-cadeau.jpg'); ?>" alt="Bon cadeau" class="visible-xs" />
						<div class="text text"><span class="lg-nowrap">Faites plaisir à vos proches,</span> <span class="lg-nowrap">pensez aux <span class="nowrap">bons cadeaux</span></span></div>
					</div>
					
					<div class="item slide-4">
						<img src="<?php echo $page->image('slideshow/practicien.jpg'); ?>" alt="Practicien" class="hidden-xs" />
						<img src="<?php echo $page->image('slideshow/sm-practicien.jpg'); ?>" alt="Practicien" class="visible-xs" />
						<div class="text text">Un professionnel entièrement <span class="nowrap">à votre écoute</span></div>
					</div>

					<div class="item slide-5">
						<img src="<?php echo $page->image('slideshow/aromatherapy.jpg'); ?>" alt="Aromathérapie" class="hidden-xs" />
						<img src="<?php echo $page->image('slideshow/sm-aromatherapy.jpg'); ?>" alt="Aromathérapie" class="visible-xs" />
						<div class="text text">Découvrez nos conseils aromathérapie</div>
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#home-carousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#home-carousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			
			<div class="row">
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<a href="#/massages"><img src="<?php echo $page->image('thumbnails/massages.jpg'); ?>" alt="Massages" class="img-responsive" /></a>
						<div class="caption">
							<h3><a href="#/massages">Nos massages</a></h3>
							<p>Venez decourvrir nos massages (mini texte)...</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<a href="#/aromatherapy"><img src="<?php echo $page->image('thumbnails/aromatherapy.jpg'); ?>" alt="Aromathérapie" class="img-responsive" /></a>
						<div class="caption">
							<h3><a href="#/aromatherapy">L’Aromathérapie</a></h3>
							<p>Mini texte sur l'aromathérapie ...</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<a href="#/institut"><img src="<?php echo $page->image('thumbnails/institut.jpg'); ?>" alt="Institut" class="img-responsive" /></a>
						<div class="caption">
							<h3><a href="#/institut">L’institut</a></h3>
							<p>Mini texte sur l'institut ...</p>
						</div>
					</div>
				</div>
			</div>
