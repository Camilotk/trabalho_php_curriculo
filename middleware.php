<?php
/* FUNÇÕES */
function retorna_formacao($value) {
    if($value == "0") return "Não alfabetizado";
    if($value == "1") return "Ensino Fundamental";
    if($value == "2") return "Ensino Médio";
    if($value == "3") return "Ensino Técnico";
    if($value == "4") return "Ensino Superior";
    if($value == "5") return "Pós-graduação";
    if($value == "6") return "Mestrado";
    if($value == "7") return "Doutorado";
    return null;
}

function retorna_extra($value) {
    if($value == "1") return "Curso";
    if($value == "2") return "Palestra";
    if($value == "3") return "Trabalho voluntário";
    return null;
}

/* PROPRIEDADES */
$usuario['nome_completo'] = $_POST['nome_completo'];
$usuario['email'] = $_POST['email'];
$usuario['telefone'] = $_POST['telefone'];
$usuario['data_nascimento'] = date("d-m-Y", strtotime($_POST['nascimento']));
$usuario['cep'] = $_POST['cep'];
$usuario['cidade'] = $_POST['cidade'];
$usuario['uf'] = $_POST['uf'];
$usuario['resumo'] = $_POST['resumo'];

/* GÊNERO */
if(isset($_POST['genero'])) {
    if($_POST['genero'] === "M") {
        $usuario['genero'] = "Masculino";
    } else if ($_POST['genero'] === "F") {
        $usuario['genero'] = "Feminino";
    } else {
        $usuario['genero'] = "Outro";
    }
}

/* ENDEREÇO */
if(isset($_POST['complemento'])) {
    $usuario['endereco'] = $_POST['endereco'] . ", Nº" . $_POST['numero'] . " " 
                            . $_POST['bairro'] . " " . $_POST['complemento'];
} else {
    $usuario['endereco'] = $_POST['endereco'] . ", Nº" . $_POST['numero'] . " " . $_POST['bairro'];
}

/* EXPERIENCIA PROFISSIONAL */

// Cria as expressões que armazenam se os formulários foram preenchidos
$exp1 = isset($_POST['experiencia-1'], $_POST['cargo-1'], $_POST['data-inicio-trabalho-1'], $_POST['data-final-trabalho-1']);
$exp2 = isset($_POST['experiencia-2'], $_POST['cargo-2'], $_POST['data-inicio-trabalho-2'], $_POST['data-final-trabalho-2']);
$exp3 = isset($_POST['experiencia-3'], $_POST['cargo-3'], $_POST['data-inicio-trabalho-3'], $_POST['data-final-trabalho-3']);

// Experiencia 1
if ($exp1)
{
    $experiencias[1]['empresa'] = $_POST['experiencia-1'];
    $experiencias[1]['cargo'] = $_POST['cargo-1'];
    $experiencias[1]['atividades'] = ($_POST['atividades-1'])? $_POST['atividades-1'] : " ";
    $experiencias[1]['inicio'] = date("d-m-Y", strtotime($_POST['data-inicio-trabalho-1']));
    $experiencias[1]['fim'] = date("d-m-Y", strtotime($_POST['data-final-trabalho-1']));
}

// Experiencia 2
if ($exp2)
{
    $experiencias[2]['empresa'] = $_POST['experiencia-2'];
    $experiencias[2]['cargo'] = $_POST['cargo-2'];
    $experiencias[2]['atividades'] = ($_POST['atividades-2'])? $_POST['atividades-2'] : " ";
    $experiencias[2]['inicio'] = date("d-m-Y", strtotime($_POST['data-inicio-trabalho-2']));
    $experiencias[2]['fim'] = date("d-m-Y", strtotime($_POST['data-final-trabalho-2']));
}

// Experiencia 3
if ($exp3)
{
    $experiencias[3]['empresa'] = $_POST['experiencia-3'];
    $experiencias[3]['cargo'] = $_POST['cargo-3'];
    $experiencias[3]['atividades'] = ($_POST['atividades-3'])? $_POST['atividades-3'] : " ";
    $experiencias[3]['inicio'] = date("d-m-Y", strtotime($_POST['data-inicio-trabalho-3']));
    $experiencias[3]['fim'] = date("d-m-Y", strtotime($_POST['data-final-trabalho-3']));
}

/* FORMAÇÃO */

