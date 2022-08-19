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
    echo "<b>Cond.php</b> <br> $nome <br> $ano";
    echo "<br>";

    $num1 = 31;
    $num2 = 32;

    if ($num1 == $num2) {
        echo "Os números são iguais";
    } elseif ($num1 > $num2) {
        echo "$num1 é maior";
    } else {
        echo "$num2 é maior";
    }

    ?>
    <br>
    <a href="cond.php">index.php</a>
    <br>
    <a href="login.php">login.php</a>
</body>
</html>