<?php
    $nome = $_POST['Nome'];
    $email = $_POST['Email'];
    $comentario = $_POST['Comentario'];

    $db = new PDO(
        'mysql:host=127.0.0.1;dbname=comment;charset=utf8', 'root', '');

    $sql = "INSERT INTO comment".
            "(nome, email, comment)".
            "VALUES ('$nome', '$email', '$comentario')";

    $db->exec($sql);
?>
