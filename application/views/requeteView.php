
	<div class="container">
	<h3>Choix de la requête</h3>
    	<div class="row">
			<div class="col-xs-2">
			</div>
    	    <div class="col-xs-8">
        	    <div class="form-wrap">
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
			</div>
			<div class="col-xs-2">
			</div>
    	</div>
    </div>

