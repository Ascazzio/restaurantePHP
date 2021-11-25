<?php 

    require '../database/db_conect.php';

    function listarPlatos($conect) {

        $mysqli = $conect;
        $resultado = $mysqli->query("SELECT Plato_id, titulo FROM plato");

        while ($reg=$resultado->fetch_assoc() ) {
            echo '<h2>'. $reg['titulo'] .'</h2>' ;

            <div class="container">
                <div class="row align-items*center justify-content-between">
                    echo '<div class="col-md">
                        <img src="../images/Omelet_for_breakfast.jpg" class="img-fluid" alt="">
                    </div>
                        <div class="col-md p5">
                    <h2>breakfast</h2>
                    <p class="lead">
                        Feel like having breakfast under the Eifel Tower. 
                    </p>
                    <p>
                        This morning we will serve simple but very tasteful omelet with bacon and fresh red pepper.   
                    </p>
                    <a href="#" class="btn btn-secondary mt-5 bt-lg">16 &#8364</a>
                </div>'
        </div>
    </div>

        };

    };


?>