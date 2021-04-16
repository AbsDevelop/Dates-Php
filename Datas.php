<!DOCTYPE html>
<html>
<head>
	<title>Date</title>	
</style>
</head>
<body>
	<h1>Calculo de Datas</h1>
	<form action="" method="get">
		<fieldset>
			<legend>Seus dados:</legend>
			<label for="nome"> Digite seu nome:</label>
				<input type="text" name="nome" size="29">
			<br>
			<label for="dataN">Digite sua data de nascimento:</label>
				<input type="date" name="dataN">
			<br>
			<input type="submit">
		</fieldset>				
	</form>	
<?php
ini_set('default_charset', 'utf-8');

//Definindo Zona de Fuso Horário
date_default_timezone_set('America/Sao_Paulo');

/*
d - número do dia no mês
D - Nome do dia na semana
m - número do mês no ano
M - nome do mês
y - ano em 2 digitos
t - ano em 4 digitos

h - número das horas em AM
H - número das horas em PM

i - mostra minutos
s - mostra segundos
a - demonstra as letras AM ou PM ao lado dos segundos
*/

if($_GET)
{
	$nome = $_GET['nome'];
	$dataN = $_GET['dataN'];

	$tempo = strtotime($dataN);

	$dAtual = date('d');
	$dNasc = date('d', $tempo);
	$mAtual = date('m');
	$mNasc = date('m', $tempo);
	$aAtual = date('Y');
	$aNasc = date('Y', $tempo);

	$ano = $aAtual - $aNasc;
	$mes = $mAtual - $mNasc;
	$dia = $dAtual - $dNasc;
	$horas = date('H');

	echo '<h3>Recebimento:</h3>';

	echo $_GET["nome"].', você tem '.$ano.' ano(s), '.$mes.' mês(es), '.$dia.' dia(s) e '.$horas.' hora(s) de idade...</h3>';
}
?>
</body>
</html>

