<?php
    include '../banco/banco.php';
    
//echo 'conexão ok!'
//recebendo variáveis por post
$email = $_POST ['email'];
$senha = $_POST ['senha'];


//criando uma consulta
$sql = "select * from tbcliente where email='$email' and senha='$senha'";
$consulta = $conexao->query($sql);
if ($consulta->num_rows > 0){
    $linha=$consulta->fetch_array(MYSQLI_ASSOC);
    session_start();
    $_SESSION['login'] = $linha['codcli'];
    echo $linha['codcli'];
    
   // echo 'Usuário Encontrado';
}else{
    echo 'loginerror';
   // echo 'Usuário não encontrado';
}
?>
