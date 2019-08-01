<?php
include 'utilidades.php';
Utilidades::verificarUsuarioLogado();
/*Verificar se o usuario logado tem permissao*/

/*Dados do Supervisor*/
$valor = $_POST['|\/|'];
$descricao = $_POST['|\/|'];

/*Insere Gasto no Banco de Dados*/
?>