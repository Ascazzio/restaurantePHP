<?php
session_start();
session_destroy();
echo 'Se ha cerrado la sesion con exito. <a href="index.php">Volver a la pagina principal</a>';
?>