<style>
    <?php 
        include '../CSS/styles.css'    
    ?>
</style>

<?php

 function cabecera() {
    
    echo
    '<!-- navigation and logo area starts-->
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

    <!-- navigation and logo area ends-->';

 };

 function cabeceraAdmin() {
    echo
    '<!-- navigation and logo area starts-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-1">
        <div class="container">
            <a href="../index.php" class="navbar-brand"> 
                <img class="img-fluid w-50" src="../images/logo.png" alt="">
            </a>

            <h2 class="adminText">
                Admin
            </h2>

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
                    <a href="./login.php" class="nav-link">LOGOUT</a>
                    <li class="nav-item"></li>
                    <a href="./platos.php" class="nav-link">PLATOS</a>        
                    <li class="nav-item"></li>
                    <a href="./users.php" class="nav-link">USUARIOS</a>
                </ul> 
            </div>
        </div>
    </nav>

    <!-- navigation and logo area ends-->';

 }

?>