<?php

require './database/db_conect.php';
$mysqli = conectar();

if (isset($_POST['eliminar'])) {
	$resultado = $mysqli->query("DELETE FROM usuario WHERE Usuario_ID=".$_GET["id"]);
	header('location: users.php');
}

echo '¿Estás seguro de eliminar el user '.($_GET["nombre"]).'?
<form action="" method="post">
	<p><input type="submit" name="eliminar" value="Si"> 
	<input type="submit" name="volver" value="No" onClick=window.location.replace("users.php")></p>	
</form>'
?>