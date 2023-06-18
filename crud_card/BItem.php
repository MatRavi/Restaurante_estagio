<?php
include '../banco/banco.php';

$id=$_POST['id'];

$sql = "select * from tbproduto where id_pro='$id'";
$consulta = $conexao->query($sql);
  if ($consulta->num_rows > 0){
	while(  $linha=$consulta->fetch_array(MYSQLI_ASSOC)){
	echo $linha['nome']."|".$linha['preco'];
	}//fim while pizzas
  }
?>