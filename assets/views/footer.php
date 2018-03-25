<?php
	defined('DIR_CONFIG') OR exit('No direct script access allowed');
?>
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-item col-sm-3 col-md-3">
					<div class="title sm-centered">Coordonnées</div>
					<p class="sm-centered"><a href="https://www.google.com/maps/place/59+Rue+de+Lagny,+77600+Jossigny,+France/" target="_blank">59 bis, rue de Lagny<br/>77600 Jossigny</a></p>
					<p class="sm-centered"><a href="<?php echo detect_mobile_browser() ? 'tel:' : 'callto:' ;?>+33610879706">06 10 87 97 06</a></p>
				</div>
				<div class="footer-item col-sm-4 col-md-4">
					<div class="title sm-centered">Newletter</div>
					<p>Pour suivre notre actualié et recevoir nos promotions, inscrivez-vous à notre newsletter:</p>
					<form class="input-group">
						<input type="email" id="email" name="email" class="form-control" placeholder="Email address" ng-model="formData.email" required="required">
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon glyphicon-send"></span></button>
						</span>
					</form>
				</div>
				<div class="footer-item col-sm-3 col-md-3">
					<div class="title sm-centered">Autres liens</div>
					<p class="sm-centered"><a href="#/plan-du-site">Plan du site</a></p>
					<p class="sm-centered"><a href="#/mentions-legales">Mentions légales</a></p>
					<p class="sm-centered"><a href="#/contact">Nous contacter</a></p>
				</div>
				<div class="footer-item col-sm-2 col-md-2">
					<div class="title sm-centered">Nous suivre</div>
					<div class="social-links sm-centered">
						<p><a href="#" class="icon-facebook" target="_blank">Facebook</a></p>
						<p><a href="#" class="icon-twitter" target="_blank">Twitter</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
