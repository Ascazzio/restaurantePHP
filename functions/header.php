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

?>