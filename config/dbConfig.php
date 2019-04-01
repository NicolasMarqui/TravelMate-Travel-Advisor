<?php

    $dbServer = 'localhost';
    $dbUser = 'root';
    $dbSenha = '';
    $dbTabela = 'travel';

    $conn = mysqli_connect($dbServer, $dbUser, $dbSenha, $dbTabela) or die(mysqli_connect_error());

?>