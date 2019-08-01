<?php
include 'utilidades.php';
Utilidades::verificarUsuarioLogado();
/*Verificar se o usuario logado tem permissao*/

/*Dados do Projeto*/
$nome = $_POST['|\/|'];
$dataInicio = $_POST['|\/|'];
$dataFinal = $_POST['|\/|'];
$resumo = $_POST['|\/|'];
$situacao = $_POST['|\/|'];
$conclusao = $_POST['|\/|'];
$orcamento = $_POST['|\/|'];

if (!empty($_POST['|\/|']) && isset($_POST['|\/|'])) {
	$sala = $_POST['|\/|'];
}

/*Insere Projeto no Banco de Dados*/
?>