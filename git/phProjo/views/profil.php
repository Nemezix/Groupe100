<div class="webdevelopper">Vue : Arthur // Controller : Arthur</div>

<section>
	<h1>Bienvenue a la page de type Profil</h1>
	<p>la page de type profil, permet de modifier les donnees personnelles</p>
	<p>redirige vers : hub, profil, training, events, members.php et logout</p>
	<h2>Profil</h2>

	<form id="profileForm" action="index.php?action=profil" method="post">

	<p><label for="name">Nom: </label>
	 <input name="name" type="text" value=<?php echo $user->firstname; ?> /> 
	 <label for="surname">Prenom: </label>
	 <input name="surname" type="text" value=<?php echo $user->surname; ?> /></p>

	<h3>Contacts</h3>

	<p><label for="numtel">Numero de telephone: </label>
	<input name="numtel" type="tel" value=<?php echo $user->numtel; ?> /><br/> 
	<label for="email">Adresse mail: </label>
	<input name="email" size="25" type="email" value=<?php echo $user->mail; ?> /></p>

	<h3>Informations Civiles:</h3>

	<p><label for="adress">Adresse: </label>
	<input name="adress" size="80" type="text" value=<?php echo $user->adress; ?> /><br/> <?php echo $user->adress; ?>
	<label for="bankid">Compte bancaire: </label>
	<input name="bankid" size="30" type="text" value=<?php echo $user->bankid; ?> /></p>

	<h3>Changement de mot de passe:</h3>

	<p><label for="newpwd">Nouveau mot de passe: </label>
	<input name="newpwd" type="password" /><br/>
	<label for="newpwd_confirm">Confirmez le mot de passe: </label>
	<input name="newpwd_confirm" type="password" /></p>

	<p><input type="submit" name="profileSubmit" value="Enregistrer les modifications" />
	 <input type="reset" value="Reinitialiser les champs" /></p>

	<figure>
		<img title="Ameno Dorime" src="views/images/ameno.jpg" alt="GenericGroup100image" />
		<figcaption>
			Ameno Dorime
		</figcaption>
	</figure>
	<p><label for="newpp">Changer de photo de profil: </label><input accept="image/*" name="newpp" type="file" /></p>
	</form>

</section>
