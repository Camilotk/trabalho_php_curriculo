<?php session_start(); include_once('template/header.php'); ?>

<div class="page">
    <div class="row">
        <div class="sidebar col-sm-4">

        </div>
        <div class="candidate-info col-sm-7">
            <h2 class="nome-completo"><?=$_SESSION['usuario']['nome_completo']?></h2>
            <p><?=$_SESSION['usuario']['endereco']?> - <?=$_SESSION['usuario']['cidade']?>/<?=$_SESSION['usuario']['uf']?></p>

            <h3>Resumo</h3>
            <p class="resumo">
                <?=$_SESSION['usuario']['resumo']?>
            </p>

            <h3>Experiência</h3>
            <?php foreach ($_SESSION['experiencias'] as $experiencia): ?>
            <div class="experiencia-card">
                <strong><?=$experiencia['empresa']?></strong>
                <p><?=$experiencia['cargo']?></p>
                <?=$experiencia['inicio']?> - <?=$experiencia['fim']?>
                <p><?=$experiencia['atividades']?></p>
            </div>
            <?php endforeach; ?>

            <h3>Formação Acadêmica</h3>
            <?php foreach ($_SESSION['formacao'] as $formacao): ?>
            <div class="experiencia-card">
                <strong><?=$formacao['instituicao']?></strong>
                <p><?=$formacao['nome']?> (<?=$formacao['inicio'] . " - " . $formacao['fim'];?>)</p>
            </div>
            <?php endforeach; ?>
            
            <h3>Atividades Extracurriculares</h3>
            <?php foreach($_SESSION['extra'] as $extracurricular): ?>
            <div class="experiencia-card">
                <strong><?=$extracurricular['nome']?></strong>
                <p><?=$extracurricular['instituicao']?> (<?=$extracurricular['inicio'] . " - " . $extracurricular['fim'];?>)</p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include_once('template/footer.php');?>