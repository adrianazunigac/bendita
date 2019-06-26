<?php
	if($registro)
	{
		$fila = $registro->row();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>Bendita Essence - Editar Clave</title>
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
				<p class="text-right">
					<?php 
						echo "<p class='text-muted text-right'><em>".date("d/m/Y"); echo " T: ".date("h:i:sa");  $user =$this->session->userdata('user'); 
						echo " Bienvenido&nbsp;".$user."</em></p>";
					?>
				</p>
				<div class="center-block contenido">	
					<h3 class="text-center">Cambiar clave</h3>
					<p>&nbsp;</p>
					<?php
						$atributos = array(
							'id' => 'frmeditar',
							'name' => 'frmeditar',
							'class' => 'form-horizontal'
						);
						echo form_open('c_general/c_editarusr',$atributos);
					?>
							<div class="form-group">
								<?php
									$lnombre = array(
										'class' => 'col-sm-3 control-label'
									);
									echo form_label('Nombre:','txtnombre',$lnombre);
								?>
								<div class="col-sm-9">
									<?php
										echo form_hidden('hcod',$fila->cod);
										$nombre = array(
											'id' => 'txtnombre',
											'name' => 'txtnombre',
											'class' => 'form-control disabled',
											'value' => $fila->nombre,
											'readonly' => 'readonly'
										);
										echo form_input($nombre);
									?>
								</div>
							</div>

							<div class="form-group">
								<?php
									$llogin = array(
										'class' => 'col-sm-3 control-label'
									);
									echo form_label('Login:','txtlogin',$llogin);
								?>
								<div class="col-sm-9">
									<?php
										$login = array(
											'id' => 'txtlogin',
											'name' => 'txtlogin',
											'class' => 'form-control',
											'value' => $fila->login,
											'readonly' => 'readonly'
										);
										echo form_input($login);
									?>
								</div>
							</div>

							<div class="form-group">
								<?php
									$lpass = array(
										'class' => 'col-sm-3 control-label'
									);
									echo form_label('Nueva Clave:','txtpassword',$lpass);
								?>
								<div class="col-sm-9">
									<?php
										$pass = array(
											'id' => 'txtpassword',
											'name' => 'txtpassword',
											'class' => 'form-control'
										);
										echo form_password($pass);
									?>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-9">
									<?php
										echo form_submit('btnEditar','Editar','class="btn btn-success"').
										"&nbsp;<a href='".base_url('index.php/c_login/c_inicio')."' class='btn btn-warning'>Cancelar</a>";
									?>
								</div>
							</div>
					<?php
						echo form_close();
					?>
				</div>
			</div>
		</div>
	</div>
	
	<footer>
		<div class="container">
			<p class="text-right" style="margin-top:3px;">Copyright &copy; Bendita Essence - versi&oacute;n 1.0</p>
		</div>
	</footer>
</body>
</html>
<?php
	}
?>