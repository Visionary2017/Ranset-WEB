<?php
class Conectar{
    public static function conexion(){
        //$conexion=new mysqli("localhost", "root", "", "bdtest-ranset");
        //$conexion->query("SET NAMES 'utf8'");
        //return $conexion;

    	try {
    		$conexion = new PDO('mysql:host=localhost; dbname=bdtest-ranset','root','');
    		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		$conexion->exec("SET CHARACTER SET UTF8");
    	} catch (Exception $e) {

    		die("Error" . $e->getMessage());		
    		echo "Linea del error" . $e->getLine();
    		
    	}

    	return $conexion;

    }
}
?>