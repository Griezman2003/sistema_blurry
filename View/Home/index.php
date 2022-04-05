<?php
  require_once("../../Config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php");?>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<title>SISTEMA</> Home</title>
</head>
<body class="with-side-menu">

    <?php require_once("../MainHeader/header.php");?>

    <div class="mobile-menu-left-overlay"></div>
    
    <?php require_once("../MainNav/Nav.php");?>

	<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12">
					<div class="row">
						<div class="col-sm-4">
	                        <article class="statistic-box yellow">
	                            <div>
	                                <div class="number" id="lbltotal"></div>
	                                <div class="caption"><div>Menu comida</div></div>
									
	                            </div>
	                        </article>
	                    </div>
						<div class="col-sm-4">
	                        <article class="statistic-box red">
	                            <div>
	                                <div class="number" id="lbltotalabierto"></div>
	                                <div class="caption"><div>Menu bebida</div></div>
	                            </div>
	                        </article>
	                    </div>
						<div class="col-sm-4">
	                        <article class="statistic-box green">
	                            <div>
	                                <div class="number" id="lbltotalcerrado"></div>
	                                <div class="caption"><div>Ingresar Datos</div></div>
	                            </div>
	                        </article>
	                    </div>
					</div>
				</div>
			</div>
			</section><!--.widget-->

<section class="widget top-tabs">
	<header class="widget-header-dark">Tasks Completed</header>
	<div class="widget-tabs-nav bordered">
		<ul class="tbl-row" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#wt-1-tab-1" role="tab">
					<i class="font-icon font-icon-chart-3"></i>
					Chart
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#wt-1-tab-2" role="tab">
					<i class="font-icon font-icon-notebook-lines"></i>
					Tasks
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#wt-1-tab-3" role="tab">
					<i class="font-icon font-icon-pin"></i>
					Event
				</a>
			</li>
		</ul>
	</div>
	<div class="tab-content widget-tabs-content">
		<div class="tab-pane active" id="wt-1-tab-1" role="tabpanel">
			<div class="circle-progress-bar-typical pieProgress"
				 role="progressbar" data-goal="79"
				 data-barcolor="#00a8ff"
				 data-barsize="10"
				 aria-valuemin="0"
				 aria-valuemax="100">
				<span class="pie_progress__number"></span>
			</div>
		</div>
		<div class="tab-pane" id="wt-1-tab-2" role="tabpanel">
			<center>Tasks</center>
		</div>
		<div class="tab-pane" id="wt-1-tab-3" role="tabpanel">
			<center>Event</center>
		</div>
	</div>
</section>

	<?php require_once("../MainJs/js.php");?>

	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script type="text/javascript" src="home.js"></script>

</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>