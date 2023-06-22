<?php
include('../banco/banco.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$tipo = $_POST['tipo'];

    // Verificar a ordem dos valores a seguir
$sql = "UPDATE `tbproduto` SET `nome`='$nome',`descricao`= '$descricao',`preco`='$preco',`tipo`='$tipo' WHERE id_pro = $id";

$update = $conexao->query($sql);
if($update==true)
{ 
  echo 'ok';
}else{
  echo 'vazio';
} 
?>