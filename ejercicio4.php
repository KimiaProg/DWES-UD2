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
$precioZapatos= 45.99;
$descuentoEspecialZapateria= 12;
$descuentoPorcentaje=$precioZapatos* ($descuentoEspecialZapateria/100);

define("DES", 8);

$total= ($precioCamisa*2) + ($precioPantalon*3);
$totalDes= $total-($total * (DES/100));

printf("El precio de un pantalón= %s <br>",$precioPantalon);
printf("El precio de una camisa= %s <br>",$precioCamisa);
printf("El total sin descuento es= %s <br>",$total);
printf(" El total con descuento es= %0.2f <br>",$totalDes);
printf(" El precio del zapato sin descuento %0.2f <br>",$precioZapatos);
$precioZapatos-= $descuentoPorcentaje;
printf(" El precio del zapato con descuento %0.2f <br>",$precioZapatos);
printf(" El total de la cuenta es %0.2f <br>",$precioZapatos+$totalDes);

?>
</body>
</html>