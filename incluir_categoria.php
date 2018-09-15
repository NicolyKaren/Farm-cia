<?php
include "conexao.php";

$idcategoria1=$_POST['idcategoria'];
$categoria1=$_POST['categoria'];
$inserir = mysql_query("INSERT INTO categoria (idcategoria, categoria) 
		        VALUES('$idcategoria1','$categoria1')");
mysql_close ($db);
?>