<?php
date_default_timezone_set('America/Sao_Paulo');
require '../config/Config.php';


if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $depto = $_POST['depto'];
    $local = $_POST['localRequest'];
    $date_initial = $_POST['data_initial'];
    $date_final = $_POST['data_final'];
    $hour_initial = $_POST['hour_initial'];
    $hour_final = $_POST['hour_final'];
    $title = $_POST['title'];
    $description = $_POST['description_request'];

    $sql = $con->prepare("INSERT INTO pedidos(nome, email, tel, departamento, local_request, data_inicial, data_final, hora_inicial, hora_final, titulo, descricao) VALUES ('$name', '$email', '$tel', '$depto', '$local', '$date_initial', '$date_final', '$hour_initial', '$hour_final', '$title', '$description')");
    $sql->execute();

    if ($sql->rowCount() >= 1) {
        header('Location: http://localhost/projeto_pedido/?aba=pedidos&msg=success');
    }

}

