<?php
include "conecta.php";
$id = $_POST['id'];
$nomeCliente = $_POST['nomeCliente'];
$dataNasc= $_POST['dataNasc'];
$email = $_POST['email'];
$CPF = $_POST['CPF'];

 $sql="UPDATE clientes SET CPF='$CPF', nomeCliente='$nomeCliente', dataNasc= '$nomeCliente', email= '$email' WHERE id=$id";
 $resultado = mysqli_query($conexao,$sql);
 
 if($resultado){
    header("Location: index.php");
 }
 ?>