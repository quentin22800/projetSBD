<div class="container">
	<div class="row">
		<div class="col-xs-2">
			<form action="<?php echo site_url('requete/index') ?>">
				<button class="btn btn-link" type="submit">Retour</button>
			</form>
		</div>
	    <div class="col-xs-8">
	    	<h3>Résultat de la requête</h3>
    	    <h4><?php echo $resultatFinal ?></h4>
		</div>
		<div class="col-xs-2">
		</div>
	</div>
</div>