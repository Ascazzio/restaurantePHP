<?php

require '../database/db_conect.php';
$mysqli = conectar();

if (isset($_POST['eliminar'])) {
	$resultado = $mysqli->query("DELETE FROM plato WHERE Plato_id=".$_GET["id"]);
	header('location: platos.php');
}

echo '¿Estás seguro de eliminar el plato?
<form action="" method="post">
	<p><input type="submit" name="eliminar" value="Si"> 
	<input type="submit" name="volver" value="No" onClick=window.location.replace("index.php")></p>	
</form>'
?>