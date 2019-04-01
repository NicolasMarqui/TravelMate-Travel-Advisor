<?php

    include_once('../config/dbConfig.php');
    session_start();

    $user = $_POST['username'];
    $senha = $_POST['senha'];

    if(empty($user) || empty($senha)){
        header("Location: ../pages/login?=erro&camposVazios=true");
        exit();
    }
    
    $query = "SELECT * FROM login WHERE username='$user' AND senha='$senha'";
    $results = mysqli_query($conn, $query);

    $checkRow = mysqli_num_rows($results);

    if($checkRow > 0){
        $_SESSION['isLogged'] = true;
        $_SESSION['user'] = $user;

        header('Location: ../index?userLogado=true');
        exit();
    }else{
        header("Location: ../pages/login?=erro&usuarioCorreto=false?senhaCorreta=false");
        exit();
    }
?>
