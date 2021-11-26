<?php 

    require '../database/db_conect.php';

    function listarPlatos($conect) {

        //Connect to database
        $mysqli = $conect;
        $resultado = $mysqli->query("SELECT * FROM plato");

        function imagePlato($reg) {
            // global $reg;
            if (empty($reg['image'])) {
                return('../images/Omelet_for_breakfast.jpg');
            } else {
                return ($reg['image']);
            }
        }

        while ($reg=$resultado->fetch_assoc()){
            echo
                '<div class="row align-items*center justify-content-between mt-2">
                     <div class="col-md">
                        <img src="'. imagePlato($reg) .'" class="img-fluid" alt="">
                    </div>
                        <div class="col-md p5">
                            <h2>' . $reg['titulo'] . '</h2>
                            <p class="lead">' . 
                                $reg['descripcion'] . '
                            </p>
                            <p>
                                Para ' . $reg['comensales'] . ' personas 
                            </p>
                            <a href="#" class="btn btn-secondary mt-5 bt-lg">' . $reg['precio'] . '&#8364</a>
                        </div>
                </div>';
        };
    };
?>