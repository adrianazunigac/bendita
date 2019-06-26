<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>Bendita Essence -  Login</title>
	<link rel="shortcut icon" href="<?php echo base_url('images/favicon.ico') ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/normalize.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/estilos.css'); ?>">
</head>
<body>

	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img src="<?php echo base_url('images/banner.jpg'); ?>" class="img-responsive">
				</div>
			</div>
		</div>
	</header>

	<div class="content-wrapper">
		<div class="container">
			<div class="row">
				<div class="hidden-xs col-sm-3 col-md-3">
				</div>
				<div class="col-sm-9 col-md-9">
					<div class="contenedor-frmlogin">
						<?php
							echo "<div class='alert alert-info' role='alert' style='margin-bottom:5px;'>
                            		<p>
                                		<strong style='font-size:25px;'><span class='glyphicon glyphicon-alert'></span></strong>&nbsp;&nbsp;&nbsp;&nbsp;Usuario y/o clave incorrecta.
                            		</p>
                      			</div>";
						?>
							<br>
					<br>	
						<?php
							$atributos = array(
								'id' => 'frmlogin',
								'id' => 'frmlogin',
								'name' => 'frmlogin'
							);
							echo form_open('c_login/c_validar',$atributos);
						?>
					<table class="mtable" border="">
						<tr>
							<td class="loginppal">Sign in</td>
						</tr>
						<tr>	
							<td class="centrame"><input type="text" placeholder="E-mail" class="cajatexto" name="txtnombre" id="txtnombre"></td>
						</tr>
						<tr>	
							<td class="centrame"><input type="password" placeholder="Password" class="cajatexto" type="password" id="txtpass" name="txtpass"></td>
						</tr>

						<tr>	
							<td class="centrame"><input type="checkbox">&nbsp;Remember me&nbsp;&nbsp;&nbsp;&nbsp; <span class="colortexto">Forgot password?</span></td>
						</tr>
						<tr>	
							<td class="centrame"><input type="submit" name="btnIngresar" class="buttonlogin" value="SIGN IN"></td>
						</tr>
						<tr>	
							<td class="centrame">Not a member? <span class="colortexto">Register</span></td>
						</tr>
						<tr>	
							<td class="centrame">or sign in with:</td>
						</tr>
						<tr>	
							<td align="center" valign="middle"><img src="<?php echo base_url('images/redes.jpg'); ?>" class="img-responsive"></td>
						</tr>
						</table>
						</form>
					</div>
					<p>&nbsp;</p>
				</div>
			</div>
		</div>
	</div>	
	<footer>
		<div class="container">
			<p class="text-right" style="margin-top:3px;">Copyright &copy; Bendita Essence versi&oacute;n 1.0</p>
		</div>
	</footer>
</body>
</html>