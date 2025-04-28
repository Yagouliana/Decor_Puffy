<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Loja Pochara</title>
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

      background: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background-color: white;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #278B5F;
    }

    .login-container input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1.5px solid #ccc;
      border-radius: 10px;
      outline: none;
      transition: 0.3s;
    }

    .login-container input:focus {
      border-color: #278B5F;
    }

    .login-container button {
      width: 100%;
      padding: 12px;
      background-color: #278B5F;
      color: white;
      font-weight: bold;
      border: none;
      border-radius: 10px;
      margin-top: 15px;
      cursor: pointer;
      transition: 0.3s;
    }

    .login-container button:hover {
      background-color: #1f6b4b;
    }

    .google-login {
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1.5px solid #ccc;
      background: white;
      color: #444;
      font-weight: 500;
      padding: 12px;
      margin-top: 20px;
      border-radius: 10px;
      cursor: pointer;
      transition: 0.3s;
    }

    .google-login:hover {
      background: #f5f5f5;
    }

    .google-login i {
      margin-right: 10px;
      font-size: 18px;
      color: #db4437;
    }

    .register {
      margin-top: 20px;
      text-align: center;
    }

    .register a {
      text-decoration: none;
      color: #278B5F;
    }

    .register a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h2>Login</h2>
    <form>
      <input type="email" placeholder="E-mail" required>
      <input type="password" placeholder="Senha" required>
      <button type="submit">Entrar</button>
    </form>

    <div class="google-login">
      <i class="fab fa-google"></i>
      Entrar com Google
    </div>

    <div class="register">
      <p>Não tem conta? <a href="#">Cadastre-se</a></p>
    </div>
  </div>

</body>
</html>
