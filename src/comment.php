<?php

    $comment = $_REQUEST['txtComment'];
    $comment_detail = $_REQUEST['txtDetail'];

    $db = new PDO(
        'mysql:host=localhost;dbname=comment;charset=utf8',
        'root', '');

    $sql = "INSERT INTO comment".
            "(comment, detail)".
            "VALUES ('$comment', '$comment_detail')";

    $db->exec($sql);
?>