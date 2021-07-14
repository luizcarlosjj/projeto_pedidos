<?php

require 'config/Config.php';

if ($_GET) {
    $idPedido = $_GET['id'];

    $sql = $con->prepare('SELECT * FROM pedidos WHERE id = :id');
    $sql->bindValue(':id', $idPedido);
    $sql->execute();
    $result = $sql->fetch(PDO::FETCH_ASSOC);

}
?>
<div class="requestContent">
<form method="POST" class="formRequest" action="actions/editPedido.php">
    <div class="formRequestContent">
    <div class="formRequestFirst">
        <div class="formRequestFirstItem">
            <p>ID</p>
            <span class="material-icons iconForm">person</span>
            <input type="text" name="id" id="id" value='<?= $result['id'] ?>'>
        </div>
        <div class="formRequestFirstItem">
            <p>Nome</p>
            <span class="material-icons iconForm">person</span>
            <input type="text" name="name" id="name" value='<?= $result['nome'] ?>'>
        </div>
        <div class="formRequestFirstItem">
            <p>E-mail</p>
            <span class="material-icons iconForm">email</span>
            <input type="email" name="email" id="email"  value='<?= $result['email'] ?>'>
        </div>
        <div class="formRequestFirstItem">
            <p>Telefone</p>
            <span class="material-icons iconForm">phone</span>
            <input type="text" name="tel" id="tel"  value='<?= $result['tel'] ?>'>
        </div>
        <div class="formRequestFirstItem">
            <p>Departamento</p>
            <span class="material-icons iconForm">work</span>
            <input type="text" name="depto" id="depto" value='<?= $result['departamento'] ?>' >
        </div>
    </div>
    <div class="formRequestSecond">
        <div class="formRequestFirstItem">
            <p>Local</p>
            <span class="material-icons iconForm">local_library</span>
            <input type="text" name="local" id="local"  value='<?= $result['local_request'] ?>'>
        </div>
        <div class="formRequestFirstItem">
            <p>Data Inicial</p>
            <span class="material-icons iconForm">calendar_today</span>
            <input type="date" name="data_initial" id="data_initial" maxlength="10"  value='<?= $result['data_inicial'] ?>'>
        </div>
        <div class="formRequestFirstItem">
            <p>Data Final</p>
            <span class="material-icons iconForm">calendar_today</span>
            <input type="date" name="data_final" id="data_final" maxlength="10"  value='<?= $result['data_final'] ?>'>
        </div>

        <div class="formRequestFirstItem">
            <p>Hora Inicial</p>
            <span class="material-icons iconForm">schedule</span>
            <input type="text" name="hour_initial" id="hour_initial" value='<?= $result['hora_inicial'] ?>'>
        </div>
    </div>
    <div class="formRequestTirth">
    <div class="formRequestFirstItem">
            <p>Título</p>
            <span class="material-icons iconForm">title</span>
            <input type="text" name="title" id="title"  value='<?= $result['titulo'] ?>'>
        </div>
        <div class="formRequestFirstItem">
            <p>Hora Final</p>
            <span class="material-icons iconForm">schedule</span>
            <input type="text" name="hour_final" id="hour_final" value='<?= $result['hora_final'] ?>'>
        </div>
        <div class="formRequestFirstItem">
            <p>Descrição</p>
            <textarea name="descricao"><?= $result['descricao'] ?></textarea>
        </div>
        
    </div>
    </div>
    <div class="submitForm">
    <button class="btnAddRequest"><span class="material-icons">edit</span> Editar</button>
    <a href="?aba=buscapedidos" id="cancelaModal" class="btnDeleteRequest"><span class="material-icons">cancel</span>  Retornar</a>
</div>
</form>

</div>