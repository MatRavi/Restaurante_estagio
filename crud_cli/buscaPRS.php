<?php
include '../banco/banco.php';

$email = $_POST['email'];
$cpf = $_POST['cpf'];

$sql="select * from tbcliente where email='$email' and cpf='$cpf'";

$consulta = $conexao->query($sql);

if ($consulta->num_rows > 0){
    echo 'ok';
    
}else{
    echo 'vazio';
}
?>