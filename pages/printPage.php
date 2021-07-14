<?php
require __DIR__.'/../config/Config.php';
require __DIR__.'/../vendor/autoload.php';
$id = $_GET['id'];
$sql = $con->prepare("SELECT * FROM pedidos WHERE id = $id");
$sql->execute();

$result = $sql->fetch(PDO::FETCH_ASSOC);

$id = $result['id'];
$nome = $result['nome'];
$email = $result['email'];
$tel = $result['tel'];
$depto = $result['departamento'];
$local = $result['local_request'];
$data_inicial = $result['data_inicial'];
$data_final = $result['data_final'];
$hora_inicial = $result['hora_inicial'];
$hora_final = $result['hora_final'];
$titulo = $result['titulo'];
$descricao = $result['descricao'];

$style = file_get_contents(__DIR__."/../style/style.css");

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($style,1);
$mpdf->WriteHTML("
<style>
    #foto{
        float: left;
        width: 30%;
        height: 10%;
        background-size: contain;
        background: url('http://localhost/projeto_pedido/logo.jpg);
        background-repeat: no-repeat;    
        background-position: center;
    }
</style>
<div class='relHeader'>
        <div id='foto'></div>
        <h1>{$titulo}</h1>
    </div>
    
    <div class='initialBody'>
        <h4>Título do Pedido:</h4>
        <p>{$titulo}</p>
    </div>
    <div class='sectionRelBody'>
        <div>
            <h4>ID</h4>
            <p>{$id}</p>
        </div>
        <div>
            <h4>Nome</h4>
            <p>{$nome}</p>
        </div>
    </div>

    <div class='sectionBody'>
        <div class='sectionBodyContent'>
            <h4>Departamento</h4>
            <p>{$depto}</p>
            <h4>Telefone</h4>
            <p>{$tel}</p>
            <h4>Data Inicial</h4>
            <p>{$data_inicial}</p>
            <h4>Hora Inicial</h4>
            <p>{$hora_inicial}</p>
        </div>
        <div class='sectionBodyContent'>

            <h4>Email</h4>
            <p>{$email}</p>
            <h4>Local</h4>
            <p>{$local}</p>
            <h4>Data Final</h4>
            <p>{$data_final}</p>
            <h4>Hora Final</h4>
            <p>{$hora_final}</p>
        </div>
    </div>

    <div class='footerRel'>
        <h4>Descrição</h4>
        <p>{$descricao}</p>
    </div>
");
$mpdf->Output();

