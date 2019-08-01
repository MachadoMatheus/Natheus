<?php
include 'utilidades.php';
Utilidades::verificarUsuarioLogado();
/*Verificar se o usuario logado tem permissao*/

/*Dados do Livro*/
$nome = $_POST['|\/|'];
$autor = $_POST['|\/|'];
$areaConhec = $_POST['|\/|'];
$publicadora = $_POST['|\/|'];
$ano = $_POST['|\/|'];
$serie = $_POST['|\/|'];

/*Insere Livro no Banco de Dados*/
?>