<div class="webdevelopper">Vue : Arthur // Controller : Arthur & Roman</div>

<section>
	<h1>Members</h1>
	<p>Liste des membres</p>
	<p>Redirige vers : hub, profil, training, events, members.php et logout</p>
	<table id="tableBalises">
		<thead>
		<tr>
		<th>Prénom</th>
		<th>Nom</th>
		<th>Numéro de téléphone</th>
		<th>email</th>
		<th>adresse</th>
		<th>numéro de banque</th>
		<th>plan d'entrainement</th>
		<th>rôle</th>
		<?php if ($user->rights > 1){?><th> Modifier</th><?php }; ?>
		</tr>
		<thead>
		<tbody>
			<?php 	
				foreach($allusers as $i =>$member){
					echo '<tr>
						<td>'.$member->firstname.'</td>
						<td>'.$member->surname.'</td>
						<td>'.$member->numtel.'</td>
						<td>'.$member->mail.'</td>
						<td>'.$member->adress.'</td>
						<td>'.$member->bankid.'</td>
						<td>'.$member->trainingid.'</td>
						<td>'.$member->title.'</td>';
						if ($user->rights > 1){
						echo 
						'<td><a href="index.php?action=profil&modify='.$member->mail.'">Modifier</a></td>';
						}
						echo '</tr>';
						
				} 
			?>
		<tbody>
	</table>
	<!-- must be hidden on authentification / if admin -->
	<div class="admin">Espace d'administration pour les MODÉRATEURS</div>
</section>
