<html>
    <head>
        <meta charset="utf-8">
        <script src="./js/bootstrap.min.js"></script>
        <link href="../base.css" rel="stylesheet">
    </head>
    <body>
        <div class="conteudo cadastro">
            <form action="../comment.php" method="post">
                <div class="container">	
                    <h1>De cadastre como nosso cliente!</h1>
                    <label><p>Nome completo:</p></label>
                    <input class="form-control" type="text" id="txtNome" size="90">
                    <label><p>Email:</p></label>
                    <input class="form-control" type="email" id="txtEmail" size="90">
                    <label><p>Comentarios:</p></label>
                    <textarea class="form-control" type="text" id="txtComentario" row="3"></textarea>
                    <br>
                    <input type="submit" name="btn_enviar" value="Envie!">
                </div>
            </form>
        </div>
        <div>
            <br><h1>Ultimos comentarios enviados!</h1>
            <br><br>
            <p>
            <table class="table">
                <tr>
                    <th>Nome:</th>
                    <th>Comentario:</th>
                </tr>
                <?php
                    foreach($lista as &$comment) {
                    ?>
                    <tr>
                        <td><?=$comment['nome']?></td>
                        <td><?=$comment['comment']?></td>
                    </tr>
                <?php } ?>
            </table>
            </p>
        </div>
    </body>
</html>
