<?php
    include '../banco/banco.php';
    
//recebendo variáveis por post
$email = $_POST ['email'];
$senha = $_POST ['senha'];

if(($email=='Marioooadmin@admin.com') && ($senha=='MamaMia')){
    session_start();
    $_SESSION['loginA'] = 'ok';
    echo '1';
}else{
    echo 'loginerror';
   // echo 'Usuário não encontrado';
}

?>
