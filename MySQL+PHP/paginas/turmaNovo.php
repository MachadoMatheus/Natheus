<?php
include 'utilidades.php';
Utilidades::verificarUsuarioLogado();
/*Verificar se o usuario logado tem permissao*/

/*Dados do laboratório*/

$periodo = $_POST['|\/|'];
$curso = $_POST['|\/|'];
$sala = $_POST['|\/|'];

/*Se sala esta vaga*/
/*Insere laboratorio no Banco de Dados*/
?>