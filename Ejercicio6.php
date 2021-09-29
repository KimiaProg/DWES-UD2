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


    var_export($numDiaria >= MAXDIARIA);

    echo "<br>";
    var_export($numSemanal >= MAXSEMANAL);

    echo "<br>";

    var_export($numDiaria === MAXDIARIA);
    echo "<br>";


    var_export($numDiaria != $numSemanal);
    echo "<br>";



    ?>
</body>

</html>