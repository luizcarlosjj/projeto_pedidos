<?php
date_default_timezone_set('America/Sao_Paulo');
require_once "../config/Config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$tel = str_replace('-', '', $_POST['tel']);
$depto = $_POST['depto'];
$local = $_POST['local'];
$date_initial = date('Y-m-d');
$date_final = $_POST['data_final'];
$hour_initial = $_POST['hour_initial'];
$hour_final = $_POST['hour_final'];
$title = $_POST['title'];
$description = $_POST['description_request'];

echo "<pre>";
var_dump([
    $name,
    $email,
    $tel,
    $depto,
    $local,
    $date_initial,
    $date_final,
    $hour_initial,
    $hour_final,
    $title,
    $description
]);
echo"</pre>";

$sql = $con->prepare('INSERT INTO pedidos (nome, email, tel, departamento, local, data_initial, 
                      data_final, hora_inicial, hora_final, titulo, descricao) VALUES(:n, :em, :tel, :depto,
                      :local, :dt_in, :dt_fn, :hr_in, :hr_fn, :tt, :dsc)');
$sql->bindValue(':n', $_POST['name']);
$sql->bindValue(':em', $_POST['email']);
$sql->bindValue(':tel', $_POST['tel']);
$sql->bindValue(':depto', $_POST['depto']);
$sql->bindValue(':local', $_POST['local']);
$sql->bindValue(':dt_in', $_POST['data_initial']);
$sql->bindValue(':dt_fin', $_POST['data_final']);
$sql->bindValue(':hr_in', $_POST['hour_initial']);
$sql->bindValue(':hr_fin', $_POST['hour_final']);
$sql->bindValue(':tt', $_POST['title']);
$sql->bindValue(':dsc', $_POST['description_request']);
