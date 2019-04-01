<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="loginWrapper">
        <?php include('nav.php'); ?>
        <div class="formWrapper">
            <h1>Login</h1>
            <form action="../includes/login.inc.php" method="POST">
                <input type="text" placeholder="Usuário" name="username">
                <input type="password" placeholder="Senha" name="senha">
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>