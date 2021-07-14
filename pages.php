<?php

if ($_GET) {
    if ($_GET['aba'] === 'home') {
        require_once 'base/home.php';
    } else if ($_GET['aba'] === 'pedidos') {
        require_once 'pages/pedidos.php';
    } else if($_GET['aba'] ==  'buscapedidos'){
        require_once 'pages/buscapedidos.php';
    } else if ($_GET['aba'] == 'selecionapedidos') {
        require_once 'pages/selecionapedidos.php';
    } else if($_GET['aba'] == 'editapedidos'){
        require_once 'pages/editapedidos.php';
    } else if ($_GET['aba'] == 'deletapedidos') {
        require_once 'actions/deletePedido.php';
    } else if ($_GET['aba'] == 'printpage') {
        require_once 'pages/printPage.php';
    }
}else{
    require_once "base/home.php";
}