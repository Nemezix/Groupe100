<div class="webdevelopper">Vue : Arthur // Controller : Arthur</div>

<section>
<h1>Bienvenue a la page de type Profil</h1>
<p>la page de type profil, permet de modifier les donnees personnelles</p>
<p>redirige vers : hub, profil, training, events, members.php et logout</p>
<h2>Profil</h2>
<form id="profileForm" action="insereqqchoseicifdp" method="post">
<p><label for="name">Nom: </label> <input name="name" type="text" value="Larapide" /> <label for="surname">Prenom: </label><input name="surname" type="text" value="Jeannine" /></p>
<h3>Contacts</h3>
<p><label for="numtel">Numero de telephone: </label><input name="numtel" type="tel" value="0800 50 50 50" /> <label for="email">Adresse mail: </label><input name="email" size="25" type="email" value="jeannine.larapide@email.com" /></p>
<h3>Informations Civiles:</h3>
<p><label for="adress">Adresse: </label><input name="adress" size="40" type="text" value="Mactembourg-les-Bains, rue du Momentum, 42" /><label for="bankid">Compte bancaire: </label><input name="bankid" size="30" type="text" value="8740309849038409384" /></p>
<h3>Changement de mot de passe:</h3>
<p><label for="newpwd">Nouveau mot de passe: </label><input name="newpwd" type="password" /><label for="newpwd_confirm">Confirmez le mot de passe: </label><input name="newpwd_confirm" type="password" /></p>
<p><input type="submit" value="Enregistrer les modifications" /> <input type="reset" value="Reinitialiser les champs" /></p>
<figure><img title="Ameno Dorime" src="views/images/ameno.jpg" alt="GenericGroup100image" />
<figcaption>Ameno Dorime</figcaption>
</figure>
<p><label for="newpp">Changer de photo de profil: </label><input accept="image/*" name="newpp" type="file" /></p>
</form></section>
