<!DOCTYPE html>
<html>
<head>
    <title>Múltiplos de Números</title>
</head>
<body>
    <h1>Números Múltiplos de 3 e 5</h1>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "$i é múltiplo de 3 e 5<br>";
        } elseif ($i % 3 == 0) {
            echo "$i é múltiplo de 3<br>";
        } elseif ($i % 5 == 0) {
            echo "$i é múltiplo de 5<br>";
        }
    }
    ?>
</body>
</html>
