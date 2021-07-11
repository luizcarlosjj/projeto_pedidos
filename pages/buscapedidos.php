<div class="requestLink">
    <a  href="?aba=home"><span class="material-icons">west</span></a>
</div>

<div class="containerRequest">
    <div class="requestContent">
        <h2>Buscar Pedidos</h2>

        <form method="GET" class="getRequest">
            <div class="headerGetRequest">
                <span class="material-icons">search</span>
                <input type="text" name="search_request" id="searchRequest" placeholder="Digite o nome da pessoa que deseja consultar o pedido">
            </div>
            <button class="btnSearchRequest">Pesquisar</button>
        </form>
    </div>   

</div>
<hr>

<table>
    <tr>
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

    <tr>
        <td>Nome</td>
        <td>SESMT</td>
        <td>teste@teste.com.br</td>
        <td>(99)99999-9999</td>
        <td>local</td>
        <td>09/07/2021</td>
        <td>10/07/2021</td>
        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. sci dolor.</td>
        <td>
            <a href="#" id="detalhesPedido" class="btnSearchDetalhes">Detalhes</a>
            <a href="#" id="editarPedido" class="btnEditRequest">Editar</a>
            <a href="#" id="deletarPedido" class="btnDeleteRequest">Excluir</a>
        </td>
    </tr>
</table>



<div class="modal">
    <div class="modalContent">
        <form method="POST" class="formRequest">
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
                        <input type="text" name="local" id="local" placeholder="Digite o local">
                    </div>
                    <div class="formRequestFirstItem">
                        <p>Data Inicial</p>
                        <span class="material-icons iconForm">calendar_today</span>
                        <input type="text" name="data_initial" id="data_initial" placeholder="00/00/0000" maxlength="10">
                    </div>
                    <div class="formRequestFirstItem">
                        <p>Data Final</p>
                        <span class="material-icons iconForm">calendar_today</span>
                        <input type="text" name="data_final" id="data_final" placeholder="00/00/0000" maxlength="10">
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
                <button class="btnAddRequest"><span class="material-icons">print</span> Imprimir</button>
                <button class="btnEditRequest"><span class="material-icons">edit</span> Editar</button>
                <button id="cancelaModal" class="btnDeleteRequest"><span class="material-icons">cancel</span>  Cancelar</button>
            </div>
        </form>
    </div>
</div>