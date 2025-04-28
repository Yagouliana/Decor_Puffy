<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>USER - Sistema de Locação de Itens para Festas</title>
  <!-- Link do bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Link dos ícones -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <!-- link do css -->
  <link rel="stylesheet" href="style.css" />
  <style>
    body {
      background-color: #f8f9fa;
    }

    .logo {
      width: 50px;
      height: 50px;
    }

    .card-header {
      background-color: #343a40;
      color: white;
    }

    .card-body {
      background-color: #ffffff;
      border-top: 1px solid #ddd;
    }

    .table thead {
      background-color: #007bff;
      color: white;
    }

    .table-hover tbody tr:hover {
      background-color: #f1f1f1;
    }

    .badge {
      font-size: 14px;
    }

    .btn-primary,
    .btn-info,
    .btn-danger,
    .btn-success {
      border-radius: 20px;
      padding: 10px 20px;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-info {
      background-color: #17a2b8;
      border-color: #17a2b8;
    }

    .btn-danger {
      background-color: #dc3545;
      border-color: #dc3545;
    }

    .btn-success {
      background-color: #28a745;
      border-color: #28a745;
    }

    .user-info .welcome-text {
      font-size: 16px;
    }
    .table img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 8px;
}

  </style>
</head>

<body>
  <!-- Cabeçalho novo -->
  <header class="bg-dark text-white p-3 d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center gap-2">
      <img src="img/logo.png" alt="Logo" class="logo" />
      <span class="fw-bold fs-4">Decor Puffy</span>
    </div>
    <input type="text" class="form-control w-25" placeholder="Procure aqui..." />
    <div class="d-flex gap-3">
      <a href="login.php" class="btn btn-dark">
        Cadastre-se <i class="bi bi-person-fill"></i>
      </a>
    </div>
  </header>

  <div class="container py-4">
    <!-- Seção de Itens: Exibição e Aluguel -->
    <div class="row mb-4">
      <div class="col-md-12">
        <div class="card shadow-lg">
          <div class="card-header">
            <h4 class="mb-0">Itens Disponíveis 📝</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Imagem</th>
            <th>Tipo</th>
            <th>Tema</th>
            <th>Tamanho</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><img src="img/decoracao_branco.jpg" alt="Mickey Safari" width="80"></td>
            <td>Aniversário</td>
            <td>Mickey Safari</td>
            <td>A</td>
            <td><span class="badge bg-success">Disponível ✅</span></td>
            <td>
                <form action="post" class="d-flex gap-2">
                    <input type="number" name="dias" class="form-control" value="1" min="1" required>
                    <button class="btn btn-info btn-sm" name="alugar">Alugar</button>
                </form>
            </td>
        </tr>
        <tr>
            <td><img src="img/decoracao-noivado-locacao-moveis-para-festa.jpg" alt="Decoração noivado" width="80"></td>
            <td>Casamento</td>
            <td>Decoração noivado</td>
            <td>C</td>
            <td><span class="badge bg-warning">Alugada ❕</span></td>
            <td>
                <button class="btn btn-danger btn-sm" name="alugar">Alugar</button>
            </td>
        </tr>
        <tr>
            <td><img src="img/decoracao-snoop-alicenopaisdasmaravilhas.jpg" alt="Decoração safari" width="80"></td>
            <td>Aniversário</td>
            <td>Decoração safari</td>
            <td>L</td>
            <td><span class="badge bg-success">Disponível ✅</span></td>
            <td>
                <button class="btn btn-info btn-sm" name="alugar">Alugar</button>
            </td>
        </tr>
    </tbody>
</table>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Seção de Calcular Previsão -->
    <div class="row mb-4">
      <div class="col-md-12">
        <div class="card shadow-lg">
          <div class="card-header">
            <h4 class="mb-0">Calcular Previsão de Aluguel 💰</h4>
          </div>
          <div class="card-body">
            <form action="post" class="needs-validation" novalidate>
              <div class="mb-3">
                <label for="tipo" class="form-label">Tipo:</label>
                <select name="tipo" id="tipo" class="form-select" required>
                  <option value="mesa">Aniversário</option>
                  <option value="cadeira">Casamento</option>
                  <option value="decoracao">Festas</option>
                  <option value="iluminacao">Materiais de Artesanato</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="codigo" class="form-label">Tema:</label>
                <input type="text" class="form-control" name="codigo" required />
                <div class="invalid-feedback">Informe um código válido!</div>
              </div>
              <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade de dias:</label>
                <input type="number" class="form-control" name="dias_calculo" value="1" required />
              </div>
              <div class="mb-3">
                <label for="tipo" class="form-label">Tamanho:</label>
                <select name="tipo" id="tipo" class="form-select" required>
                  <option value="" disabled selected>Selecione</option>
                  <option value="mesa">A</option>
                  <option value="cadeira">L</option>
                  <option value="decoracao">C</option>
                </select>
              </div>
              <button class="btn btn-success w-100" type="submit" name="calcular">
                Calcular
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Link do Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
