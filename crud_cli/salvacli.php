<?php
include('../banco/banco.php');

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$fone = $_POST['fone'];
$nasc = $_POST['nasc'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];

//verifica se tem de um cpf cadastrado
$sqlv = "select * from tbcliente where cpf='$cpf'";
$consultav = $conexao->query($sqlv);
          if ($consultav->num_rows > 0){
            echo 'fcpf';
          }else{
    // Verifica a ordem dos valores a seguir
                $sql = "insert into tbcliente(codcli, nome, cpf, fone, email, senha, nasc, CEP, estado, cidade, bairro, rua, numero, complemento) values(null, '$nome', '$cpf', '$fone','$email','$senha', '$nasc','$cep','$estado','$cidade','$bairro','$rua','$numero','$complemento')";
                $insert = $conexao->query($sql);

                      if($insert==true)
                      {
                        echo 'ok';
                      }else{
                        echo 'vazio';
                      }
          }
?>