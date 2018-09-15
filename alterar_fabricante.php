<?php
include "conexao.php";

$idfabricante=$_POST['idfabricante'];
$fabricante=$_POST['fabricante'];

$resultado = mysql_query("UPDATE fabricante 
                          SET fabricante = '$fabricante' 
						  WHERE idfabricante = '$idfabricante'") 
                          or die (mysql_error());
						  
include "consultar_fabricante.php";
?>