// Cria as expressões que armazenam se os formulários foram preenchidos
$exp1 = isset($_POST['nivel-formacao-1'], $_POST['nome-curso-1'], $_POST['nome-instituicao-1'], $_POST['data-inicio-curso-1'], $_POST['data-final-curso-1']);
$exp2 = isset($_POST['nivel-formacao-2'], $_POST['nome-curso-2'], $_POST['nome-instituicao-2'], $_POST['data-inicio-curso-2'], $_POST['data-final-curso-2']);
$exp3 = isset($_POST['nivel-formacao-3'], $_POST['nome-curso-3'], $_POST['nome-instituicao-3'], $_POST['data-inicio-curso-3'], $_POST['data-final-curso-3']);

if ($exp1) 
{
    $formacao[1]['nivel'] = retorna_formacao($_POST['nivel-formacao-1']);
    $formacao[1]['nome'] = $_POST['nome-curso-1'];
    $formacao[1]['instituicao'] = $_POST['nome-instituicao-1'];
    $formacao[1]['inicio'] = date("d-m-Y", strtotime($_POST['data-inicio-curso-1']));
    $formacao[1]['fim'] = date("d-m-Y", strtotime($_POST['data-final-curso-1']));
}

if ($exp2) 
{
    $formacao[2]['nivel'] = retorna_formacao($_POST['nivel-formacao-2']);
    $formacao[2]['nome'] = $_POST['nome-curso-2'];
    $formacao[2]['instituicao'] = $_POST['nome-instituicao-2'];
    $formacao[2]['inicio'] = date("d-m-Y", strtotime($_POST['data-inicio-curso-2']));
    $formacao[2]['fim'] = date("d-m-Y", strtotime($_POST['data-final-curso-2']));
}

if ($exp3) 
{
    $formacao[3]['nivel'] = retorna_formacao($_POST['nivel-formacao-3']);
    $formacao[3]['nome'] = $_POST['nome-curso-3'];
    $formacao[3]['instituicao'] = $_POST['nome-instituicao-3'];
    $formacao[3]['inicio'] = date("d-m-Y", strtotime($_POST['data-inicio-curso-3']));
    $formacao[3]['fim'] = date("d-m-Y", strtotime($_POST['data-final-curso-3']));
}

/* EXTRA */
$exp1 = isset($_POST['tipo-extra-1'], $_POST['nome-atividade-1'], $_POST['nome-instituicao-1'], $_POST['descricao-atividades-1'],
              $_POST['data-inicio-atividade-1'], $_POST['data-final-atividade-1']);
$exp2 = isset($_POST['tipo-extra-2'], $_POST['nome-atividade-2'], $_POST['nome-instituicao-2'], $_POST['descricao-atividades-2'],
              $_POST['data-inicio-atividade-2'], $_POST['data-final-atividade-2']);
$exp3 = isset($_POST['tipo-extra-3'], $_POST['nome-atividade-3'], $_POST['nome-instituicao-3'], $_POST['descricao-atividades-3'],
              $_POST['data-inicio-atividade-3'], $_POST['data-final-atividade-3']);

if($exp1)
{
    $atividades_extracurriculares[1]['tipo'] = retorna_extra($_POST['tipo-extra-1']);
    $atividades_extracurriculares[1]['nome'] = $_POST['nome-atividade-1'];
    $atividades_extracurriculares[1]['instituicao'] = $_POST['nome-instituicao-1'];
    $atividades_extracurriculares[1]['inicio'] = $_POST['data-inicio-atividade-1'];
    $atividades_extracurriculares[1]['fim'] = $_POST['data-final-atividade-1'];
}

if($exp2)
{
    $atividades_extracurriculares[2]['tipo'] = retorna_extra($_POST['tipo-extra-2']);
    $atividades_extracurriculares[2]['nome'] = $_POST['nome-atividade-2'];
    $atividades_extracurriculares[2]['instituicao'] = $_POST['nome-instituicao-2'];
    $atividades_extracurriculares[2]['inicio'] = $_POST['data-inicio-atividade-2'];
    $atividades_extracurriculares[2]['fim'] = $_POST['data-final-atividade-2'];
}

if($exp3)
{
    $atividades_extracurriculares[3]['tipo'] = retorna_extra($_POST['tipo-extra-3']);
    $atividades_extracurriculares[3]['nome'] = $_POST['nome-atividade-3'];
    $atividades_extracurriculares[3]['instituicao'] = $_POST['nome-instituicao-3'];
    $atividades_extracurriculares[3]['inicio'] = $_POST['data-inicio-atividade-3'];
    $atividades_extracurriculares[3]['fim'] = $_POST['data-final-atividade-3'];
}

/* HABILIDADES */

if(isset($_POST['habilidade-1'])) $habilidade[1] = $_POST['habilidade-1'];
if(isset($_POST['habilidade-2'])) $habilidade[2] = $_POST['habilidade-2'];
if(isset($_POST['habilidade-3'])) $habilidade[3] = $_POST['habilidade-3'];

