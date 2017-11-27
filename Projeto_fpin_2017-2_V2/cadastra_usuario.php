<?php include("conecta.php") ?>
<?php

	$statement = $conn->prepare("INSERT INTO usuario (email, login, senha) VALUES(?, ?, ?)");

	$statement->bind_param("sss", $email, $login, $pass);

	$email = $_POST["email"];
	$login = $_POST["newUsername"];
	$pass = md5($_POST["newPassword"]);

	$statement->execute();

	require 'index.html';

?>