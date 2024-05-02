<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Calculadora</title>

</head>
<body>
    <div class="container">
    <?php
   
    if (isset($_POST["n1"]) && isset($_POST["n1"]) && isset($_POST["operacao"])) {
        
        $num1 = $_POST["n1"];
        $num2 = $_POST["n2"];
        $operacao = $_POST["operacao"];

    
        if (!is_numeric($num1) || !is_numeric($num2)) {
            echo "Por favor, insira números válidos.";
        } else {
            
            switch ($operacao) {
                case "soma":
                    $resul = $num1 + $num2;
                    break;
                case "subtracao":
                    $resul = $num1 - $num2;
                    break;
                case "multiplicacao":
                    $resul = $num1 * $num2;
                    break;
                case "divisao":
                    if ($num2 == 0) {
                        echo "Não é possível dividir por zero.";
                        exit;
                    }
                    $resul = $num1 / $num2;
                    break;
                case "exponencial":
                    $resul = pow($num1, $num2);
                    break;
                case "raiz":
                    $resul = sqrt($num1+$num2);
                    break;
                case "fatorial":
                    $resul = 1;
                    for ($i = 1; $i <= $num1+$num2; $i++) {
                        $resul *= $i;
                    }
                    break;
                default:
                    echo "Operação inválida.";
                    exit;
            }

            
            echo "<div class='resultado'>O resultado da operação é: " . number_format($resul, 2, ',', '.') . "</div>";
            
        }
    } else{
        
        echo "<div class='resultado'>Por favor, envie os números.</div>";
    }
    ?>

    
    
    <center><h1>Calculadora Projeto PHP</h1></center>

    <form action="" method="post">

    
        <center>
            
        <label for="n1">Primeiro Numero:</label><br>
        <input type="number" id="Idn1" name="n1"step="0.01"><br><br>
        
        <label for="n2">Segundo Numero:</label><br>
        <input type="number" id="Idn2" name="n2"step="0.01"><br><br>

        <button type="submit" name="operacao" value="soma">Soma</button>
        <button type="submit" name="operacao" value="subtracao">Subtração</button>
        <button type="submit" name="operacao" value="multiplicacao">Multiplicação</button>
        <button type="submit" name="operacao" value="divisao">Divisão</button>
        <button type="submit" name="operacao" value="exponencial">Exponencial</button>
        <button type="submit" name="operacao" value="raiz">Raiz</button>
        <button type="submit" name="operacao" value="fatorial">Fatorial</button>

        <br><br>
        
        </center>
        
    </form>  
    </div>
    
</body>
</html>