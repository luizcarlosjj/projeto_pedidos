<?php

if ($_GET) {
    if ($_GET['aba'] === 'home') {
        require_once 'base/home.php';
    } else if ($_GET['aba'] === 'pedidos') {
        require_once 'pages/pedidos.php';
    } else if($_GET['aba'] ==  'buscapedidos'){
        require_once 'pages/buscapedidos.php';
    }
}else{
    require_once "base/home.php";
}