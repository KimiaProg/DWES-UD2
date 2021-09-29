<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $v1 = "Kimia";
    echo $v1;
    echo "<br>";
    var_export(is_string($v1));
    echo "<br>";
    var_export(gettype($v1));
    echo "<br>";
    var_export(is_scalar($v1));
    echo "<br>";

    $v1 = 3.12;
    echo $v1;
    echo "<br>";
    var_export(is_numeric($v1));
    echo "<br>";
    var_export(gettype($v1));
    echo "<br>";
    var_export(is_float($v1));
    echo "<br>";

    $v1= (integer)$v1;
    echo $v1;
    echo "<br>";

    $v2= "5kk";
    echo $v2;
    echo "<br>";

    $v2= (integer)$v2;
    echo $v2;
    echo "<br>";


    ?>
</body>

</html>