<?php
  require_once("../../Config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
<?php require_once("../MainHead/head.php");?>
	<title>SISTEMA:MENU BEBIDA</title>
</head>
<body class="with-side-menu">
<?php require_once("../MainHeader/header.php");?>
	<div class="mobile-menu-left-overlay"></div>
	<?php require_once("../MainNav/Nav.php");?>
    <?php require_once("../menu bebida/index.php");
?>
<body class="with-side-menu">
	<div class="page-content">
		<div class="container-fluid">
			<section class="box-typical box-typical-full-height-with-header">
				<header class="box-typical-header box-typical-header-bordered">
					<div class="tbl-row">
						<div class="tbl-cell tbl-cell-title">
							<center><h2></h2></center>
						</div>
						<div class="tbl-cell tbl-cell-actions">
							<button type="button" class="action-btn view active">
								<i class="font-icon font-icon-view-grid"></i>
							</button>
							<button type="button" class="action-btn view">
								<i class="font-icon font-icon-view-rows"></i>
							</button>
							<button type="button" class="action-btn view">
								<i class="font-icon font-icon-view-cascade"></i>
							</button>
						</div>
					</div>
				</header>
				<div class="box-typical-body">
					<div class="gallery-grid">
						<div class="gallery-col">
							<article class="gallery-item">
                            <img src="../../Public/img/arbol.png"  alt="50" height="50">
								<div class="gallery-hover-layout">
									<div class="gallery-hover-layout-in">
										<center><H1 class="gallery-item-title">MENU BEBIDA </H1></center>
										<center><p><b>Tenemos un menu apartados a las bebidas acompaña tu deliciosa cena con una bebida que desees<b></p></center>
										<center><p><b>lo mejor en locoreria y vinos de alta calidad<b></p></center>
										<div class="btn-group">

										
											
										</div>
										<p></p>
									</div>
								</div>
							</article>
						</div>

						<div class="gallery-col">
							<article class="gallery-item">
								<img src="../../Public/img/refrescos.png" alt="150" height="150"> <align="left"> 
								<img src="../../Public/img/vinos.png" alt="150" height="170"> <align="left">
								<img src="../../Public/img/agua.png" alt="150" height="150"> <align="left">
								<img src="../../Public/img/jugos.png" alt="150" height="150"> <align="left">
								<div class="gallery-hover-layout">
									<div class="gallery-hover-layout-in">
										<p class="gallery-item-title"></p>
										<center><p></p></center>
										<div class="btn-group">	
										<div class="gallery-col">

							         <article class="gallery-item">
								<img src="../../Public/img/cerveza.png" alt="150" height="150"> <align="left">
								<img src="../../Public/img/limonada.png" alt="150" height="150"> <align="left">
								<img src="../../Public/img/mezcal.png" alt="150" height="150"> <align="left">
								<img src="../../Public/img/trago.png" alt="150" height="150"> <align="left">
								<div class="gallery-hover-layout">
									<div class="gallery-hover-layout-in">
									<p class="gallery-item-title"></p>
									<center><p></p></center>
									<div class="btn-group">						
									<img src="../../Public/img/agua-fresa.png" alt="150" height="150"> <align="left">
								<img src="../../Public/img/fanta.png" alt="150" height="150"> <align="left">
								<img src="../../Public/img/mezcal.png" alt="150" height="150"> <align="left">
								<img src="../../Public/img/trago.png" alt="150" height="150"> <align="left">
			
		<script src="Public/js/lib/jquery/jquery.min.js"></script>
	<script src="Public/js/lib/tether/tether.min.js"></script>
	<script src="Public/js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="Public/js/plugins.js"></script>

	<script type="text/javascript" src="Public/js/lib/match-height/jquery.matchHeight.min.js"></script>
	<script>
		$(function() {
			$('.gallery-item').matchHeight({
				target: $('.gallery-item .gallery-picture')
			});
		});
	<?php require_once("../MainJs/js.php");?>
	</script>
	<script src="Public/js/app.js"></script>
</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>
