<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Feedback da Livraria Sander</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 600px;
            margin: auto;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Formulário de Feedback - Livraria Sander</h1>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="nota">Nota da Experiência (1 a 5):</label>
        <input type="number" id="nota" name="nota" min="1" max="5" required><br>

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" rows="4" required></textarea><br>

        <input type="submit" value="Enviar Feedback">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = htmlspecialchars($_POST["nome"]);
        $email = htmlspecialchars($_POST["email"]);
        $nota = intval($_POST["nota"]);
        $mensagem = htmlspecialchars($_POST["mensagem"]);

        echo "<h2>Dados Recebidos:</h2>";
        echo "<strong>Nome:</strong> " . $nome . "<br>";
        echo "<strong>Email:</strong> " . $email . "<br>";
        echo "<strong>Nota da Experiência:</strong> " . $nota . "<br>";
        echo "<strong>Mensagem:</strong> " . $mensagem . "<br>";
    }
    ?>
</body>
</html>
