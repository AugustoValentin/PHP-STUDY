<html>
    <head>
    <meta charset="utf-8">
    </head>
    <body>
    <h2><center>EXERCICIO-3</center></h2>
        <hr>
        <fieldset>
            <br>
            <form action="calcmed.php" method="POST">              
                Informe o Usuário:<input type="text" name="user" size="20"maxlength="20"><br>
                Informe a senha:<input type="password" style="-webkit-text-security: square;" name="senha"size="22"maxlength="8"><br> 


                <input type="Submit">
                <input type="reset">
            </form>
            <br>
        </fieldset>
        <?php
            $login = $_POST['user'];
            $senha = $_POST['senha'];
            if( $login != etec || $senha != 123 ) {
            //Se for difirente, retonar a mensagem:
            echo "Login e senha incorretos";
            //Se for iguais os dados, corretos, aparece a página:
            }
            else{

?>
    </body>
</html>