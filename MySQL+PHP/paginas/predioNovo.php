<?php
include 'utilidades.php';
Utilidades::verificarUsuarioLogado();
/*Verificar se o usuario logado tem permissao*/

/*Dados do Predio*/
$num = $_POST['|\/|'];
$letra = $_POST['|\/|'];
$anexo = $_POST['|\/|'];
$andares = $_POST['|\/|'];
$elevador = $_POST['|\/|'];

/*Insere predio no Banco de Dados*/
?>