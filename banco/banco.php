<?php
$conexao = new mysqli('localhost','root','','dbdelivery');

if (mysqli_connect_errno()) {
    trigger_error(msqli_connect_erro());
    echo mysqli_connect_error;
}
?>