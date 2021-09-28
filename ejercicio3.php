
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

        $precioPantalon = 29.99;
        $cantidadPantalon = 3;
        $precioCamisa= 25.99;
        $cantiadCamisa=2;
        define("DES", 0.08);

        $total= ($precioCamisa*2) + ($precioPantalon*3);
        $totalDes= $total-($total * DES);

        printf("El precio de un pantalón= %s <br>",$precioPantalon);
        printf("El precio de una camisa= %s <br>",$precioCamisa);
        printf("El total sin descuento es= %s <br>",$total);
        printf(" El total con descuento es= %0.2f <br>",$totalDes);

    ?>
</body>
</html>