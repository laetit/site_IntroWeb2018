<?php
    $nome = $_REQUEST["txtNome"];
    $email = $_REQUEST["txtEmail"];
    $comentario = $_REQUEST["txtComentario"];

    $db = new PDO(
        'mysql:host=127.0.0.1;dbname=comment;charset=utf8', 'root', '');

    $sql = "SELECT * FROM comment LIMIT 5";
    $stmt = $db->query($sql);
    $lista = array();
    foreach( $stmt as $row ) {
        array_push($lista, $row);
    }
    $_SESSION['LISTA'] = $lista;

    header("Location: /components/cadastro.php");
?>