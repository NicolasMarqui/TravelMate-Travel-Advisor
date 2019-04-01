<?php 
    if(!isset($_SESSION)){
        session_start();
    }
?>

<div class="headerWrap">
    <?php include_once('nav.php')?> 
    <div class="selectDest">
        <h1>Be FREE.</h1>
        <h3>Escolha um destino abaixo: </h3>
        <button><a href=<?php 
        
            if($_SESSION['isLogged']){
                echo "pages/dashboard";
            }else{
                echo "pages/login";
            }

        ?> class="linkLogin">Começar</a></button>
    </div>
</div>