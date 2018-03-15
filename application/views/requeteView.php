<div>
	<h1>Choix de la requête</h1>
	<form>
		<div class="form-group">
			<label for="exampleFormControlSelect1">Requêtes : </label>
			<select class="form-control" id="exampleFormControlSelect1" id="requestList">
				<?php 
				foreach ($requests as $r) {
					echo "<option>".$r."</option>";
				}
				?>
			</select>

		</div>
	</form>
</div>
