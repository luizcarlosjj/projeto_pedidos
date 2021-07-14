<?php
date_default_timezone_set('America/Sao_Paulo');
require 'config/Config.php';

if ($_POST) {

    $sql = $con->prepare("SELECT * FROM pedidos WHERE id = :id");
    $sql->bindValue(':id', $_POST['search_request']);
    $sql->execute();
    $results = $sql->fetchAll(PDO::FETCH_ASSOC);
} else{
    $sql = $con->prepare("SELECT * FROM pedidos");
    $sql->execute();
    $results = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<div class="requestLink">
    <a  href="?aba=home"><span class="material-icons">west</span></a>
</div>

<?php if (isset($_GET['msg'])){
    if($_GET['msg'] === 'success') {?>    
    <div class="msgSuccess">
                <p class="closeMsg">X</p>
                <h3>Pedido atualizado realizado com sucesso!</h3>
            </div>
<?php  }}?>

<?php if (isset($_GET['msgRemove'])){
    if($_GET['msgRemove'] === 'success') {?>    
    <div class="msgSuccess">
                <p class="closeMsg">X</p>
                <h3>Pedido removido com sucesso!</h3>
            </div>
<?php  }}?>

<div class="containerRequest">
    <div class="requestContent">
        <h2>Buscar Pedidos</h2>

        <form method="POST" class="getRequest">
            <div class="headerGetRequest">
                <span class="material-icons">search</span>
                <input type="text" name="search_request" id="searchRequest" placeholder="Digite o ID da pessoa que deseja consultar o pedido">
            </div>
            <button class="btnSearchRequest">Pesquisar</button>
        </form>
    </div>   

</div>
<hr>



<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Departamento</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Local</th>
        <th>Data Inicial</th>
        <th>Data Final</th>
        <th>Descrição</th>
        <th>Ações</th>
    </tr>
    <?php 
        
        foreach ($results as $result) {           
        ?>
    <tr>
        <td><?= $result['id']?></td>
        <td><?= $result['nome']?></td>
        <td><?= $result['departamento']?></td>
        <td><?= $result['email']?></td>
        <td><?= $result['tel']?></td>
        <td><?= $result['local_request']?></td>
        <td><?= $result['data_inicial']?></td>
        <td><?= $result['data_final']?></td>
        <td><?= $result['descricao']?></td>
        <td>
            <a href="?aba=selecionapedidos&id=<?= $result['id']?>" id="detalhesPedido" class="btnSearchDetalhes">Detalhes</a>
            <a href="?aba=editapedidos&id=<?= $result['id']?>" id="editarPedido" class="btnEditRequest">Editar</a>
            <a href="?aba=deletapedidos&id=<?= $result['id']?>" id="deletarPedido" class="btnDeleteRequest">Excluir</a>
        </td>
       
    </tr>
    <?php }?>
              
</table>
