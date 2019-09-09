<?php include_once('template/header.php'); ?>

<div class="wrapper">
    <div class="cor-fundo"></div>
    <div class="container">
        <h2 class="titulo-aplicacao">Gerador de Currículo</h2>

        <div id="basic-form" class="quadro-informacoes informacoes-pesssoais">

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

                    <input id="basic-to-information-button" class="btn btn-primary botao-proximo" type="button"
                        value="Próximo">

                </div>
            </div>
        </div>

        <div id="information-form" class="quadro-informacoes informacoes-contato escondido">
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
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
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

                <a id="information-to-basic-button" href="#" class="link-cancelar">Voltar</a>
                <input id="information-to-experience" class="btn btn-primary botao-proximo" type="button" value="Próximo">

            </div>
        </div>

        <div id="experience-form" class="quadro-informacoes informacoes-experiencias escondido">
            <h3 class="quadro-informacoes-titulo">Experiências Profissionais</h3>
            <p class="quadro-informacoes-descricao">
                Nos conte sobre suas experiências profissionais. Descreva suas atividades e conquistas. Estes itens são
                bem importantes para a busca de vagas!
            </p>
            <div class="row">
                <?php for ($i=0; $i < 3; $i++): ?>

                <div class="form-group col-sm-12">
                    <label class="form-label">
                        Nome da Empresa
                    </label>
                    <input class="form-control" type="text" minlength="2" maxlenght="250" placeholder="Nome da Empresa">
                </div>

                <div class="form-group col-sm-12">
                    <label class="form-label">
                        Cargo
                    </label>
                    <input class="form-control" type="text" minlength="2" maxlength="250" placeholder="Cargo">
                </div>

                <div class="form-group col-sm-12">
                    <label class="form-label">
                        Atividades desempenhadas (opcional)
                    </label>
                    <textarea id="descricao-experiencia-<?=$i;?>" class="form-control"></textarea>
                    <script>
                        CKEDITOR.replace('descricao-experiencia-<?=$i;?>');
                    </script>
                </div>

                <div class="form-group col-sm-6">
                    <label class="form-label">
                        Data de Inicio
                    </label>
                    <div class="input-date">
                        <input class="form-control" type="date" min="1950-01-01" max="<?=date('Y-m-d');?>">
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label class="form-label">
                        Data de Término
                    </label>
                    <div class="input-date">
                        <input class="form-control" type="date" min="1950-01-01" max="<?=date('Y-m-d');?>">
                    </div>
                </div>

                <?php if($i < 2 ): ?>
                <div class="separador"></div>
                <?php endif; ?>

                <?php endfor; ?>
            </div>
            <div class="container-botoes">

                <a id="experience-to-information" href="#" class="link-cancelar">Voltar</a>
                <input id="experience-to-formation" class="btn btn-primary botao-proximo" type="button" value="Próximo">

            </div>
        </div>

        <div id="formation-form" class="quadro-informacoes informacoes-formacao escondido">
            <h3 class="quadro-informacoes-titulo">Escolaridade</h3>
            <p class="quadro-informacoes-descricao">
                Informe seu nível de formação, nome do curso, instituição, ano de início e ano de conclusão.
            </p>
            <div class="row">
                <?php for ($i=0; $i < 3; $i++): ?>
                <div class="form-group col-sm-6">
                    <label class="form-label">
                        Formação
                    </label>
                    <select class="form-control">
                        <option value="0">Não alfabetizado</option>
                        <option value="1">Ensino Fundamental</option>
                        <option value="2">Ensino Médio</option>
                        <option value="3">Ensino Técnico</option>
                        <option value="4">Ensino Superior</option>
                        <option value="5">Pós-graduação</option>
                        <option value="6">Mestrado</option>
                        <option value="7">Doutorado</option>
                    </select>
                </div>

                <div class="form-group col-sm-6">
                    <label class="form-label">
                        Nome do curso
                    </label>
                    <input class="form-control" type="text" minlength="2" maxlenght="250" placeholder="Nome do curso">
                </div>

                <div class="form-group col-sm-12">
                    <label class="form-label">
                        Nome da Instituição
                    </label>
                    <input class="form-control" type="text" minlength="2" maxlenght="250"
                        placeholder="Nome da Instituição">
                </div>

                <div class="form-group col-sm-6">
                    <label class="form-label">
                        Data de Inicio
                    </label>
                    <div class="input-date">
                        <input class="form-control" type="date" min="1950-01-01" max="<?=date('Y-m-d');?>">
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label class="form-label">
                        Data de Término
                    </label>
                    <div class="input-date">
                        <input class="form-control" type="date" min="1950-01-01" max="<?=date('Y-m-d');?>">
                    </div>
                </div>

                <?php if($i < 2 ): ?>
                <div class="separador"></div>
                <?php endif; ?>

                <?php endfor; ?>

            </div>
            <div class="container-botoes">

                <a id="formation-to-experience" href="#" class="link-cancelar">Voltar</a>
                <input id="formation-to-extra" class="btn btn-primary botao-proximo" type="button" value="Próximo">

            </div>
        </div>

        <div id="extra-form" class="quadro-informacoes informacoes-extra escondido">
            <h3 class="quadro-informacoes-titulo">Atividades complementares</h3>
            <p class="quadro-informacoes-descricao">
                Descreva cursos de qualificação e trabalhos voluntários em que você participa ou participou.
            </p>
            <div class="row">
                <?php for ($i=0; $i < 3; $i++): ?>
                <div class="form-group col-sm-6">
                    <label class="form-label">
                        Tipo de atividade
                    </label>
                    <select class="form-control">
                        <option value="0">Tipo</option>
                        <option value="1">Curso</option>
                        <option value="2">Palestra</option>
                        <option value="3">Trabalho voluntário</option>
                    </select>
                </div>

                <div class="form-group col-sm-6">
                    <label class="form-label">
                        Nome da atividade
                    </label>
                    <input class="form-control" type="text" minlength="2" maxlenght="250"
                        placeholder="Nome da atividade">
                </div>

                <div class="form-group col-sm-12">
                    <label class="form-label">
                        Nome da Instituição
                    </label>
                    <input class="form-control" type="text" minlength="2" maxlenght="250"
                        placeholder="Nome da Instituição">
                </div>

                <div class="form-group col-sm-12">
                    <label class="form-label">
                        Atividades desempenhadas (opcional)
                    </label>
                    <textarea id="descricao-atividades-<?=$i;?>" class="form-control"></textarea>
                    <script>
                        CKEDITOR.replace("descricao-atividades-<?=$i;?>");
                    </script>
                </div>

                <div class="form-group col-sm-6">
                    <label class="form-label">
                        Data de Inicio
                    </label>
                    <div class="input-date">
                        <input class="form-control" type="date" min="1950-01-01" max="<?=date('Y-m-d');?>">
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label class="form-label">
                        Data de Término
                    </label>
                    <div class="input-date">
                        <input class="form-control" type="date" min="1950-01-01" max="<?=date('Y-m-d');?>">
                    </div>
                </div>

                <?php if($i < 2 ): ?>
                <div class="separador"></div>
                <?php endif; ?>

                <?php endfor; ?>

            </div>
            <div class="container-botoes">

                <a id="extra-to-formation" href="#" class="link-cancelar">Voltar</a>
                <input id="extras-to-habilities" class="btn btn-primary botao-proximo" type="button" value="Próximo">

            </div>
        </div>

        <div id="habilities-form" class="quadro-informacoes informacoes-habilidades escondido">
            <h3 class="quadro-informacoes-titulo">Habilidades</h3>
            <p class="quadro-informacoes-descricao">
                Para conhecermos você melhor, selecione 3 habilidades que diferenciam você dos demais candidatos.
            </p>
            <div class="row">
                <?php for ($i=0; $i < 3; $i++): ?>
                <div class="form-group col-sm-12">
                    <input class="form-control" type="text" minleght="2" maxlenght="250" placeholder="Habilidade...">
                    <?php if($i < 2 ): ?>
                    <div class="separador-habilidades"></div>
                    <?php endif; ?>
                </div>
                <?php endfor; ?>
            </div>
            <div class="container-botoes">

                <a id="habilities-to-extras" href="#" class="link-cancelar">Voltar</a>
                <input id="habilities-to-resume" class="btn btn-primary botao-proximo" type="button" value="Próximo">

            </div>
        </div>

        <div id="resume-form" class="quadro-informacoes informacoes-resumo escondido">
            <h3 class="quadro-informacoes-titulo">Resumo</h3>
            <p class="quadro-informacoes-descricao">
                Faça um breve resumo do seu currículo e de sua trajetória profissional, destacando seus diferenciais.
            </p>
            <div class="row">
                <div class="form-group col-sm-12">
                    <textarea id="descricao-resumo" class="form-control">Digite um resumo da sua vida profissional...
                    </textarea>
                </div>
            </div>
            <script>
                CKEDITOR.replace('descricao-resumo');
            </script>
            <div class="container-botoes">

                <a id="resume-to-habilities" href="#" class="link-cancelar">Voltar</a>
                <input class="btn btn-primary botao-enviar" type="submit" value="Enviar">

            </div>
        </div>

    </div>
</div>
</div>
</div>

<?php include_once("template/footer.php"); ?>