<<<<<<< HEAD
<!-- LOGIN FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">login</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="login-form" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="lg_username" class="sr-only">Username</label>
						<input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="username">
					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password">
					</div>
					<div class="form-group login-group-checkbox">
						<input type="checkbox" id="lg_remember" name="lg_remember">
						<label for="lg_remember">remember</label>
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>forgot your password? <a href="#">click here</a></p>
				<p>new user? <a href="#">create new account</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
=======
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
                        <div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Montrer le mot de passe</span>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
                    </form>
                    <hr>
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
>>>>>>> 4dd696c720dce0313a233677d6d4ba4cfce7ef8f
