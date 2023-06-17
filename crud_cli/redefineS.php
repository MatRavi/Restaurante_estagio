<?php
include '../banco/banco.php';

$email = $_POST['email'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$sql="Update tbcliente set senha='$senha' where email='$email' and cpf='$cpf'";

$consulta = $conexao->query($sql);

if ($consulta){
    echo 'ok';
    
}else{
    echo 'vazio';
}
?>