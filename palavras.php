<html>
    <head>
        <title>Palavras</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <?php
           $nome = " Ruth ";
           $sobreNome = " Cardoso ";
           $nacionalidade = " Brasileiro ";
           $localdoNascimento = " Araraquara, São Paulo ";
           $diadoNascimento = 19;
           $mesdoNascimento = 9;
           $anodoNascimento = 1953;

           echo " nome " .$nome .$sobreNome;    
           echo"<br><br>";//pula uma linha
           echo " nacionalidade " .$nacionalidade;
           echo"<br><br>";//pula uma linha
           echo " Local do Nascimento " .$localdoNascimento; 
           echo"<br><br>";//pula uma linha   
           echo " Data do Nascimento " .$diadoNascimento."/".$mesdoNascimento."/". $anodoNascimento;   
          

        ?>
        <?php
           echo"<br><br>";
            echo"<a href='index.php'>voltar</a>"
        ?>

    </body>
</html>