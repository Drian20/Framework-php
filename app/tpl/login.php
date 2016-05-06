<?php include('head.php'); ?>
<h1><?= $title; ?></h1><?php
echo '<div id="form">
			<form class="form-log" method="POST" action="' . APP_W . 'login/login">
				Nombre <input class="input" type="text" name="username" />
				Contraseña <input class="input" type="text" name="password" />
				<input type="submit" class="btn btn-default" id="login-button" value="Entrar" />
				<input type="submit" class="btn btn-default" id="register-button" value="Registro" />
			</form>
		</div>';
?>
<?php include('footer.php'); ?>
