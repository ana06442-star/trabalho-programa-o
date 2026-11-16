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
$sql="SELECT * FROM clientes WHERE id=$id";
$resultado=mysqli_query($conexao,$sql);
$linha=mysqli_fetch_array($resultado);
mysqli_close($conexao);    
?>
<form action="altera.php" method="post">
<input type="hidden" name="id" value="<?php echo $linha['id']; ?>"></p>
<p> CPF:
<input type="text" name="CPF" value="<?php echo $linha['cpf']; ?>"></p>
<p>Nome:
<input type="text" name="nomeCliente" value="<?php echo $linha['nomeCliente']; ?>"></p>
<p>Data nascimento:
<input type="date" name="dataNasc" value="<?php echo $linha['dataNasc']; ?>"></p>
<p>Email:
<input type="email" name="email" value="<?php echo $linha['email']; ?>"></p>
<input type="submit" value="Confirma alteração">
</form>
<br><a href="index.php"> Listar alunos</a>
</body>
</html>