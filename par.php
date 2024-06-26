<!DOCTYPE html>
<html>
<head>
    <title>Par ou Ímpar</title>
</head>
<body>
    <h1>Verificar se um Número é Par ou Ímpar</h1>
    <form method="post" action="">
        <label for="numero">Digite um número:</label>
        <input type="text" id="numero" name="numero" required>
        <input type="submit" value="Verificar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);
        if ($numero % 2 == 0) {
            echo "$numero é Par";
        } else {
            echo "$numero é Ímpar";
        }
    }
    ?>
</body>
</html>
