

<div class="requestLink">
    <a  href="?aba=home"><span class="material-icons">west</span></a>
</div>
<div class="containerRequest">

<?php if (isset($_GET['msg'])){
    if($_GET['msg'] === 'success') {?>    
    <div class="msgSuccess">
                <p class="closeMsg">X</p>
                <h3>Cadastro realizado com sucesso!</h3>
            </div>
<?php  }}?>

    <div class="requestContent">
        <h2>Pedidos</h2>
        <form method="POST" action="actions/addPedido.php" class="formRequest">
            <div class="formRequestContent">
                <div class="formRequestFirst">
                    <div class="formRequestFirstItem">
                        <p>Nome</p>
                        <span class="material-icons iconForm">person</span>
                        <input type="text" name="name" id="name" placeholder="Digite seu nome">
                    </div>
                    <div class="formRequestFirstItem">
                        <p>E-mail</p>
                        <span class="material-icons iconForm">email</span>
                        <input type="email" name="email" id="email" placeholder="Digite seu e-mail">
                    </div>
                    <div class="formRequestFirstItem">
                        <p>Telefone</p>
                        <span class="material-icons iconForm">phone</span>
                        <input type="text" name="tel" id="tel" placeholder="(99)9 9999-9999">
                    </div>
                    <div class="formRequestFirstItem">
                        <p>Departamento</p>
                        <span class="material-icons iconForm">work</span>
                        <input type="text" name="depto" id="depto" placeholder="Digite seu Departamento">
                    </div>
                </div>
                <div class="formRequestSecond">
                    <div class="formRequestFirstItem">
                        <p>Local</p>
                        <span class="material-icons iconForm">local_library</span>
                        <input type="text" name="localRequest" id="localRequest" placeholder="Digite o local">
                    </div>
                    <div class="formRequestFirstItem">
                        <p>Data Inicial</p>
                        <span class="material-icons iconForm">calendar_today</span>
                        <input type="date" class="date" name="data_initial" id="data_initial" placeholder="00/00/0000" maxlength="10">
                    </div>
                    <div class="formRequestFirstItem">
                        <p>Data Final</p>
                        <span class="material-icons iconForm">calendar_today</span>
                        <input type="date" class="date" name="data_final" id="data_final" placeholder="00/00/0000" maxlength="10">
                    </div>

                    <div class="formRequestFirstItem">
                        <p>Hora Inicial</p>
                        <span class="material-icons iconForm">schedule</span>
                        <input type="text" name="hour_initial" id="hour_initial" placeholder="00:00">
                    </div>
                </div>
                <div class="formRequestTirth">
                    <div class="formRequestFirstItem">
                        <p>Título</p>
                        <span class="material-icons iconForm">title</span>
                        <input type="text" name="title" id="title" placeholder="Digite o título do pedido">
                    </div>
                    <div class="formRequestFirstItem">
                        <p>Hora Final</p>
                        <span class="material-icons iconForm">schedule</span>
                        <input type="text" name="hour_final" id="hour_final" placeholder="00:00">
                    </div>
                    <div class="formRequestFirstItem">
                        <p>Descrição</p>
                        <textarea id="description_request" name="description_request" rows="4" placeholder="Digite a descrição"></textarea>
                    </div>
                    
                </div>
            </div>
            <div class="submitForm">
                <button id="addPedido" class="btnAddRequest">Adicionar</button>
            </div>
        </form>

    </div>
</div>


