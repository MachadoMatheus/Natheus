<?php
include 'utilidades.php';
Utilidades::verificarUsuarioLogado();
/*Verificar se o usuario logado tem permissao*/

/*Dados do Livro*/
$nome = $_POST['|\/|'];
$autor = $_POST['|\/|'];
$areaConhec = $_POST['|\/|'];
$publicadora = $_POST['|\/|'];

/*Insere Livro no Banco de Dados*/

$topicos = $_POST['|\/|'];

foreach ($$topicos as $topico) {
	/*Relaciona Livro com Tópicos, ajustar livro has topico*/
}
?>