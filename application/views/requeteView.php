<div class="container">
<h3>Choix de la requête</h3>
	<div class="row">
		<div class="col-xs-2">
		</div>
	    <div class="col-xs-8">
    	    <div class="form-wrap">
            	<form action="<?php echo site_url('requete/resultat') ?>" method="GET">
					<div class="form-group">
						<label for="exampleFormControlSelect1">Requêtes : </label>
						<select class="form-control" id="exampleFormControlSelect1" id="requestList" name="request">
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
		</div>
		<div class="col-xs-2">
		</div>
	</div>
</div>