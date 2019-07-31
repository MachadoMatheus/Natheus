<?php
/**
 *
 */
class Utilidades
{

	public function verificarUsuarioLogado()
	{
		if (!isset($_SESSION['login']) && !isset($_SESSION['senha'])) {
			unset($_SESSION['login']);
			unset($_SESSION['senha']);
			header('Location:index.php'); /*Depende da Natalinha ^^*/
		}
	}
}
?>