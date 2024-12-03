!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    label, input{
        display: block;
    }
    </style>
<body>
    <form action="../MODELO/crud.php" method="post">
        <label for="">Ingrese sus Nombres</label><br>
        <input type="text" name="nombres" ><br>

        <label for="">Ingrese su Documento</label><br> 
        <input type="text" name="documentos" require><br>

        <br>

        <button type="submit">resgistrar</button>

</form>
</body>
</html>
