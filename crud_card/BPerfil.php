<?php
include '../banco/banco.php';

$cli=$_POST['cli'];

$sql = "select * from tbcliente where codcli='$cli'";
$consulta = $conexao->query($sql);
  if ($consulta->num_rows > 0){
	while(  $linha=$consulta->fetch_array(MYSQLI_ASSOC)){
	echo "<div class='p-5'>
    <div>Nome: ".$linha['nome']."</div>
    <div>Email: ".$linha['email']."</div>
    <div>Estado: ".$linha['estado']."</div>
    <div>Cidade: ".$linha['cidade']."</div>
    <div>Bairro: ".$linha['bairro']."</div>
    <div>Rua: ".$linha['rua']."</div>
    <div>Número: ".$linha['numero']."</div>
    <div>Complemento: ".$linha['complemento']."</div>
    </div>";
	}//fim while pizzas
  }
?>