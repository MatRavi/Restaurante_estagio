<?php
include '../banco/banco.php';

$id = $_POST['id'];

$sql = "delete from tbvenda where id_venda = '$id'";
$consulta = $conexao->query($sql);

            if ($consulta){
                echo 'ok';
            }else{
                echo 'vazio';
            }
?>
