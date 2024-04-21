<?php

require_once("db.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio AuE Software</title>
</head>
<body>
<div class="container">
        <div class="cadastro">
            <form action="processar_cadastro.php" method="POST">
                <input type="text" name="nome" placeholder="Nome" required>
                <div class="genero-label">
                    <input type="radio" name="genero" id="masculino" value="M" required>
                    <label for="masculino">Masculino</label>
                </div>
                <div class="genero-label">
                    <input type="radio" name="genero" id="feminino" value="F" required>
                    <label for="feminino">Feminino</label>
                </div>
                <input type="text" name="cidade" placeholder="Cidade" required>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
</body>
</html>