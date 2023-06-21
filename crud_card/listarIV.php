<?php
include '../banco/banco.php';

$tipo=$_POST['tipo'];

$sql = "select * from tbproduto where tipo='$tipo'";
$consulta = $conexao->query($sql);
if($consulta){
  if ($consulta->num_rows > 0){
	while(  $linha=$consulta->fetch_array(MYSQLI_ASSOC)){
	echo "<ul>
	<li>
		<div class='fh5co-food-desc pro' id='".$linha['id_pro']."'>
			<figure>
				<img src='images/".$linha['id_pro'].".jpg' class='img-responsive'>
			</figure>
			<div>
				<h3>".$linha['nome']."</h3>
				<p>".$linha['descricao']."</p>
			</div>
		</div>
		<div class='fh5co-food-pricing'>R$ 
		".$linha['preco']."
		</div>
	</li>
</ul> ";
	}//fim while pizzas
  }
}
echo "</div></div>";
?>