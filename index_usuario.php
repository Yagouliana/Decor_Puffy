<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Decor Puffy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- Cabeçalho -->
  <header class="bg-dark text-white p-3 d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center gap-2">
      <img src="img/logo.png" alt="Logo" class="logo">
      <span class="fw-bold fs-4">Decor Puffy</span>
    </div>
    <input type="text" class="form-control w-25" placeholder="Procure aqui...">
    <div class="d-flex gap-3">
      <a href="perfil_usuario.php" class="btn btn-dark" id="carrinhoBtn">
        Carrinho <i class="bi bi-cart-fill"></i>
      </a>
      <a href="login.php" class="btn btn-dark">
        Olá, Felipe <i class="bi bi-person-fill"></i>
      </a>
    </div>
  </header>

  <!-- Faixa de frete -->
  <div class="frete-banner text-center">
    Agora o frete é mais barato! Aproveite em compras acima de R$79,90!
  </div>
  <br>
  <!-- Carrossel -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/decoracao_branco.jpg" class="d-block w-100" alt="">
        <div class="carousel-caption d-none d-md-block">

          <p>Decoração Noivado</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/decoração_azul.jpg" class="d-block w-100" alt="">
        <div class="carousel-caption d-none d-md-block">
          <p>Decoração safari</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/decoração_rosa.jpg" class="d-block w-100" alt="">
        <div class="carousel-caption d-none d-md-block">
          <p>Decoração provençal de paris</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">proximo</span>
    </button>
  </div>
  <br>
  <!-- Texto abaixo do carrossel -->
  <div class="text-center py-3" style="background-color: #919191; color: #dfbf1d;">
    <p class="mb-0">Achadinhos surpreendentes aí em baixo dele Decoração de aniversário !!</p>
  </div>

  <!-- Produtos -->
  <main class="container py-5">
    <div class="row justify-content-center g-4">
      <div class="col-md-3 product-card text-center">
        <img src="img/decoracao-formula-1-decoracao-ferrari.jpg" class="img-fluid rounded" alt="Produto 1">
        <p>Decoração do Lewis Hamilton</p>
        <div class="d-flex justify-content-between">
          <span>R$678,50</span>
          <span>4,8 ⭐</span>
        </div>
      </div>

      <div class="col-md-3 product-card text-center">
        <img src="img/decoracao-snoop-alicenopaisdasmaravilhas.jpg" class="img-fluid rounded" alt="Produto 2">
        <p>Decoração da Alice no pais das maravilhas</p>
        <div class="d-flex justify-content-between">
          <span>R$620,99</span>
          <span>4,8 ⭐</span>
        </div>
      </div>

      <div class="col-md-3 product-card text-center">
        <img src="img/decoracao-homem-aranha-peter-parker.jpg" class="img-fluid rounded" alt="Produto 3">
        <p>Decoração do Homem-Aranha</p>
        <div class="d-flex justify-content-between">
          <span>R$878,00</span>
          <span>4,8 ⭐</span>
        </div>
      </div>
    </div>

    <!-- Novos Negócios abaixo dos produtos -->
    <div class="row justify-content-center g-4 mt-4">
      <div class="col-md-3 product-card text-center">
        <img src="img/festa-policia-policia.jpg" class="img-fluid rounded" alt="Negócio 1">
        <p>Decoração da Policia</p>
        <div class="d-flex justify-content-between">
          <span>R$450,90</span>
          <span>4,5 ⭐</span>
        </div>
      </div>

      <div class="col-md-3 product-card text-center">
        <img src="img/decoracao-deadpool-locacao-deadpool.jpg" class="img-fluid rounded" alt="Negócio 2">
        <p>Decoração do Deadpool</p>
        <div class="d-flex justify-content-between">
          <span>R$980,99</span>
          <span>4,7 ⭐</span>
        </div>
      </div>

      <div class="col-md-3 product-card text-center">
        <img src="img/decoracao_branco.jpg" class="img-fluid rounded" alt="Negócio 3">
        <p>Decoração Noivado</p>
        <div class="d-flex justify-content-between">
          <span>R$819,00</span>
          <span>4,9 ⭐</span>
        </div>
      </div>
    </div>

  </main>

  <!-- Modal do Carrinho -->

  <footer class="text-white bg-dark text-center p-3">
    <p>&copy; 2025 Decor Puffy. Todos os direitos reservados.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>

</html>