<meta http-equiv="Content-Type" content="text/html;charset=utf-8"> 
<!--Início Incluir-->
<center><form method="post" action="incluir_categoria_produto.php">
<br>
<p>Id Produto: <br><select size="1" name="produto_idproduto">
<?php
include "conexao.php";

$res=mysql_query("select * from produto");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
$cod1=$registro[1];
echo "<option value=\"$cod\">$cod1</option>\n";
}
?>
</select><br><br>

Id Categoria: <br><select size="1" name="categoria_idcategoria">
<?php

include "conexao.php";

$res=mysql_query("select * from categoria");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
$cod1=$registro[1];
echo "<option value=\"$cod\">$cod1</option>\n";
}
?>
</select><br><br>

<input type="submit" name="Submit" value="Incluir">
</form>
<!--Fim Incluir-->