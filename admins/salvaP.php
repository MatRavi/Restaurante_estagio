<?php
include('../banco/banco.php');

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$tipo = $_POST['tipo'];
    // Verificar a ordem dos valores a seguir
      $sql = "insert into tbproduto values(null, '$nome', '$descricao', '$preco', '$tipo')";
      $insert = $conexao->query($sql);

            if($insert==true)
            {
              echo 'ok';
            }else{
              echo 'vazio';
            }

?>