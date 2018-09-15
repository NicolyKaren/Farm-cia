<?php
include"conexao.php";

$produto_idproduto1=$_POST['produto_idproduto'];
$categoria_idcategoria1=$_POST['categoria_idcategoria'];

$inserir = mysql_query("INSERT INTO categoria_has_produto 
          (produto_idproduto,categoria_idcategoria) 
           VALUE('$produto_idproduto1','$categoria_idcategoria1')") or die(mysql_error());
mysql_close ($db);
?>