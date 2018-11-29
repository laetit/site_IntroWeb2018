<?php
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $comment = $_POST['txtComentario'];

    $db = new PDO(
        'mysql:host=localhost;dbname=comment;charset=utf8', 'root', '');

    $sql = "INSERT INTO comment".
            "(nome, email, comment)".
            "VALUES ('$nome', '$email', '$comment')";

    $db->exec($sql);
?>
