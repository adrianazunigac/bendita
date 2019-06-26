<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>Bendita Essence - Menú Principal</title>
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
	<div id="wrapper" class="content-wrapper"> 
		<div class="container">
				<div class="row">
				<p class="text-right">
					<?php 
						echo "<p class='text-muted text-right'><em>".date("d/m/Y"); echo "T: ".date("h:i:sa");  $user =$this->session->userdata('user'); 
						echo " Bienvenido..&nbsp;<a href='" .base_url('index.php/c_general/c_bEditarUsr')."'>".$user."</a></em></p>";
					?>
				</p>
				<div class='col-md-6'>
					<h2><a href='<?php echo base_url('index.php/c_general/c_fibonacci');?>'>1. Fibonacci</a></h2>
					<h2><a href='<?php echo base_url('index.php/c_general/c_monedero');?>'>2. Monedero</a></h2>
					<h2><a href='<?php echo base_url('index.php/c_general/c_trenes');?>'>3. Trenes</a></h2>
					<h2><a href='<?php echo base_url('index.php/c_login/c_cerrarsession');?>'>4. Salir</a></h2>
				</div>
				</div>		
		</div>
	</div>
	<footer style="max-height: 30px;">
		<div class="container">
			<p class="text-right" style="margin-top:3px;">Copyright &copy; Bendita Essence versi&oacute;n 1.0</p>
		</div>
	</footer>
</body>
</html>