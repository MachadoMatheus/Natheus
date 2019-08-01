<?php
include 'utilidades.php';
Utilidades::verificarUsuarioLogado();
/*Verificar se o usuario logado tem permissao*/

/*Dados do laboratório*/

$periodo = $_POST['|\/|'];
$modalidade = $_POST['|\/|'];
$turnos = $_POST['|\/|'];

/*Insere laboratorio no Banco de Dados*/
?>