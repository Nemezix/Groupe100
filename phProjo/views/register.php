<div id="webdevelopper">
<span style="color:pink">Vue : Roman // Controller : Roman</span>
</div>

<section>
<h1><span style="color:pink">Inscription</span></h1>
<form id="registerForm" action="rempliscafdp" method="post">
<p><label for="name">Nom: </label> <input name="name" required="" type="text" placeholder="Dupont" />
<label for="surname"> Prenom: </label> <input name="surname" required="" type="text" placeholder="Jacques" /><br/>
<label for="email"> Adresse email: </label><input name="email" required="" type="email" placeholder="exemple@email.com" /><br/>
<label for="numtel"> Numero de telephone: </label><input name="numtel" required="" type="tel" placeholder="+32 479 90 84 10" /> <br />
<label for="adress">Adresse: </label><input name="adress" required="" size="40" type="text" placeholder="Mactembourg-les bains, rue du Momentum,42" /> <br/>
<label for="bankid"> Compte bancaire: </label><input max="29" name="bankid" required="" size="30" type="text" placeholder="BE** **** **** ****" /><br/>
<label for="pwd"> Mot de passe: </label><input name="pwd" required="" type="password" /><label for="pwd_confirm"> Confirmez le mot de passe: </label><input name="pwd_confirm" required="" type="password" /> <br />
<label for="pp"> Votre photo de profil </label><input accept="image/*" name="pp" required="" type="file" /> <br />
<input type="submit" value="Enregistrer" />
<input type="reset" value="Effacer" /></p>
</form></section>