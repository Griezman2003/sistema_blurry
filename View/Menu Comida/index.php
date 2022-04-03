<?php
  require_once("../../Config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
<?php require_once("../MainHead/head.php");?>
	<title>SISTEMA:MENU COMIDA</title>
</head>
<body class="with-side-menu">
<?php require_once("../MainHeader/header.php");?>
	<div class="mobile-menu-left-overlay"></div>
	<?php require_once("../MainNav/Nav.php");?>
    <?php require_once("../Menu Comida/index.php");
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
										<center><H1 class="gallery-item-title">MENU COMIDA </H1></center>
										<center><p><b>Este primer apartado lo ultimo en calidad de comida<b></p></center>
										<div class="btn-group">
										
											
										</div>
										<p></p>
									</div>
								</div>
							</article>
						</div>

						<div class="gallery-col">
							<article class="gallery-item">
								<img src="../../Public/img/ensalada.png" alt="150" height="150"> <align="left">
								<img src="../../Public/img/milanesa de pollo.png" alt="150" height="150"> <align="left">
								<img src="../../Public/img/milanesa.png" alt="150" height="150"> <align="left">
								<img src="../../Public/img/agua chile.png" alt="150" height="150"> <align="left">
								<div class="gallery-hover-layout">
									<div class="gallery-hover-layout-in">
										<p class="gallery-item-title"></p>
										<center><p>please look at the prices and products of the images feel at home</p></center>
										<div class="btn-group">	
										<div class="gallery-col">

							         <article class="gallery-item">
								<img src="../../Public/img/espagueti.png" alt="150" height="150"> <align="left">
								<img src="../../Public/img/pollo.png" alt="150" height="150"> <align="left">
								<img src="../../Public/img/pollo verde.png" alt="150" height="150"> <align="left">
								<img src="../../Public/img/ensalada camaron.png" alt="150" height="140"> <align="left">
								<div class="gallery-hover-layout">
									<div class="gallery-hover-layout-in">
									<p class="gallery-item-title"></p>
									<center><p>please look at the prices and products of the images feel at home</p></center>
									<div class="btn-group">						
								
			
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