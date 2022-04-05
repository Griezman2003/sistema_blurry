<?php<?php
    require_once("../../Config/conexion.php");
    session_destroy();
    header("Location:".Conectar::ruta()."LOG.php");
    exit();
?>