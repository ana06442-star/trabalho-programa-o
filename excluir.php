<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "conecta.php";
    $id=$_GET['id'];
    $sql="DELETE FROM clientes WHERE id=$id";
    $resultado=mysqli_query($conexao,$sql);
    if($resultado){
        header("Location:index.php");
    }
    ?>
</body>
</html>