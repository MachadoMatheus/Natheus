
<?php
/*Identificação*/
$nome = $_POST['|\/|'];
$cpf = $_POST['|\/|'];
$rg= $_POST['|\/|'];
$nomePai  = $_POST['|\/|'];
$nomeMae = $_POST['|\/|'];
$sexo = $_POST['|\/|'];
$dtNasc = $_POST['|\/|'];
$naturalidade = $_POST['|\/|'];
$nacionalidade = $_POST['|\/|'];

/*Cadastra identificação no Banco de Dados*/

/*Endereço*/
$cep = $_POST['|\/|'];
$endereco = $_POST['|\/|'];
$cidade = $_POST['|\/|'];
$email = $_POST['|\/|'];
$estado = $_POST['|\/|'];

/*Cadastra endereço no Banco de Dados*/

/*Telefone*/
$numeroTel = $_POST['|\/|'];
$descricao = $_POST['|\/|'];

/*Cadastra telefone no Banco de Dados*/

/*Celular*/
$numeroCel = $_POST['|\/|'];
$descricao = $_POST['|\/|'];
$autorizacao = $_POST['|\/|'];

/*Cadastra celular no Banco de Dados*/

/*Aluno*/
$renda = $_POST['|\/|'];

if (!empty($_POST['|\/|']) && isset($_POST['|\/|'])) {
	$obsEspeciais = $_POST['|\/|'];
}

$anoIngresso = $_POST['|\/|'];
$modalidade = $_POST['|\/|'];

$curso = $_POST['|\/|'];

/*Pega o numero da turma pelo curso e pelo ano*/
/*Pega também o número do aluno*/

$turma = 21;
$numAluno = 32;

$matricula = $anoIngresso.$modalidade.$curso.$turma.$numAluno;
echo "$matricula";


/*Adicionar aluno no Banco de Dados*/

/*Responsável*/

$responsavelJaExiste = $_POST['|\/|'];
if ($responsavelJaExiste == 1) {  /*o 1 Depende da Natalinha*/
	$cpfResp = $_POST['|\/|'];
	/*Associar coisas no Banco de Dados*/
} else {
	/*Identificação*/
	$nomeResp = $_POST['|\/|'];
	$cpfResp = $_POST['|\/|'];
	$rgResp = $_POST['|\/|'];
	$nomePaiResp  = $_POST['|\/|'];
	$nomeMaeResp = $_POST['|\/|'];
	$sexoResp = $_POST['|\/|'];
	$dtNascResp = $_POST['|\/|'];
	$naturalidadeResp = $_POST['|\/|'];
	$nacionalidadeResp = $_POST['|\/|'];

	/*Cadastra identificação no Banco de Dados*/

	/*Endereço*/
	$cepResp = $_POST['|\/|'];
	$enderecoResp = $_POST['|\/|'];
	$cidadeResp = $_POST['|\/|'];
	$emailResp = $_POST['|\/|'];
	$estadoResp = $_POST['|\/|'];

	/*Cadastra ndereço no Banco de Dados*/

	/*Telefone*/
	$numeroTelResp = $_POST['|\/|'];
	$descricaoResp = $_POST['|\/|'];

	/*Cadastra telefone no Banco de Dados*/

	/*Celular*/
	$numeroCel = $_POST['|\/|'];
	$descricao = $_POST['|\/|'];
	$autorizacao = $_POST['|\/|'];

	/*Cadastra celular no Banco de Dados*/

	/*Adicionar responsável no Banco de Dados*/
	/*Associar coisas no Banco de Dados*/
}

$parentesco = $_POST['|\/|'];

/*Insere parentesco na relação*/


?>