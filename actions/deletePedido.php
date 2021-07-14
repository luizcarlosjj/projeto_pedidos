<?php

require_once 'config/Config.php';

if($_GET){
    $idRemove = $_GET['id'];

    $sql = $con->prepare("DELETE FROM pedidos WHERE id = $idRemove");
    $sql->execute();

    if ($sql->rowCount() >=1 ) {
       header('Location: http://localhost/projeto_pedido/?aba=buscapedidos&msgRemove=success');
    }
    
}