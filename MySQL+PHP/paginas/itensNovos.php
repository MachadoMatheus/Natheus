<?php
include 'utilidades.php';
Utilidades::verificarUsuarioLogado();
/*Verificar se o usuario logado tem permissao*/

/*Dados dos equipamentos*/

$numsPatrimonio = $_POST['|\/|'];

foreach ($numsPatrimonio as $num) {
	/*Insere equipamento no Banco de Dados*/
}

?>