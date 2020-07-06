    <script>
        $(document).ready(function(){
            $('.visualizar').click(function(){
                $('#modal').fadeIn(1000);
           });
        });
        function visualizarContato(idContato){
            $.ajax({
                type: "POST",
                url: "db/showContact.php",
                data: {modo:'visualizar', id:idContato},
                success: function (dados){
                    $('#modalContent').html(dados);
                }
            });
        }
    </script>

    <div id="modal">
        <div id="modalContent">
                
        </div>
    </div>

    <!-- -->
    <div id="cadastro"> 
        <div id="cadastroTitulo"> 
            <h1> Cadastro de Contatos </h1>
        </div>
        <div id="cadastroInformacoes">
            <form action="<?=$action?>" name="frmCadastro" method="post" enctype="multipart/form-data">
                <div class="campos">
                    <div class="cadastroInformacoesPessoais">
                        <p> Nome: </p>
                    </div>
                    <div class="cadastroEntradaDeDados">
                        <input type="text" name="txtNome" value="" placeholder="Insira seu nome" required pattern="[a-z A-Z ã á ó õ]*">
                    </div>
                </div>
                <div class="campos">
                    <div class="cadastroInformacoesPessoais">
                        <p> Endereço: </p>
                    </div>
                    <div class="cadastroEntradaDeDados">
                        <input type="text" name="txtEndereco" value="" placeholder="Insira seu Endereço">
                    </div>
                </div>
                <div class="campos">
                    <div class="cadastroInformacoesPessoais">
                        <p> Bairro: </p>
                    </div>
                    <div class="cadastroEntradaDeDados">
                        <input type="text" name="txtBairro" value="" placeholder="Insira seu Bairro">
                    </div>
                </div>
                <div class="campos">
                    <div class="cadastroInformacoesPessoais">
                        <p> Cep: </p>
                    </div>
                    <div class="cadastroEntradaDeDados">
                        <input type="text" name="txtCep" value="" placeholder="Insira seu CEP">
                    </div>
                </div>
                <div class="campos">
                    <div class="cadastroInformacoesPessoais">
                        <p> Estados: </p>
                    </div>
                    <div class="selectEstados">
                        <select name="sltEstados">             
                        </select>
                    </div>
                </div>
                <div class="campos">
                    <div class="cadastroInformacoesPessoais">
                        <p> Email: </p>
                    </div>
                    <div class="cadastroEntradaDeDados">
                        <input type="text" name="txtEmail" value="" placeholder="Insira seu e-mail">
                    </div>
                </div>
                <div class="campos">
                    <div class="cadastroInformacoesPessoais">
                        <p> Data de Nascimento: </p>
                    </div>
                    <div class="cadastroEntradaDeDados">
                        <input type="text" name="txtNascimento" value="" placeholder="Insira a sua data de nascimento">
                    </div>
                </div>
                <div class="campos">
                    <div class="cadastroInformacoesPessoais">
                        Sexo:
                    </div>
                    <div class="cadastroEntradaDeDados">
                        <input type="radio" name="rdoSexo" value="F">Feminino.
                        <input type="radio" name="rdoSexo" value="M">Masculino.
                    </div>
                </div>
                <div class="campos">
                    <div class="cadastroInformacoesPessoais">
                        <p> Observações: </p>
                    </div>
                    <div class="cadastroEntradaDeDados">
                        <textarea name="txtObs" cols="50" rows="7"></textarea>
                    </div>
                </div>
                <div class="enviar">
                    <div class="enviar">
                        <input type="submit" name="btnEnviar" value="Salvar">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tela de consulta de dados -->
    <div id="consultaDeDados">
        <table id="tblConsulta" >
            <tr>
                <td id="tblTitulo" colspan="5">
                    <h1> Consulta de Dados.</h1>
                </td>
            </tr>
            <tr id="tblLinhas">
                <td class="tblColunas"> Nome </td>
                <td class="tblColunas"> Celular </td>
                <td class="tblColunas"> Estado </td>
                <td class="tblColunas"> Email </td>
                <td class="tblColunas"> Imagem </td>
                <td class="tblColunas"> Opções </td>
            </tr>
            <tr id="tblLinhas">
                <td class="tblColunas"></td>
                <td class="tblColunas"></td>
                <td class="tblColunas"></td>
                <td class="tblColunas"></td>
                <td class="tblColunas">
                    <img src="db/arquivos/" class="demoImg" alt="image undefined">
                </td>
                <td class="tblColunas"> 
                    <div class="tblImagens">
                        <a onclick="return confirm('Deseja realmente excluir o registro?');
                        " href="db/deleteContato.php?modo=excluir&id=&image=">
                            <div class="fechar"></div>
                            </a>
                            <div class="visualizar" onclick="visualizarContato();"></div>
                                    
                            <a href="index.php?modo=consultaEditar&id=">
                            <div class="editar"></div>
                        </a>
                    </div>
                </td>
            </tr>
                
            <tr id="tblLinhas">
                <td class="tblColunas">  </td>
                <td class="tblColunas">  </td>
                <td class="tblColunas">  </td>
                <td class="tblColunas">  </td>
                <td class="tblColunas">  </td>
                <td class="tblColunas">  </td>

            </tr>
        </table>
    </div>