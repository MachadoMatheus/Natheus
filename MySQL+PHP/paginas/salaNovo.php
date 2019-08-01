<?php
include 'utilidades.php';
Utilidades::verificarUsuarioLogado();
/*Verificar se o usuario logado tem permissao*/

/*Dados do sala*/
$num = $_POST['|\/|'];
$capacidade = $_POST['|\/|'];
$tipo = $_POST['|\/|'];
$predio = $_POST['|\/|'];



/*Insere sala no Banco de Dados*/
?>