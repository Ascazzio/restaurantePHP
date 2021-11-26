<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Restaurant website with Bootstrap</title>
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
            <li class="nav-item">
            <a href="./about.html" class="nav-link">ABOUT</a>
            </li>
            <li class="nav-item">
            <a href="../Pages/menu.html" class="nav-link">MENU</a>
            </li>
            <li class="nav-item">
            <a href="#contact" class="nav-link">CONTACT</a>
            <li class="nav-item"></li>
            <a href="#menu" class="nav-link">LOGIN</a>
            </li>
        </ul>
    </div>
    </div>
</nav>

<!-- navigation and logo area ends-->

<!--Contact form and map starts-->
<section>
    <div class="container p-2">
        <h2>CONTACT</h2>
    </div>
</section>

<section class="form-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <form action="">
                <div class="form-row">
                    <div class="form-group col-md-6 p-2">
                        <input type="text" class="form-control" placeholder="Full name *">
                    </div>
                    <div class="form-group col-md-6 p-2">
                        <input type="email" class="form-control" placeholder="Email address *">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6 p-2">
                        <input type="number" class="form-control" placeholder="Contact number *">
                    </div>
                   
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12 p-2">
                        <input type="subject" class="form-control" placeholder="Subject *">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12 p-2">
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
            </form>
            
            <div class="form-row">
                <div class="form-group col-md-12 text-center">
                <button type="submit" class="btn btn-lg btn-outline-warning mt-2"> Send message </button>
                </div>
            </div>
            </div>
        <div class="col-md-6 address">
            <h6>Call us / WhatsApp</h6>
            <p><a href="tel:003456879564215"><i class="fas fa-phone"></i> +(34)56879564215</a><br>
            </p>
            <h6>Email / Website</h6>
            <p>
                <a href="mailto:geekshubsacademyrestaurant@gmail.com"><i class="fas fa-envelope"></i>
                GHrestaurant@gmail.com</a><br>
            </p>
            <h6>Working hours</h6>
            <p>
                Mon - Fri : 9am - 24pm
            </p><br>
            <h6>Address</h6>
            <p>
                GHrestaurant <br>
                Carrer de Almirall Cadarso, 26 <br>
                46005, Valencia
            </p>
        </div>
    </div>
            
    </div>
</section>

<!--Contact form and map ends-->

<section>
    <div class="container-fluid">
        <iframe class="p-3"" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d686.039235279884!2d-0.36768206809835235!3d39.46453767893755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6048c83218265b%3A0x77373bfdf77f412d!2sCarrer%20de%20l&#39;Almirall%20Cadarso%2C%2026%2C%2046005%20Val%C3%A8ncia!5e0!3m2!1sen!2ses!4v1632672745372!5m2!1sen!2ses" width="100%" height="400px" frameborder="0" style="border:0"></iframe>
    </div>
</section>

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