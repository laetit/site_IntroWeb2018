<?php
    $nome = $_REQUEST['Nome'];
    $email = $_REQUEST['Email'];
    $comentario = $_REQUEST['Comentario'];

    $db = new PDO(
        'mysql:host=127.0.0.1;dbname=comment;charset=utf8', 'root', '');

    $sql = "SELECT * FROM comment LIMIT 5";
    $stmt = $db->query($sql);
    $lista = array();
    forEach( $stmt as $row ) {
        array_push($lista, $row);
    }
    $_SESSION['LISTA'] = $lista;
?>