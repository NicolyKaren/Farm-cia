<!--Início Consulta-->
<?php
$db = mysql_connect ("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia",$db);
$result = mysql_query("select * from categoria", $db);
echo "<center><table border='1'><tr><td><h1>ID Categoria</h1></td>
            <td><h1>Categoria</h1></td></tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row=mysql_fetch_array($result)){ 
	echo "<tr><td>".$row["idcategoria"]."</td><td>"
	     .$row["categoria"]."</td></tr><br>";
	}
	echo "</table></center>";
	echo "<br />";mysql_free_result($result);
mysql_close ($db);
?>
<!--Fim Consulta-->