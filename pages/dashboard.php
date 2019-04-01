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
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="fullDashWrapper">
        <div class="sideNavDash">
            <button class="btnMenu">oi</button>
        </div>
        <div class="fullDashContent">
            <h3>content</h3>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>