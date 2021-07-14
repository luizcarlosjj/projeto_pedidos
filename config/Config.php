<?php

const DBNAME = 'projeto_pedidos';
const HOST = 'localhost';
const USER = 'root';
const PASSWD = '';


try {
    $con = new PDO('mysql:dbname='.DBNAME.';host='.HOST, USER, PASSWD);
    return $con;

} catch (PDOException $e) {
    echo "Não foi possível conectar ao Banco. Caso o erro persistir, entrar em contato com o suporte.";
}
