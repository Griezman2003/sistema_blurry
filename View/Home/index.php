<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
<?php require_once("../MainHead/head.php");?>
	<title> INICIO </title>
</head>
<body class="with-side-menu">
<?php require_once("../MainHeader/header.php");?>
	<div class="mobile-menu-left-overlay"></div>
	<?php require_once("../MainNav/Nav.php");?>

<head lang="es">
</head>
<body class="with-side-menu">
	<div class="page-content">
		<div class="container-fluid">
			<div class="cards-grid" data-columns>
				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
                                        <img src="../../public/img/chocolate.png" alt="300" height="300">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#"> PASTEL</a></p>
										<p class="color-blue-grey-lighter">pastel</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star active"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<div class="photo">
								<img src="../../public/img/chocolate.png" alt="">
							</div>
							<header class="title"><a href="#">Bajo en calorias recomendado </a></header>
							<p>Que esperas para adquirirlo!</p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked"><a href="#"></a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								
							</a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="../../public/img/fresas.png" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">FRESAS</a></p>
										<p class="color-blue-grey-lighter"></p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<header class="title"><a href="#">empieza tu dia con un delicioso postre</a></header>
							<p>LIKE</p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked"> <a href="#">come saludablemente</a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								
							</a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="../../public/img/tacos.png" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">TACOS</a></p>
										<p class="color-blue-grey-lighter">Disfruta tu dia con unos deliciosos tacos</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star active"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<div class="photo">
								<img src="../../public/img/tacos.png" alt="">
							</div>
							<header class="title"><a href="#">Los mejores de la zona</a></header>
							<p></p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked"> <a href="#"></a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								
							</a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="../../Public/img/rollo.png" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Rollos de pollo</a></p>
										<p class="color-blue-grey-lighter">Agotados!</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<header class="title"><a href="#">Agotados</a></header>
							<p></p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked"> <a href="#"></a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								
							</a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="../../public/img/arbol.png" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">acebuche</a></p>
										<p class="color-blue-grey-lighter">Menu disponible</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star active"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<header class="title"><a href="#">menu despinible</a></header>
							<p>abierto de 7:00 AM A 10:30 PM</p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked">Los mejores <a href="#"></a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								1M
  </a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="../../public/img/postre.png" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Cafe</a></p>
										<p class="color-blue-grey-lighter">cafeina con arroz</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<div class="photo">
								<img src="../../img/gall-img-5.jpg" alt="">
							</div>
							<header class="title"><a href="#">disponibles</a></header>
							<p></p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked"> <a href="#"></a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								
							</a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="../../public/img/pops.png" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">pops</a></p>
										<p class="color-blue-grey-lighter">disponibles</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star active"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<header class="title"><a href="#">aprovechen a un estan disponibles</a></header>
							<p></p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked"> <a href="#">Cuida tu salud</a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								2000M
							</a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="../../Public/img/refrescos.png" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">AGUAS NATURALES</a></p>
										<p class="color-blue-grey-lighter">ya estan disponibles </p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<header class="title"><a href="#">Encargue su pedido</a></header>
							<p></p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked"> <a href="#"></a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								
							</a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="../../Public/img/galleta.png" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">GALLETAS</a></p>
										<p class="color-blue-grey-lighter">disponible</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star active"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<div class="photo">
								<img src="../../Public/img/galletas.png" alt="">
							</div>
							<header class="title"><a href="#">Se hacen envios a domicilio</a></header>
							<p>encarga</p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked"><a href="#"></a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								21M
							</a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="../../Public/img/cabiar.png" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">CABIAR</a></p>
										<p class="color-blue-grey-lighter">disponible</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<header class="title"><a href="#">pedidos abiertos</a></header>
							<p>encargo</p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked"><a href="#">saludable</a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								100K
							</a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="../../Public/img/sopas.png" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">FIDEOS</a></p>
										<p class="color-blue-grey-lighter">disponible</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star active"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<header class="title"><a href="#">Los mejores pedidos del lugar</a></header>
							<p>ahora </p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked"> <a href="#">consulta</a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								1K
							</a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="../../Public/img/pollo.png" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">POLLOS ASADOS</a></p>
										<p class="color-blue-grey-lighter">disponible</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star active"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<header class="title"><a href="#">Los mejores pedidos del lugar</a></header>
							<p>disponibles </p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked"> <a href="#">consulta</a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								10K
							</a>
						</div>
						
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

			</div><!--.card-grid-->
			<div class="clear"></div>

		</div><!--.container-fluid-->
	</div><!--.page-content-->
		$(function() {
			$('.card-user').matchHeight();
		});
	</script>

<script src="public/js/app.js"></script>
<?php require_once("../MainJs/js.php");?>
</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>