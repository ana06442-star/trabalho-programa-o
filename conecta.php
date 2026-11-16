<?php
$bdServidor='127.0.0.1';
$bdUsuario='root';
$bdSenha='';
$bdBanco='cad2026';
$conexao=mysqli_connect($bdServidor,$bdUsuario,$bdSenha,$bdBanco);
if($conexao===false){
    echo "Problemas para conectar no banco; ERRO: ";
    echo mysqli_connect_error();
}
else{ echo "Seja bem-vindo!<br><br><br>";}
?>