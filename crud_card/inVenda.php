<?php
include('../banco/banco.php');
    // Obtém os valores enviados
    $cli = $_POST['cli'];
    $carItems = $_POST['id'];
    $carQtd = $_POST['cQtd'];
    $qtdTotal = $_POST['qT'];
    $carTotal = $_POST['pT'];

    $carIText = '';
    $qtdsText = '';

    for ($i = 0; $i < count($carItems); $i++) {
        $carIText .= $carItems[$i];
        if ($i < count($carItems) - 1) {
            $carIText .= ', ';
        }
    }
   
    for ($i = 0; $i < count($carQtd); $i++) {
        $qtdsText .= $carQtd[$i];
        if ($i < count($carQtd) - 1) {
            $qtdsText .= ', ';
        }
    }
    // Verifica se os dados foram recebidos
    if (!empty($cli) && !empty($carTotal) && !empty($carIText) && !empty($qtdsText)) {


        $dataAtual = date('Y-m-d');
        $horaAtual = date('H:i:s');
        //criar $qtdsText e $carIText
        $sql = "INSERT INTO `tbvenda`(`codcli`, `id_pro`, `quantidades`, `data_venda`, `hora_venda`, `valor_total`) VALUES ('$cli','$carIText','$qtdsText','$dataAtual', '$horaAtual','$carTotal')";

        $insert = $conexao->query($sql);

        if($insert){
            echo ' ok ';
        }else{
            echo '1';
        }
    } else {
        // Dados inválidos ou ausentes
        echo 'Error';
    }