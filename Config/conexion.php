<?php
session_start ();
class Conectar {
    protected $dbh;
    protected function Conexion (){
    try {
        $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=SISTEMA_TI","root","");
        return $conectar;
    }catch (Exception $e){
        print "error en la base datos!".$e->getMessage() . "<br/>";
        die();
    }   
    }
public function set_names (){
    return $this->dbh->query("SET NAMES 'utf8'");
    }
public function ruta(){
    return "http://localhost:8888/Sistema_TI/view/home";
}   
}
?>