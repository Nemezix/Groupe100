		<div class="webdevelopper">Vue : Arthur // Controller : Arthur and Roman</div>

		<section>
			<h1 class="centered">Events</h1>
			<p class="centered">Liste des évènements</p>

			<?php
					foreach($listevents as $i => $events){
						echo '<br /><section class="list_events">
								<div><img title="Event" src="'.$events->getPhoto_URL().'"alt="" height="60" width="60" /></div>
								
								<div><h5><a href="index.php?action=events&event='.$events->eventid.'">'.$events->getTitle().'</a></h5> 
								Le '.$events->getEvent_date().' à '.$events->getLocalisation().'</div>
								
								<div>'.$events->getPrice().' euros</div>
							</section><br />'; 
					} 
				?>

			<?php if ($user->rights > 1){?>

			<section class="centered">

				<label form="newEvent"><h2>Creer un nouvel evenement</h2></label>
				<form id="newEvent" action="index.php?action=events" method="post">

				<p><label for="title">Titre:*</label>
					<input name="title" type="text" placeholder="Entrez le titre de l'evenement" required="" /></p>

				<p><label for="description">Description:*</label>
					<input name="description" type="text" placeholder="Entrez la description de l'evenement" required="" /></p>

				<p><label for="price">Prix:*</label>
					<input name="price" type="number" required="" /></p>

				<p><label for="event_date">Date:*</label>
					<input name="event_date" type="date" required="" /></p>

				<p><label for="localisation">Localisation:</label>
					<input name="localisation" type="text" /></p>

				<p><label for="photo">Photo:</label>
					<input name="photo" type="file" accept="image/*" /></p>

				<p><input name="submitEvent" type="submit" value="Creer" />
					<input type="reset" value="Annuler" /></p>

				</form>
				<p> * champs obligatoires </p>
			</section>

			<?php } ?>





			<!-- must be hidden on authentification / if admin -->	
			<div class="admin">Espace d'administration pour les MODÉRATEURS</div>
    	</section>
