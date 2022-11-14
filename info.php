<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user1";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";

      
    $sql = "INSERT INTO user (name, comment, categorie)
    VALUES ('test', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor, nemo.', 'urgent')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // $name = $_POST["name"];
    // $comment = $_POST["comment"];
    // $categorie = $_POST["categorie"];

    // $data = [
    //     "name" => $name,
    //     "comment" => $comment,
    //     "categorie" => $categorie
    // ];

    // pdo fonctionne avec l'orientée objet
    // $requete = "INSERT INTO user (name, comment, categorie) VALUES (:name, :comment, :categorie)";
    // $insert = $pdo->prepare($requete);
    // $insert->execute([$data]);

    $conn->close();

?>