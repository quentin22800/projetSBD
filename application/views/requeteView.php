<div>
	<h1>Choix de la requête</h1>
	<form action="<?php echo site_url('requete/resultat') ?>" method="GET">
		<div class="form-group">
			<label for="exampleFormControlSelect1">Requêtes : </label>
			<select class="form-control" id="requestList" name="request">
				<?php
				foreach ($requests as $key => $value) {
					echo "<option value=".$value.">".$key."</option>";
				}
				?>
			</select>
			<button type="submit">Valider</button>
		</div>
	</form>
</div>
