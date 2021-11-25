<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Menu Restaurant website with Bootstrap</title>
</head>

<body>
    
<!-- navigation and logo area starts-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-1">
        <div class="container">
            <a href="../index.html" class="navbar-brand"> 
                <img class="img-fluid w-50" src="../images/logo.png" alt=""></a>
    
                <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navmenu">
                
                <span class="navbar-toggler-icon"></span>
                </button>

        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"></li>
                <a href="#about" class="nav-link">ABOUT</a>
                <li class="nav-item"></li>
                <a href="./menu.html" class="nav-link">MENU</a>
                <li class="nav-item"></li>
                <a href="../Pages/contact.html" class="nav-link">CONTACT</a>
            </ul>
        </div>
        </div>
    </nav>

<!-- navigation and logo area ends-->

<section id="lunch" class="bg-white text-dark p-5">
    <div class="container">
        <div class="row align-items*center justify-content-between">
            
            <div class="col-md p5">
                <h2>About our restaurant</h2>
                <p class="lead p-2">
                    We are a small restaurant where the quantity is substituted by quality of the food prepared from organic sources. We have
                    Our focus is to bring the most delicious food for you that you would fully enjoy and rest any time of your day.  
                </p>
                    <button onclick="window.location.href='./menu.html'" class="btn btn-lg btn-outline-warning mt-2"">Menu today</>
            </div>
            <div class="col-md">
                <img src="../images/bar_restaurant.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>


<!-- section of our cooks starts here-->
<section id="cooks" class="p-5 bg-dark">
    <div class="container">
        <h2 class="text-center text-white">Our Cooks</h2>
        <p class="lead text-center text-white mb-5">Our cooks are experts in their area. 
            Every day they are working hard to prepare delicious food for you</p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/11.jpg" class="rounded-circle mb-3" alt="">
                            <h3 class="card-title mb-3">Raul de Risa</h3>
                            <p class="card-text">You would joyfully laugh with Raul's delicious main courses.
                            </p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/women/11.jpg" class="rounded-circle mb-3" alt="">
                            <h3 class="card-title mb-3">Tamara Carinosa</h3>
                            <p class="card-text">Each desert, side-dish or any coctail tastes deliciously with Tamara's touch.
                            </p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/12.jpg" class="rounded-circle mb-3" alt="">
                            <h3 class="card-title mb-3">David el Mago</h3>
                            <p class="card-text">For David no food is any wonder. You will be surprise by magic this guy is able to bring up.
                            </p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            
    </div>
</section>


<!--section of our cooks ends here-->

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
</html>