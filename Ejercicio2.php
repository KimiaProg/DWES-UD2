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
        $base = 12;
        $altura = 13;
        $diagonalMayor= 15;
        $diagonalMenor= 10;
        $r= 20;
        define("PI", 3.14);

        $areaTriangulo= ($base * $altura) *2;
        $areaCuadrado= $base * $altura;
        $areaRombo= ($diagonalMayor * $diagonalMenor)/2;
        $circulo= PI * $r * $r;

        printf("El circulo de radio %s tiene un area de %s <br>", $r,$circulo);
        printf("El area de triangulo de base %s y altura %s es  %s <br>", $base,$altura,$areaTriangulo);
        printf("El area de rombo de diagonal mayor %s y diagonal menor %s es %s <br>", $diagonalMayor,$diagonalMenor,$areaRombo);
        printf("El area de cuadrado de base %s y de altura %s es %s <br>" , $base,$altura, $areaCuadrado);


    ?>
</body>
</html>