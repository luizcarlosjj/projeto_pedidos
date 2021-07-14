<?php

require_once '../config/Config.php';

if ($_POST) {
    $idEdit = $_POST['id'];
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $depto = $_POST['depto'];
    $local = $_POST['local'];
    $data_inicial = $_POST['data_initial'];
    $data_final = $_POST['data_final'];
    $hora_inicial = $_POST['hour_initial'];
    $hora_final= $_POST['hour_final'];
    $titulo = $_POST['title'];
    $descricao = $_POST['descricao'];

    
    $query = "UPDATE pedidos SET nome = '$nome', email = '$email', tel = '$tel', departamento = '$depto', local_request = '$local',
              data_inicial = '$data_inicial', data_final = '$data_final', hora_inicial = '$hora_inicial', 
              hora_final = '$hora_final', titulo = '$titulo', descricao = '$descricao' WHERE id = $idEdit";

    $sql = $con->prepare($query);
    $sql->execute();

    if ($sql->rowCount() >= 1) {
        header('Location: http://localhost/projeto_pedido/?aba=buscapedidos&msg=success');
    }else{
        header('Location: http://localhost/projeto_pedido/?aba=buscapedidos&msg=error');
    }


    
    
}