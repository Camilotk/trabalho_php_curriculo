<?php include_once('template/header.php'); ?>

<div class="page">
    <div class="row">
        <div class="sidebar col-sm-4">

        </div>
        <div class="candidate-info col-sm-7">
            <h2 class="nome-completo">Nome Completo</h2>
            <p>Endereço residencial</p>

            <h3>Resumo</h3>
            <p class="resumo">
                <?php
                for ($i=0; $i < 250; $i++) { 
                    echo 'a';
                }
                ?>
            </p>

            <h3>Experiência</h3>
            <div class="experiencia-card">
                <strong>Local</strong>
                <p>descrição</p>
                data inicio - data fim
                <p>local</p>
            </div>

            <h3>Formação Acadêmica</h3>
            <div class="experiencia-card">
                <strong>Intituição</strong>
                <p>local (data inicio - data fim)</p>
            </div>
        </div>
    </div>
</div>

<?php include_once('template/footer.php'); ?>