<div class="container">
<h3>Choix de la requête</h3>
	<div class="row">
		<div class="col-xs-2">
			MODE : 
			<select class="selmode">
				<option value="classique">Classique</option>
				<option value="debug">Debug</option>			
			</select>
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
						<input type="hidden" value="classique" id="mode" name="mode">
						<button type="submit">Valider</button>
					</div>
				</form>
    	    </div>
		</div>
		<div class="col-xs-2">
		</div>
	</div>
</div>
<script>
	$('.selmode').on('change', function() {
  		document.getElementById('mode').value = this.value;
	})
</script>