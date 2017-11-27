<?php

    $conn = new mysqli("localhost", "root", "", "wikilitica");

    if($conn->connect_error){
        echo "Error: " . $conn->connect_error;
        exit;
    }

    // $statement = $conn->prepare("INSERT INTO usuario (nome, senha) VALUES(?, ?)");

    // $statement->bind_param("ss", $login, $pass);

    // $login = "Robert";
    // $pass = "123456";

    // $statement->execute();

//****************************

    // $resultado = $conn->query("SELECT * FROM usuario ORDER BY idUsuario");

    // $data = array();

    // while ($row = $resultado->fetch_assoc()){
    //     array_push($data, $row);
    // }

    // echo json_encode($data);

?>