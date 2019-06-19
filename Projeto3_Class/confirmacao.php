<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Confirmação</title>
	<style type="text/css">
		*{
			background: #E6E6FA;
			border-radius: 5%;
		}
		fieldset{
			width: 500px;
		}
		div{
			font-family: Times New Roman;
			background: #FF69B4;
			height: 45px;
			width: 450px;

		}
	</style>
</head>
<body>
	<?php

	$nome = $_POST['name'];
	$email = $_POST['email'];
	$cpf = $_POST['cpf'];

	$numero = $_POST['numero'];
	$bandeira = $_POST['bandeira'];
	$validade = $_POST['val'];

    echo "<center>";	
    echo "<fieldset>";
	echo "<div><h1>Confirme seus dados</h1></div>";


    echo "<h2>Dados Pessoais</h2>";
	echo "<p><b>Nome completo</b></p>";
	echo "$nome";
	echo "<p><b>E-Mail</b></p>";
	echo "$email";
	echo "<p><b>CPF</b></p>";
	echo "$cpf";

	echo "<h2>Cartão de crédito</h2>";
	echo "<p><b>Número - CVV</b></p>";
	echo "$numero";
	echo "<br>";
	echo "$bandeira";
	echo "<p><b>Validade</b></p>";
	echo "$validade";	
	echo "</fielset>";
	echo "</center>";

	?>
</body>
</html>