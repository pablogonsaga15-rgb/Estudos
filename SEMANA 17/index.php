<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Saudação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>Qual é o seu nome?</h1>
        <form action="saudacao.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="campo_nome">
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>