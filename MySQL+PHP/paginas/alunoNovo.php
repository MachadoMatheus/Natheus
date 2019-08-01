<?php
include 'utilidades.php';
Utilidades::verificarUsuarioLogado();
/*Verificar se o usuario logado tem permissao*/

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


/*Adicionar aluno no Banco de Dados*/

/*Responsável*/

$responsavelJaExiste = $_POST['|\/|'];
if ($responsavelJaExiste == 1) {  /*o 1 Depende da Natalinha*/
	$cpfResp = $_POST['|\/|'];
	$parentesco = $_POST['|\/|'];

	/*Associar coisas no Banco de Dados*/
}

/*senha*/
$senha = 'matheus';
$hash = password_hash('math', PASSWORD_BCRYPT, [85]);
echo strlen($hash)."<br>";
echo "$hash <br> $senha <br>";

echo password_verify('atum', $hash);

?>