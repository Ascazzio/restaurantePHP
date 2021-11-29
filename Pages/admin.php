<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Restaurant website with Bootstrap</title>
</head>

<body>

    <!-- navigation and logo area starts-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-1">
        <div class="container">
            <a href="../index.php" class="navbar-brand"> 
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
                    <a href="./Pages/about.php" class="nav-link">ABOUT</a>
                    <li class="nav-item"></li>
                    <a href="./Pages/menu.php" class="nav-link">MENU</a>        
                    <li class="nav-item"></li>
                    <a href="./Pages/contact.php" class="nav-link">CONTACT</a>
                </ul> 
            </div>
        </div>
    </nav>
    <!-- navigation and logo area ends-->

    <section class="">
      <div class="container">
        <div class="row justify-content-center text-center">
            <h1>Admin Page</h1>
            <p>
                <button class="btn btn-primary" data-bs-toggle="collapse" href="#nuevo" role="button" aria-expanded="false" aria-controls="nuevo">Nuevo Plato</button>
                <button class="btn btn-primary" data-bs-toggle="collapse" href="#listaPlatos" role="button" aria-expanded="false" aria-controls="listaPlatos">Lista de Platos</button>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#usuarios" aria-expanded="false" aria-controls="usuarios">Usuarios</button>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#nuevoUsuario" aria-expanded="false" aria-controls="nuevoUsuario">Nuevo Usuario</button>
            </p>

            <div class="row justify-content-center collapse multi-collapse" id="nuevo">
                <?php 
                    require '../admin/nuevoPlato.php';
                ?>
            </div>

            <div class="row justify-content-center collapse multi-collapse" id="listaPlatos">
                <?php 
                    require '../admin/platos.php';
                ?>
            </div>

            <div class="row justify-content-center collapse multi-collapse" id="usuarios">
                <?php 
                    require '../admin/users.php';
                ?>
            </div>

            <div class="row justify-content-center collapse multi-collapse" id="nuevoUsuario">
                <?php 
                    require '../admin/nuevoUsuario.php';
                ?>
            </div>

          </div>
        </div>
      </div>
    </section>

<!--Footer-->
<!-- <footer class="p-5 bg-dark text-white text-center position-relative">
    <div class="container">
        <p class="lead">
            Copyright &copy; 2021 geekshubsacademyrestaurant
        </p>
        <a href="" class="position-absolute bottom-0 end-0 p-5">
            <i class="bi bi-arrow-up-circle h1"></i>
        </a>
    </div>
</footer> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</php>