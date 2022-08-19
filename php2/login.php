<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
</head>
<body>
    <?php
    $nome = "Page";
    $ano = "2022";
    echo "<b>Login.php</b> <br> $nome <br> $ano";

    //cookies
    $cookie_nome = "usuario";
    $cookie_valor = "virusdobaidu";

    setcookie($cookie_nome, $cookie_valor);
    echo $_COOKIE['usuario'];
    ?>
    <br>
    <a href="cond.php">cond.php</a>
    <br>
    <a href="index.php">index.php</a>

 <h2>Login</h2>
    <form action="enviar.php?" method="GET">
        <input type="text" name="user" required="" placeholder="Usuário">
        <input type="password" name="pass" required="" placeholder="Senha">
        <input type="submit" name="" value="Entrar">
    </form>

</body>
</html>