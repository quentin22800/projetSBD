<div class="container">
	<div class="row">
		<div class="col-xs-2">
			<form action="<?php echo site_url('requete/deconnexion') ?>">
				<button class="btn btn-danger" type="submit">Déconnexion</button>
			</form>
		</div>
	    <div class="col-xs-8">
	    	<h3>Choix de la requête</h3>
    	    <div class="form-wrap">
            	<form action="<?php echo site_url('requete/resultat') ?>" method="GET">
            		<div class="form-group">
				    	<label for="mode">MODE : </label>
				    	<select class="form-control" id="mode" name="mode">
				    		<option value="classique" selected>Classique</option>
							<option value="debug">Debug</option>
				    	</select>
					</div>
            		<div class="form-group">
				    	<label for="request">Requêtes : </label>
				    	<select class="form-control" id="request" name="request">
				    		<?php
								foreach ($requests as $key => $value) {
									echo "<option value=".$value.">".$key."</option>";
								}
							?>
				    	</select>
					</div>
					<button class="btn btn-primary" type="submit">Valider</button>
				</form>
    	    </div>
		</div>
		<div class="col-xs-2">
		</div>
	</div>
</div>