<?php
require 'config/Config.php';

$sql = $con->prepare("SELECT * FROM pedidos");
    $sql->execute();
    $results = $sql->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="container">

<div class="sectionLeft">
    <div class="cardMenu">
        <span class="material-icons">article</span>
        <a href="?aba=pedidos">Adicionar Pedidos</a>
        <a href="?aba=buscapedidos">Buscar Pedidos</a>

    </div>
</div>
<div class="sectionRight">
    <h2>Últimos Pedidos</h2>
    <div class="lastRequest">

    <?php 
        foreach ($results as $result) {
    ?>
        <div class="lastRequestContent">
            <p><?= $result['titulo'] ?></p>
            <p><?=$result['departamento']?></p>
            <p><?= $result['local_request'] ?></p>
            <p><?= $result['hora_inicial'] ?></p>
            <div class="buttonAction">
                <a href="?aba=selecionapedidos&id=<?= $result['id']?>" class="selectRequest">Selecionar</a>
            </div>
        </div>
     <?php } ?>
</div>

</div>