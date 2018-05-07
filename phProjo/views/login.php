<div class="webdevelopper">Vue : Roman // Controller : Roman</div>

<section>
  <h1>Connection</h1>
  <label form="loginForm"><em>redirige vers le hub et contient un lien vers retrievepw.php ainsi qu'un retour possible a l'index.php</em></label>
  <form id="loginForm" action="index.php?action=login" method="post">
  <p><label for="userLogin">Votre pseudo :</label> <input name="userLogin" type="text" /></p>
  <p><label for="pwLogin">Votre mot de passe :</label> <input name="pwLogin" type="password" /></p>
  <input name="submitLogin" type="submit" value="Se connecter" /></form>
  <p>Pseudo: test<br/>Mot de passe: test</p>
</section>

<?php $test = password_hash('test', PASSWORD_BCRYPT);
echo $test; ?>
