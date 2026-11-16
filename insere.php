<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require "conecta.php";
    $cpf=$_GET['CPF'];
    $nomeCliente=$_GET['nomeCliente'];
    $dataNasc=$_GET['dataNasc'];
    $email=$_GET['email'];
    $sql="INSERT INTO clientes(CPF,nomeCliente,dataNasc,email) VALUES('$cpf','$nomeCliente','$dataNasc','$email')";
    $resultado=mysqli_query($conexao,$sql);
    if($resultado){
        header("Location:index.php");
    }
    ?>
</body>
</html>