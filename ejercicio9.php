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
       
        echo "El nombre del archivo de script ejecutándose actualmente: ";
        echo $_SERVER["PHP_SELF"];
        echo "<br> La dirección IP del servidor donde se está ejecutando actualmente el script.: ";
        echo $_SERVER["SERVER_ADDR"];
        echo "<br>El nombre del host del servidor :";
        echo $_SERVER["SERVER_NAME"];
        echo "<br>El directorio raíz de documentos del servidor en el cual se está ejecutando el script actual:";
        echo $_SERVER["DOCUMENT_ROOT"];
        echo "<br>La dirección IP desde la cual está viendo la página actual el usuario.: ";
        echo $_SERVER["REMOTE_ADDR"];
        echo "<br>Comprobar el método de la solicitud:";
        echo $_SERVER["REQUEST_METHOD"];
        echo "<br>";


        function variables(){
            $v1= "Hola Local";
            STATIC $v2= "Hola static";
            GLOBAL $v3;
        }

        echo $v1;
        echo $v2;
        $v3= "Global";
        echo $v3;
        

    ?>
</body>
</html>