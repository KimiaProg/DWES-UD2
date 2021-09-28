<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Operación And</h1>
    <table border="1">
        <tr>
            <th>Variable 1</th>
            <th>Variable 2</th>
            <th>Variable 3</th>
            <th>Resultado</th>
        </tr>



        <?php
        $b1 = true;
        $b2 = true;
        $b3 = true;

        ?>

        <tr>
            <td><?php var_export($b1); ?></td>
            <td><?php var_export($b2); ?></td>
            <td><?php var_export($b3); ?></td>
            <td><?php var_export($b1 && $b2 && $b3); ?></td>
        </tr>
        <?php
        $b1 = true;
        $b2 = true;
        $b3 = false;

        ?>
        <tr>
            <td><?php var_export($b1); ?></td>
            <td><?php var_export($b2); ?></td>
            <td><?php var_export($b3); ?></td>
            <td><?php var_export($b1 && $b2 && $b3); ?></td>
        </tr>
        <?php
        $b1 = true;
        $b2 = false;
        $b3 = false;

        ?>
        <tr>
            <td><?php var_export($b1); ?></td>
            <td><?php var_export($b2); ?></td>
            <td><?php var_export($b3); ?></td>
            <td><?php var_export($b1 && $b2 && $b3); ?></td>
        </tr>
        <?php
        $b1 = false;
        $b2 = false;
        $b3 = false;

        ?>
        <tr>
            <td><?php var_export($b1); ?></td>
            <td><?php var_export($b2); ?></td>
            <td><?php var_export($b3); ?></td>
            <td><?php var_export($b1 && $b2 && $b3); ?></td>
        </tr>
        <?php
        $b1 = false;
        $b2 = false;
        $b3 = true;

        ?>
        <tr>
            <td><?php var_export($b1); ?></td>
            <td><?php var_export($b2); ?></td>
            <td><?php var_export($b3); ?></td>
            <td><?php var_export($b1 && $b2 && $b3); ?></td>
        </tr>
        <?php
        $b1 = false;
        $b2 = true;
        $b3 = true;

        ?>
        <tr>
            <td><?php var_export($b1); ?></td>
            <td><?php var_export($b2); ?></td>
            <td><?php var_export($b3); ?></td>
            <td><?php var_export($b1 && $b2 && $b3); ?></td>
        </tr>
        <?php
        $b1 = false;
        $b2 = true;
        $b3 = false;

        ?>
        <tr>
            <td><?php var_export($b1); ?></td>
            <td><?php var_export($b2); ?></td>
            <td><?php var_export($b3); ?></td>
            <td><?php var_export($b1 && $b2 && $b3); ?></td>
        </tr>

        <?php
        $b1 = true;
        $b2 = false;
        $b3 = true;

        ?>
        <tr>
            <td><?php var_export($b1); ?></td>
            <td><?php var_export($b2); ?></td>
            <td><?php var_export($b3); ?></td>
            <td><?php var_export($b1 && $b2 && $b3); ?></td>
        </tr>

    </table>


    <h1>Operación Or</h1>
    <table border="1">

        <tr>
            <th>Variable 1</th>
            <th>Variable 2</th>
            <th>Variable 3</th>
            <th>Resultado</th>
        </tr>
        <?php
        $b1 = true;
        $b2 = true;
        $b3 = true;

        ?>

        <tr>
            <td><?php var_export($b1); ?></td>
            <td><?php var_export($b2); ?></td>
            <td><?php var_export($b3); ?></td>
            <td><?php var_export($b1 || $b2 || $b3); ?></td>
        </tr>


        <?php
        $b1 = true;
        $b2 = true;
        $b3 = false;

        ?>
        <tr>
            <td><?php var_export($b1); ?></td>
            <td><?php var_export($b2); ?></td>
            <td><?php var_export($b3); ?></td>
            <td><?php var_export($b1 || $b2 || $b3); ?></td>
        </tr>
        <?php
        $b1 = true;
        $b2 = false;
        $b3 = false;

        ?>
        <tr>
            <td><?php var_export($b1); ?></td>
            <td><?php var_export($b2); ?></td>
            <td><?php var_export($b3); ?></td>
            <td><?php var_export($b1 || $b2 || $b3); ?></td>
        </tr>
        <?php
        $b1 = false;
        $b2 = false;
        $b3 = false;

        ?>
        <tr>
            <td><?php var_export($b1); ?></td>
            <td><?php var_export($b2); ?></td>
            <td><?php var_export($b3); ?></td>
            <td><?php var_export($b1 || $b2 || $b3); ?></td>
        </tr>
        <?php
        $b1 = false;
        $b2 = false;
        $b3 = true;

        ?>
        <tr>
            <td><?php var_export($b1); ?></td>
            <td><?php var_export($b2); ?></td>
            <td><?php var_export($b3); ?></td>
            <td><?php var_export($b1 || $b2 || $b3); ?></td>
        </tr>
        <?php
        $b1 = false;
        $b2 = true;
        $b3 = true;

        ?>
        <tr>
            <td><?php var_export($b1); ?></td>
            <td><?php var_export($b2); ?></td>
            <td><?php var_export($b3); ?></td>
            <td><?php var_export($b1 || $b2 || $b3); ?></td>
        </tr>
        <?php
        $b1 = false;
        $b2 = true;
        $b3 = false;

        ?>
        <tr>
            <td><?php var_export($b1); ?></td>
            <td><?php var_export($b2); ?></td>
            <td><?php var_export($b3); ?></td>
            <td><?php var_export($b1 || $b2 || $b3); ?></td>
        </tr>

        <?php
        $b1 = true;
        $b2 = false;
        $b3 = true;

        ?>
        <tr>
            <td><?php var_export($b1); ?></td>
            <td><?php var_export($b2); ?></td>
            <td><?php var_export($b3); ?></td>
            <td><?php var_export($b1 || $b2 || $b3); ?></td>
        </tr>

    </table>
</body>

</html>