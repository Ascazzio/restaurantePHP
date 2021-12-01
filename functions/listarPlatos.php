<?php 

    require '../database/db_conect.php';

    function listarPlatos($conect) {

        //Connect to database
        $mysqli = $conect;
        $resultado = $mysqli->query("SELECT * FROM plato");

        function imagePlato($reg) {
            // global $reg;
            if (empty($reg['image'])) {
                return('../images/noImage.png');
            } else {
                return ($reg['image']);
            }
        }

        while ($reg=$resultado->fetch_assoc()){
            echo
                '<link rel="stylesheet" href="../CSS/styles.css">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
                  
                
                <div class="row align-items-center justify-content-between mt-2">
                     <div class="col-md-5 mt-2 mb-2">
                        <img src="'. imagePlato($reg) .'" class="img-fluid col-md-9 w-75 h-75" alt="">
                    </div>
                        <div class="col-md p4">
                            <h2>' . $reg['titulo'] . '</h2>
                            <p class="lead">' . 
                                $reg['descripcion'] . '
                            </p>
                            <p>
                                Para ' . $reg['comensales'] . ' personas 
                            </p>
                            <p>
                                Ingredientes: ' . $reg['ingredientes'] . ' 
                            </p>
                        
                            <a href="#" class="btn btn-secondary mt-5 bt-lg">' . $reg['precio'] . '&#8364</a>
                        </div>
                </div>';
        };
    };
?>