<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo</title>
</head>
<body>
    <?php  $nombre= "Kimia Ehsani";
        $poblacion= "Sevilla";
        $edad= 23;

        echo "Soy " . $nombre . ", tengo ". $edad . " años y vivo en ". $poblacion . ".<br>";
        printf("Soy %s, tengo %s años y vivo en %s.",$nombre,$edad, $poblacion);

    ?>
</body>
</html>
