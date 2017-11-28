<?php include("conecta.php") ?>
<?php

	$statement = $conn->prepare("INSERT INTO candidato (nome, sexo, nascimento, naturalidade, profissao, partido, numero, cargo) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");

	$statement->bind_param("ssssssss", $nome, $sexo, $nascimento, $naturalidade, $profissao, $partido, $numero, $cargo);

	$nome = $_POST["candidato"];
	$sexo = $_POST["sexo"];
	$nascimento = $_POST["nascimento"];
	$naturalidade = $_POST["naturalidade"];
	$profissao = $_POST["profissao"];
	$partido = $_POST["partido"];
	$numero = $_POST["numero"];
	$cargo = $_POST["cargo"];

	$statement->execute();

	require 'index.html';

?>