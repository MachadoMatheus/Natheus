<?php
include 'utilidades.php';
Utilidades::verificarUsuarioLogado();
/*Verificar se o usuario logado tem permissao*/

/*Dados do Supervisor*/
$nome = $_POST['|\/|'];
$empresa = $_POST['|\/|'];

/*Insere Supervisor no Banco de Dados*/
?>