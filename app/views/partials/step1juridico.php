<form id="passo1juridico">
    <div class="row" id="passo1">
        <div class="col-md-10 offset-md-1 box">
            <h1 class="title">
                Cadastro Empresarial
                <small><br>Passo 1</small>
            </h1>
            <div class="multi-step">
                <span class="step-active"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
            <div class="row p-2">
                <div class="col-md-4">
                    <label for="nome_fantasia">Nome fantasia:</label>
                    <input type="text" class="form-control" name="nome_fantasia" id="nome" required>
                </div>
                <div class="col-md-4">
                    <label for="razao_social">Razão social:</label>
                    <input type="text" class="form-control" name="razao_social" required>
                </div>
                <div class="col-md-4">
                    <label for="cnpj">CNPJ:</label>
                    <input type="text" class="form-control" id="cnpj" name="cnpj" required>
                </div>
            </div>
            <div class="row p-2">
                <div class="col-md-4">
                    <label for="nascimento">Data de nascimento:</label>
                    <input type="date" class="form-control" name="nascimento">
                </div>
                <div class="col-md-4">
                    <label for="cargo">Cargo:</label>
                    <input type="text" class="form-control" name="cargo" >
                </div>
                <div class="col-md-4">
                    <label for="email">email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="row p-2">    
                <div class="col-md-4">
                    <label for="Natureza_negocio">Natureza do negócio:</label>
                    <input type="text" class="form-control" name="Natureza_negocio" required>
                </div>
                <div class="col-md-4">
                    <label for="quem_recebe">Quem receberá a diarista:</label>
                    <input type="text" class="form-control" name="quem_recebe" required>
                </div>
                <div class="col-md-4">
                    <label for="endereco">Endereço:</label>
                    <input type="text" class="form-control" name="endereco" required>
                </div>
            </div>
            <div class="row p-2"> 
                <div class="col-md-4">
                    <label for="cep">CEP:</label>
                    <input type="text" class="form-control" name="cep" id="cep" required>
                </div>   
                <div class="col-md-4">
                    <label for="bairro">Bairro:</label>
                    <input type="text" class="form-control" name="bairro" required>
                </div>
                <div class="col-md-4">
                    <label for="cidades">Cidades:</label>
                    <input name="COD_IBGE" id="COD_IBGE" class="form-control" autocomplete=false style="display:none" >
                    <input list="cidades" name="cidade" class="form-control" autocomplete=false oninput='teste(event)'>
                    <datalist id="cidades">
                    </datalist> 
                </div>
            </div>
            <div class="row pb-4 p-2"> 
                <div class="col-md-4">
                    <label for="numero">Número:</label>
                    <input type="text" class="form-control" name="numero">
                </div>
                <div class="col-md-4">
                    <label for="referencia">Ponto de Referência:</label>
                    <input type="text" class="form-control" name="referencia">
                </div>

                <div class="col-md-4">
                    <label for="complemento">Complemento:</label>
                    <input type="text" class="form-control" name="complemento">
                </div>
            </div>
            <div class="row pb-4 p-2">
                <div class="col-md-4">
                    <button type="submit" id="botao-passo1" class="btn btn-primary" style="margin-top:32px;width:100%">Próximo</button>
                </div>
            </div>
        </div>
    </div>
</form>