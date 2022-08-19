<?php 
    require_once("bootstrap.php");
?>
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
    echo "<b>Registrar.php</b> <br> $nome <br> $ano";
    ?>
    <br>
    <a href="index.php">index.php</a>

 <h2>Registrar v1.0</h2>
    <form action="" method="POST">
        Nome completo
        <input type="text" name="nome" required placeholder="Ex: Alice picks"><br>
        E-mail
        <input type="email" name="email" required placeholder="Ex: alicepicks@gmail.com"><br>
        <button type="submit"><b>Cadastro</b></button>
    </form>
    <?php 
        if ($_POST) {
            date_default_timezone_set('Brazil/East');


            $nome = $_POST['nome'];
            $nome = htmlspecialchars($nome,ENT_quotes);

            $email = $_POST['email'];
            $email=htmlspecialchars($email,ENT_quotes);

            echo "<meta http-equiv='refresh' content='0;registrar.php?q=true'>";
            //gravar:
            $sql1=mysqli_query($conn, "INSERT INTO users (nome,email, ip, data) VALUES ('$nome', '$email', '$ip', '$data')");

        }
    ?>
</body>
</html>