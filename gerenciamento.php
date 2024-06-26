<!DOCTYPE html>
<html>
<head>
    <title>Gerenciamento de Publicações</title>
</head>
<body>
    <h1>Gerenciamento de Publicações</h1>
    <form method="post" action="">
        <label for="texto">Nova Publicação:</label>
        <textarea id="texto" name="texto" required></textarea><br>
        <input type="submit" name="acao" value="Salvar">
    </form>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "xxtwitter_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = htmlspecialchars($_POST["texto"]);

        if ($_POST["acao"] == "Salvar") {
            $sql = "INSERT INTO publicacoes (texto) VALUES ('$texto')";
            if ($conn->query($sql) === TRUE) {
                echo "Nova publicação salva com sucesso!";
            } else {
                echo "Erro: " . $sql . "<br>" . $conn->error;
            }
        }

        if ($_POST["acao"] == "Curtir") {
            $id = intval($_POST["id"]);
            $sql = "UPDATE publicacoes SET curtida = 1 WHERE id = $id";
            if ($conn->query($sql) === TRUE) {
                echo "Publicação curtida!";
            } else {
                echo "Erro: " . $sql . "<br>" . $conn->error;
            }
        }

        if ($_POST["acao"] == "Excluir") {
            $id = intval($_POST["id"]);
            $sql = "DELETE FROM publicacoes WHERE id = $id";
            if ($conn->query($sql) === TRUE) {
                echo "Publicação excluída!";
            } else {
                echo "Erro: " . $sql . "<br>" . $conn->error;
            }
        }
    }

    $sql = "SELECT id, texto, curtida, data_criacao FROM publicacoes";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<p><strong>Texto:</strong> " . $row["texto"] . "</p>";
            echo "<p><strong>Data:</strong> " . $row["data_criacao"] . "</p>";
            echo "<p><strong>Curtida:</strong> " . ($row["curtida"] ? "Sim" : "Não") . "</p>";
            echo "<form method='post' action=''>
                    <input type='hidden' name='id' value='" . $row["id"] . "'>
                    <input type='submit' name='acao' value='Curtir'>
                    <input type='submit' name='acao' value='Excluir'>
                  </form>";
            echo "</div><hr>";
        }
    } else {
        echo "Nenhuma publicação encontrada.";
    }

    $conn->close();
    ?>
</body>
</html>
