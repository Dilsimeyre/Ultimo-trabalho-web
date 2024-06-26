<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form method="post" action="">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required>
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required>
        <label for="operacao">Operação:</label>
        <select id="operacao" name="operacao">
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
            <option value="raiz">Raiz Quadrada</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = floatval($_POST["num1"]);
        $num2 = floatval($_POST["num2"]);
        $operacao = $_POST["operacao"];
        $resultado = "";

        switch ($operacao) {
            case "soma":
                $resultado = $num1 + $num2;
                break;
            case "subtracao":
                $resultado = $num1 - $num2;
                break;
            case "multiplicacao":
                $resultado = $num1 * $num2;
                break;
            case "divisao":
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    $resultado = "Divisão por zero não é permitida.";
                }
                break;
            case "raiz":
                $resultado = "Raiz Quadrada de $num1: " . sqrt($num1) . "<br>Raiz Quadrada de $num2: " . sqrt($num2);
                break;
        }

        echo "Resultado: $resultado";
    }
    ?>
</body>
</html>
