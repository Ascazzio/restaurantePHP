<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Restaurant website with Bootstrap</title>
</head>

<body>

<?php
    require_once( './functions/header.php');
    cabecera();
?>

<!-- showcase area starts-->

<section class="bg-dark text-light p-3 text-center text-sm-start">
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
        <div>
            <h1>Choose <span class="text-warning">delicious food</span></h1>
            <p class="lead my-4">
                We are a small restaurant where the quantity <br> is substituted by quality.
            </p>
            <button onclick="window.location.href='./Pages/menu.php'" class="btn btn-lg btn-outline-warning">Menu today</>            
        </div>

            <img class="img-fluid d-none d-sm-block p-4 w-50" src="images/Rich_dinner_costillas_2.jpg" alt="salmon">
        </div>
    </div>
</section>

<!--end of showcase area-->

<!-- boxes-->

<section class="p-2">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md">
                <div class="card bg-light text-dark">
                    <div class="card-body text-center">
                       <div class="h1 mb-3">
                        <i class="bi bi-cup-straw"></i>
                       </div>
                       <h3 class="card-title">
                           breakfast
                       </h3>
                       <p class="card-text">Delicious omelet with bacon and fresh pepper</p>
                       <a href="./Pages/menu.php" class="btn btn-lg btn-outline-warning">Menu today</a>
                    </div>
                </div>
            </div>

                <div class="col-md"> 
                    <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                       <div class="h1 mb-3">
                        <i class="bi bi-brightness-high"></i>
                       </div>
                       <h3 class="card-title">
                           lunch
                       </h3>
                       <p class="card-text">Juicy steak with fresh vegetable and "early" small potatos</p>
                       <a href="./Pages/menu.php" class="btn btn-lg btn-outline-warning">Menu today</a>
                    </div>
                </div>
                </div>
                
                <div class="col-md">
                <div class="card bg-light text-dark">
                    <div class="card-body text-center">
                       <div class="h1 mb-3">
                        <i class="bi bi-camera2"></i>
                       </div>
                       <h3 class="card-title">
                           dinner
                       </h3>
                       <p class="card-text">Tasteful ribs with french fries and cucumbers from our garden</p>
                       <a href="./Pages/menu.php" class="btn btn-lg btn-outline-warning">Menu today</a>
                    </div>
                </div>
            </div>
                
                
            </div>
        </div>
    </div>
</section>

<!-- boxes-->
<section id="breakfast" class="p-5">
    <div class="container">
        <div class="row align-items*center justify-content-between">
            <div class="col-md">
                <img src="./images/Omelet_for_breakfast.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md p5">
                <h2>breakfast</h2>
                <p class="lead">
                   Feel like having breakfast under the Eifel Tower. 
                </p>
                <p>
                    This morning we will serve simple but very tasteful omelet with bacon and fresh red pepper. 
                </p>
                <a href="./Pages/menu.php" class="btn btn-lg btn-outline-warning mt-2">Menu today</a>
            </div>

        </div>
    </div>
</section>

<section id="lunch" class="bg-dark text-light p-5">
    <div class="container">
        <div class="row align-items*center justify-content-between">
            
            <div class="col-md p-5">
                <h2>lunch</h2>
                <p class="lead">
                    Take it and don't leave it.
                </p>
                <p>
                    Juicy steak with a lot of fresh vegetable and "early" small potatos will make you feel really great in the middle of your day.
                </p>
                <a href="./Pages/menu.php" class="btn btn-lg btn-outline-warning mt-2">Menu today</a>
            </div>
            <div class="col-md">
                <img src="./images/Meat_with_potatos_vegetable.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

<section id="dinner" class="p-5">
    <div class="container">
        <div class="row align-items*center justify-content-between">
            <div class="col-md">
                <img src="./images/Rich_dinner_costillas_2.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md p-5">
                <h2>dinner</h2>
                <p class="lead">
                    Why not dreaming without sleeping?
                </p>
                <p>
                    Tasteful ribs with french fries and cucumbers directly from our garden will fullfil your dreams before sleeping.
                </p>
                <a href="./Pages/menu.php" class="btn btn-lg btn-outline-warning mt-2">Menu today</a>
            </div>
        </div>
    </div>
</section>
<!--boxes end here-->


<!--Footer-->

<footer class="p-5 bg-dark text-white text-center position-relative">
    <div class="container">
        <p class="lead">
            Copyright &copy; 2021 geekshubsacademyrestaurant
        </p>
        <a href="" class="position-absolute bottom-0 end-0 p-5">
            <i class="bi bi-arrow-up-circle h1"></i>
        </a>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</php>