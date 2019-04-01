<?php 
    if(!isset($_SESSION)){
    session_start();
}?>

<div class="navWrapper">
    <h1 class="navLogo">Travel <br> <span>M.A.T.E</span></h1>
    <ul class="itemWrapper">
        <li><a href="#" class="active navItem">Home</a></li>
        <li><a href="#" class="navItem" >Hotéis</a></li>
        <li><a href="#" class="navItem">Turismo</a></li>
        <li><a href=<?php 

            if($_SESSION['isLogged']){
                echo "pages/dashboard";
            }else{
                echo "pages/login";
            } 

        ?> class="navItem"><?php 
        
        if($_SESSION['isLogged']){
            echo 'Sua conta';
        }else{
            echo 'Login';
        }
        
        ?></a></li>
    </ul>
</div>