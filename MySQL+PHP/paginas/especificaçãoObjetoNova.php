<?php
include 'utilidades.php';
Utilidades::verificarUsuarioLogado();
/*Verificar se o usuario logado tem permissao*/

/*Dados do eqspecificação*/

$categoria = $_POST['|\/|'];
$nome= $_POST['|\/|'];
$caracteristicas = $_POST['|\/|'];
/*Insere equipamento no Banco de Dados*/

foreach ($caracteristicas as $caracteristica) {
	/*Adiciona característica a especificacao*/
}
?>