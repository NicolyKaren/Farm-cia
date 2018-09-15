<?php
include "conexao.php";

$idcategoria1=$_POST['idcategoria'];
$categoria1=$_POST['categoria'];

$resultado = mysql_query("UPDATE categoria 
                          SET categoria = '$categoria1' 
						  WHERE idcategoria = '$idcategoria1'") 
                          or die (mysql_error());
						  
include "consulta_categoria.php";
?>