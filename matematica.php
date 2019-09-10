<html>
    <head>
    <title>matematica</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="css/text" href="style.css">
</head>

    <body>
        <?php
            echo "<form>";
            echo $num1="<input type="0">";
            echo $num2="<input type="0">";
            echo "</form>";
            //verificando se os valores foram mandados pela URL do navegador
            //a funcao isset (do proprio php)verifica se eles foram inicializados
            if (isset($_GET['numero1']) )
            {
                $num1=$_GET['numero1'];
            }
            //verificando se os valores foram mandados pela URL do navegador
            if (isset($_GET['numero2']))
            {
                $num2=$_GET['numero2'];
            }
            $soma = $num1 + $num2; //ex 3+2=5
            $subtracao = $num1 - $num2; //ex 3-2=5
            $divisao = $num1 / $num2; //ex 3/2=5
            $resto = $num1 % $num2; //ex 3%2=5

            echo"<table border='1'>";
            echo"<tr>";
                echo"<td>".$num1." + ".$num2. " = </td>";
                echo"<td>".$soma." </td>";
            echo"<tr>";
                echo"<td>".$num1." - ".$num2. " = </td>";
                echo"<td>".$subtracao. "</td>";
            echo"<tr>";
                echo"<td>".$num1." / ".$num2. " = </td>";
                echo"<td>".$divisao. "</td>";
            echo"<tr>";
                echo"<td>".$num1." % ".$num2. " = </td>";
                echo"<td>".$resto." </td>";
          echo"</table>";
            
        ?>
        
        <?php
            echo "<br><br>";
            echo "<a href='index.php'>voltar</a>"
        ?>
    </body>
</html>