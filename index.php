<?php

include "../conexion.php";
$consulta = $conexion->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>

    <a href="form-registros.php">Registrarse</a>
    <br></br>
    <table border="1">
        <thead> 
            <th> Nombres </th>
            <th> Documentos </th>
            <th> Editar </th>
            <th> Eliminar </th>
        </thead>  
        <tbody> 
            <?php
            while($user = $consulta->fetch_object()):
            ?>
            <tr>
            <td> <?= $user->nombres; ?> </td>
            <td> <?= $user->documentos; ?> </td>
            <td>   <form action="" method="get">
                    <input type ="hidden"name="id" value="<?=$user->id?>">

                    <button type="submit">Actualizar</button> </td>
            <td> 
                <form action="" method="get">
                    <input type ="hidden"name="id" value="<?=$user->id?>">

                    <button type="submit">Eliminar</button>
                </form>
            </td>
            </tr>

            
            <?php
            endwhile;
            ?>


        </tbody>       


    </table>
</body>
</html>
