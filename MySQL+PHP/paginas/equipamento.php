<?php
include 'utilidades.php';
Utilidades::verificarUsuarioLogado();
/*Verificar se o usuario logado tem permissao*/

/*Dados do equipamento*/

$categoria = $_POST['|\/|'];
$especificãcao = $_POST['|\/|'];
$predio = $_POST['|\/|'];

$caracteristica = $_POST['|\/|'];
/*Insere equipamento no Banco de Dados*/
?>