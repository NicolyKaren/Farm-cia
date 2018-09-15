<meta http-equiv="Content-Type" content="text/html;charset=utf-8"> 
<center>
<!--Início Excluir-->
<form method="post" action="excluir_categoria.php"><br>
<p> ID:<select size="1" name="idcategoria">
<?php
// Gera a lista de placa
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
<input type="submit" name="Submit" value="Excluir">
</form>
</center>
<!--Fim Excluir-->