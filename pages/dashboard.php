<?php
    session_start();

    if(!$_SESSION['isLogged']){
        header("Location: ../index.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo "Dashboard". "-" .$_SESSION['user']?></title>
    <link rel="stylesheet" href="cs/style.css">
</head>
<body>
    <?php echo "Dashyy"?>
</body>
</html>