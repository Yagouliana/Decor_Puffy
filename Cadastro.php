<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background-image: url('img/6172659.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            width: 100%;
            background-color: #343a40;
            display: flex;
            align-items: center;
            padding: 15px 30px;
        }

        header img {
            height: 40px;
            margin-right: 15px;
        }

        header h1 {
            font-size: 20px;
            color: white;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.71);
            width: 100%;
            max-width: 400px;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin-top: 40px;
        }

        h2 {
            margin-bottom: 25px;
            color: black;
        }

        label {
            display: block;
            text-align: left;
            margin-top: 15px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            border: none;
            background-color: #eee;
            border-radius: 8px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 25px;
            flex-wrap: wrap;
        }

        .btn {
            background-color: #FFD700;
            border: none;
            padding: 12px 20px;
            color: #fff;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #e5c100;
        }

        a {
            text-decoration: none;
        }

        header .fw-bold {
            font-size: 1.5rem;
        }
    </style>
</head>

<body>

    <!-- CABEÇALHO -->
    <header>
        <img src="img/logo.png" alt="Logo">
        <h1 class="fw-bold fs-4">Decor Puffy</h1>
    </header>

    <!-- FORMULÁRIO DE CADASTRO -->
    <div class="container">
        <h2>Cadastro</h2>
        <form action="salvar_cadastro.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" placeholder="Digite seu nome..." required>

            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Digite seu email..." required>

            <label for="usuario">Usuário:</label>
            <input type="text" name="usuario" placeholder="Crie um nome de usuário..." required>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" placeholder="Crie uma senha..." required>

            <label for="confirmar_senha">Confirmar Senha:</label>
            <input type="password" name="confirmar_senha" placeholder="Confirme sua senha..." required>

            <div class="button-container">
                <button type="submit" class="btn">Cadastrar</button>
                <a href="login.php"><button type="button" class="btn">Voltar</button></a>
            </div>
        </form>
    </div>

</body>
</html>
