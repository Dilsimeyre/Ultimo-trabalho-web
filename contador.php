<!DOCTYPE html>
<html>
<head>
    <title>Contagem de Caracteres</title>
</head>
<body>
    <h1>Contagem de Caracteres</h1>
    <form method="post" action="">
        <label for="texto">Digite um texto:</label>
        <input type="text" id="texto" name="texto" required>
        <input type="submit" value="Contar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = $_POST["texto"];
        $quantidade = strlen($texto);
        echo "O texto '$texto' tem $quantidade caracteres.";
    }
    ?>
</body>
</html>
