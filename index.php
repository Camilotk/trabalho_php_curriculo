<?php include_once('template/header.php'); ?>

<div class="wrapper">
    <div class="cor-fundo"></div>
    <div class="container">
        <h2 class="titulo-aplicacao">Gerador de Currículo</h2>

        <div class="quadro-informacoes informacoes-pesssoais">

            <h3 class="quadro-informacoes-titulo">Informações Pessoais</h3>
            <p class="quadro-informacoes-descricao">
                Confira se os seus dados estão corretos. Se precisar, fique à vontade para corrigir e
                complementar
                os
                dados.
            </p>

            <div class="row">
                <div class="form-group col-sm-12">
                    <label class="form-label">
                        Nome
                    </label>
                    <input class="form-control" name="nome_completo" minlenght="2" maxlenght="250" placeholder="Nome"
                        required>
                </div>

                <div class="form-group col-sm-6">
                    <label class="form-label">
                        E-mail
                    </label>
                    <input class="form-control" type="email" name="email" minlength="6" maxlength="70"
                        placeholder="E-mail" required>
                </div>

                <div class="form-group col-sm-6">
                    <label class="form-label">
                        Número
                    </label>
                    <input class="form-control" type="tel" name="telefone" minlenght="9" maxlenght="14"
                        placeholder="Telefone/Celular" required>
                </div>

                <div class="form-group col-sm-6">
                    <label class="form-label">
                        Data de Nascimento
                    </label>
                    <div class="input-date">
                        <input class="form-control" type="date" min="1929-01-01" max="2005-12-31">
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label class="form-label">
                        Genêro
                    </label>
                    <select class="form-control">
                        <option value="N" selected>Genêro</option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                        <option value="O">Outro</option>
                    </select>
                </div>
                <div class="container-botoes">

                    <input class="btn btn-primary botao-proximo" type="submit" value="Próximo">

                </div>
            </div>
        </div>

        <div class="quadro-informacoes informacoes-contato">
            <h3 class="quadro-informacoes-titulo">Informações de Contato</h3>
            <p class="quadro-informacoes-descricao">
                Para continuar o cadastro, insira sua foto e informações de contato. Antes de avançar, confira se os
                dados estão corretos.
            </p>
            <div class="row">
                <div class="form-group col-sm-12">
                    <label class="form-label">
                        Foto
                    </label>
                    <input type="file" id="file" class="form-control">
                </div>

                <h4 class="quadro-informacoes-subtitulo">Endereço</h4>

                <div class="form-group col-sm-6">
                    <label class="form-label">
                        CEP
                    </label>
                    <input class="form-control" type="text" minlenght="8" maxlenght="8" placeholder="CEP" required>
                </div>
                <div class="col-sm-6"></div>

                <div class="form-group col-sm-10">
                    <label class="form-label">
                        Endereço
                    </label>
                    <input class="form-control" type="text" minlenght="3" maxlenght="250" placeholder="Rua" required>
                </div>
                <div class="form-group col-sm-2">
                    <label class="form-label">
                        Nº
                    </label>
                    <input class="form-control" type="number" maxlenght="4" placeholder="Nº" required>
                </div>
                <div class="form-group col-sm-6">
                    <label class="form-label">
                        Bairro
                    </label>
                    <input class="form-control" type="text" minlenght="2" maxlength="250" placeholder="Bairro" required>
                </div>
                <div class="form-group col-sm-6">
                    <label class="form-label">
                        Complemento
                    </label>
                    <input class="form-control" type="text">
                </div>
                <div class="form-group col-sm-2">
                    <label class="form-label">
                        Estado
                    </label>
                    <select class="form-control">
                        <option value="RS">RS</option>
                        <option value="PR">PR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                    </select>
                </div>
                <div class="form-group col-sm-10">
                    <label class="form-label">
                        Cidade
                    </label>
                    <input class="form-control" type="text" minlength="2" maxlenght="250" placeholder="Cidade" required>
                </div>
            </div>
            <div class="container-botoes">

                <a href="#" class="link-cancelar">Voltar</a>
                <input class="btn btn-primary botao-proximo" type="submit" value="Próximo">

            </div>
        </div>

        <div class="quadro-informacoes informacoes-experiencias">
            <h3 class="quadro-informacoes-titulo">Experiências Profissionais</h3>
            <p class="quadro-informacoes-descricao">
                Nos conte sobre suas experiências profissionais. Descreva suas atividades e conquistas. Estes itens são
                bem importantes para a busca de vagas!
            </p>
            <div class="row">
                
            </div>
        </div>
    </div>
</div>

<?php include_once("template/footer.php"); ?>