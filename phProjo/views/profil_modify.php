<div class="webdevelopper">Vue : Roman </div>

<section>
	<div class="centered"><label form="memberModify"><h1>Modifier le profil de <?php echo "$member->firstname $member->surname" ?></h1></label>

	<form id="memberModify" action="index.php?action=profil&modify=$member->mail" method="post">
		<p><label for="rightsModify">Droits:</label>
		<input name="rightsModify" type="number" min="0" max="4" value="<?php echo $member->rights; ?>" /></p>

		<p><label for="titleModify">Role:</label>
		<input name="titleModify" type="text" value="<?php echo $member->title; ?>" /></p>

		<p><input type="checkbox" name="paidModify" /> Confirmer le paiement de la cotisation. </p>

		<p><input type="button" value="<?php if($member->rights = 0){echo 'Refuser le membre';}else{echo 'Supprimer le membre'; }; ?>" /></p>

		<p><input type="submit" value="Enregistrer" />
		<input type="reset" value="Anuller" /></p>

	</form></div>


</section>