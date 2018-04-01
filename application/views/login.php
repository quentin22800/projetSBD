<section id="login">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <h1>Page de connexion</h1>
                    <form role="form" action="<?php echo site_url('login/connexion') ?>" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="loginform" class="sr-only">Login</label>
                            <input type="text" name="loginform" id="loginform" class="form-control" placeholder="login...">
                        </div>
                        <div class="form-group">
                            <label for="pwd" class="sr-only">Mot de passe</label>
                            <input type="password" name="pwd" id="pwd" class="form-control" placeholder="mot de passe...">
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
                    </form>
                    <hr>
        	    </div>
    		</div>
    	</div>
    </div>
</section>
