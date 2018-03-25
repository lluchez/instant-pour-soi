<?php
	defined('DIR_CONFIG') OR exit('No direct script access allowed');
	$massages = Array(
		Array('name' => 'Massage Ayurvédique', 'duration' => '1h30', 'price' => '80'),
		Array('name' => 'Massage Californien ou Ayurvédique', 'duration' => '1h', 'price' => '55'),
		Array('name' => 'Massage du dos', 'duration' => '30min', 'price' => '28'),
		Array('name' => 'Shiatsu', 'duration' => '1h', 'price' => '55'),
		Array('name' => 'Throng Mai', 'duration' => '3 séances d\'une heure', 'price' => '140'),
		Array('name' => 'Reiki', 'duration' => '1h', 'price' => '45'),
		Array('name' => 'Massage assis en Duo', 'duration' => '2 x 15min', 'price' => '35'),
		Array('name' => 'Massage anticellulite', 'duration' => '30min', 'price' => '30'),
		Array('name' => 'Massage anticellulite', 'duration' => '5 séances de 30min', 'price' => '130')
	);
?>
			<h1>Les Tarifs</h1>
			<div class="text-block">
				<p>
					Un mot sur les prix. On dit que "le massage, c'est cher !".
					<strike>C'est vrai, mais c'est justifié.</strike>
					D'abord par la qualité des soins, totalement personnalisés.
					Puis par la qualité du lieu et des produits utilisés.
					Par le temps qui vous est consacré, avant, pendant et après le soin.
				</p>
				<p>
					Après avoir baissé mes tarifs de 15% en 2012 (le massage d’une heure était passé de 60€ à 50€), j’ajuste mes prix à compter du 1er mai 2016, mais très modérément.
					Paiement en chèque (à l’ordre de Lucien Luchez) ou espèces.
				</p>
				<p style="color: red; font-weight: bold">
					@Lulu: Tes textes sont a retravailler: ne dis pas que c'est cher, ca te discredite...<br />
					Dis le positif plutot que le negatif...
				</p>
			</div>
			
			<table class="table table-striped table-bordered table-hover table-responsive">
				<thead>
					<tr>
						<th>Massage</th>
						<th class="centered">Durée</th>
						<th class="centered">Prix</th>
					</tr>
				</thead>
<?php
	foreach($massages as $massage) :
?>
					<tr>
						<td><?php echo $massage['name']; ?></td>
						<td class="centered"><?php echo $massage['duration']; ?></td>
						<td class="no-wrap right-aligned"><?php echo $massage['price']; ?> €</td>
					</tr>
<?php
	endforeach;
?>
				<tbody>
				</tbody>
			</table>
			
			<div class="text-block">
				<p style="color: red; font-weight: bold">
					Texte pour les douches
				</p>
			</div>
			
			<div class="color text-note">Informations importantes</div>
			<div class="text-block">
				<p>
					Ces massages sont des soins de bien-être et non des actes de kinésithérapie.
					Ces prestations n'ont pour but que de vous soulager et vous permettre de vous ressourcer.
					Elles ne sont pas remboursées par la sécurité sociale.
				</p>
			</div>
			
			<h2>Autres prestations</h2>
			<table class="table table-striped table-bordered table-hover table-responsive">
				<thead>
					<tr>
						<th>Massage</th>
						<th class="centered">Durée</th>
						<th class="centered">Limitation</th>
						<th class="centered">Prix</th>
					</tr>
				</thead>
					<tr>
						<td>Formation aromathérapie</td>
						<td class="centered">3h</td>
						<td class="centered">4 personnes max</td>
						<td class="no-wrap right-aligned">160 €</td>
					</tr>
				<tbody>
				</tbody>
			</table>
			
			<div class="text-block">
				<p style="color: red; font-weight: bold">
					Texte pour dire d'appeler et definir le theme
				</p>
			</div>