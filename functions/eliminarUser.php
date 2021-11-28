<?php

require '../database/db_conect.php';
$mysqli = conectar();



if (isset($_POST['eliminar'])) {
	$resultado = $mysqli->query("DELETE FROM usuario WHERE Usuario_ID=".$_GET["id"]);
	header('location: users.php');
}

require_once( '../functions/header.php');
    cabecera(); 
	
echo '	<link rel="stylesheet" href="../CSS/styles.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

		<div id="form-horizontal" class="mt-5">
		¿Estás seguro de eliminar el user '.($_GET["nombre"]).'?
		<form action="" method="post">
			<p><input class="btn btn-sm btn-outline-warning mt-4"  type="submit" name="eliminar" value="Si"> 
			<input class="btn btn-sm btn-outline-warning mt-4"  type="submit" name="volver" value="No" onClick=window.location.replace("users.php")></p>	
		</form>
		</div>'
?>