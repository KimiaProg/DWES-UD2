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
    $numDiaria = "6";
    $numSemanal = 10;

    define("MAXDIARIA", 6);
    define("MAXSEMANAL", 30);

    echo "El valor de operaciones diarias es mayor o igual que el máximo:";
    var_export($numDiaria >= MAXDIARIA);

    echo "<br> El valor de operaciones semanales es mayor o igual que el máximo:";
    var_export($numSemanal >= MAXSEMANAL);

    echo "<br> El valor de operaciones diarias es exactamente igual al máximo:";
    var_export($numDiaria === MAXDIARIA);

    echo "<br> El valor de operaciones diarias es distinto al de operaciones semanales:";
    var_export($numDiaria != $numSemanal);



    ?>
</body>

</html>