<html>
    <head>
    <title>echo/print</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="css/text" href="style.css">
</head>

    <body>

        <?php

            $nomePublico = "Ruth Cardoso"; //variável global
            //====================================================================
            /*passando parametro para uma funcao*/
            //=======================================================================

            function passandoParametros($nome)
            {
                $mensagem = "(passando parametrs) boa noite";
                echo $mensagem . $nome;
            }
           
        passandoParametros($nomePublico);

        echo"<br><br>";

        //===============================================
        /*funcao que não recebe parametro (acessa global cem erro)*/
        //=================================================
        function semPassarParametro1()
        {
            $mensagem = "(Sem parametros 1)boa noite";
            echo $mensagem . $GLOBALS['nomePublico'];
            //echo $mensagem . $Globals['nomePublico'];
            //não consegue acessar a variável global "$nomePublico"
        }
        semPassarParametro1(); //rodando a funcao "semPassarParametro1"
        echo"<br><br>";
            //===============================================
        /*funcao que não recebe parametro (acessa global sem erro)*/
        //=================================================
        function semPassarParametro2()
        {
            $mensagem = "(Sem parametros 2)boa noite";
            echo $mensagem . $GLOBALS['nomePublico'];
            /* No PHP voce so consegue acessar a variável (ou variaveis)global(globais)através do "$GLOBALS" com o nome dentro de colchetes*/
        }
        semPassarParametro2(); //rodando a funcao "semPassarParametro2"
        
        ?>
        
        <?php
            echo "<br><br>";
            echo "<a href='index.php'>voltar</a>"
        ?>
    </body>
</html>