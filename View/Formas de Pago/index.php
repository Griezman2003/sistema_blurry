<?php
  require_once("../../Config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
<?php require_once("../MainHead/head.php");?>
	<title>ADMINISTRAR: FORMAS DE PAGO </title>
</head>
<body class="with-side-menu">
<?php require_once("../MainHeader/header.php");?>
	<div class="mobile-menu-left-overlay"></div>
	<?php require_once("../MainNav/nav.php");?>

	<div class="page-content">
		<div class="container-fluid">
		<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>FORMAS DE PAGO</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li><a href="#">agregar empleados</a></li>
								
							</ol>
						</div>
					</div>
				</div>
			</header>
			<div class="box-typical box-typical-padding">
				<p>
				   BIENVENIDO
			    </p>

			<div class="box-typical box-typical-padding">
				<p>
					Desde esta ventana podras ingresar tus datos de identificacion
				</p>

				<h5 class="m-t-lg with-border">Ingrese Información</h5>
				
				
				<div class="row">
				
				<div class="col-lg-12">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputEmail1"> nombre</label>
							<input type="text" class="form-control" id="nombre" placeholder="ingresa el (los) nombre(s) del empleado" >
						</fieldset>
					</div>
					<div class="col-lg-12">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputEmail1">apellido</label>
							<input type="text" class="form-control" id="apellido" placeholder="ingresa los apellido(s) del empleado" >
						</fieldset>
					</div>
				<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Genero</label>
							<select id="genero" class="form-control">
							<option>sexo</option>
								<option>Masculino</option>
								<option>Femenino </option>
							</select>
							 
						</fieldset>
					</div>
					<div class="col-lg-12">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputEmail1"> numero de telefono</label>
							<input type="text" class="form-control" id="cargo" placeholder="ingrese su numero de telefono" >
						</fieldset>
					</div>
				<div class="col-lg-6">
				<div class="row">
					
					<div class="col-lg-12">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputEmail1">Edad del consumidor</label>
							<input type="text" class="form-control" id="Edad" placeholder="ingrese su edad" >
						</fieldset>
					</div>
				
					<div class="col-lg-12">
				
					
							<button type="submit" name="GUARDAR" value="add" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
						
					</div>
				</div><!--.row-->
			</div>  
		</div><!--.container-fluid-->
	</div><!--.page-content-->
	<?php require_once("../MainJs/js.php");?>
	<script type="text/javascript" src="nuevoticket.js"></script>
</body>
</html>
<?php
  } else {
  }
?>
