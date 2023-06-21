<?php
include '../banco/banco.php';

$id = $_POST['id'];

$sql = "delete from tbproduto where id_pro = '$id'";
$consulta = $conexao->query($sql);

            if ($consulta){
                echo 'ok';
            }else{
                echo 'vazio';
            }
?>
