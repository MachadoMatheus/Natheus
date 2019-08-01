<?php
include 'utilidades.php';
Utilidades::verificarUsuarioLogado();
/*Verificar se o usuario logado tem permissao*/

/*Dados da Disciplina*/
$nome = $_POST['|\/|'];
$cargaHoraria = $_POST['|\/|'];

/*Insere disciplina no Banco de Dados*/

if (!empty($_POST['|\/|']) && isset($_POST['|\/|'])) {
	$professor = $_POST['|\/|'];
	/*Conecta Professor no Banco de Dados*/
}

if (!empty($_POST['|\/|']) && isset($_POST['|\/|'])) {
	$lab = $_POST['|\/|'];
	/*Conecta Laboratóio no Banco de Dados*/
}
?>