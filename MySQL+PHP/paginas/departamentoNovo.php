<?php
include 'utilidades.php';
Utilidades::verificarUsuarioLogado();
/*Verificar se o usuario logado tem permissao*/

/*Dados do Departamento*/
$nome = $_POST['|\/|'];
$sala = $_POST['|\/|'];
$predio = $_POST['|\/|'];


/*Insere departamento no Banco de Dados*/
?>