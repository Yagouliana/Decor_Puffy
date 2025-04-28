<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Locação de Itens para Festas - Administrador & Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-light">
    <!-- Novo Cabeçalho -->
    <header class="bg-dark text-white p-3 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-2">
            <img src="img/logo.png" alt="Logo" class="logo" style="height: 40px;">
            <span class="fw-bold fs-4">Decor Puffy</span>
        </div>
        <input type="text" class="form-control w-25" placeholder="Procure aqui...">
        <div class="d-flex gap-3">
            <a href="login.php" class="btn btn-outline-light">
                Cadastre-se <i class="bi bi-person-fill"></i>
            </a>
        </div>
    </header>

    <div class="container py-4">
        <!-- Seção Admin: Adicionar Itens e Calcular Previsão -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header">
                        <h4 class="mb-0">Adicionar novo item de festa ��</h4>
                    </div>
                    <div class="card-body">
                        <form action="post" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="tipo" class="form-label">Tipo:</label>
                                <select name="tipo" id="tipo" class="form-select" required>
                                    <option value="" disabled selected>Selecione</option>
                                    <option value="mesa">Mesa</option>
                                    <option value="cadeira">Cadeira</option>
                                    <option value="decoracao">Decoração</option>
                                    <option value="iluminacao">Iluminação</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="codigo" class="form-label">Tema:</label>
                                <input type="text" class="form-control" name="codigo" required>
                                <div class="invalid-feedback">Informe um código válido!</div>
                            </div>
                            <div class="mb-3">
                                <label for="modelo" class="form-label">Tamanho:</label>
                                <input type="text" class="form-control" name="modelo" required>
                                <div class="invalid-feedback">Informe um nome válido!</div>
                            </div>
                            <button class="btn btn-success w-100" type="submit" name="adicionar">Adicionar Item</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header">
                        <h4 class="mb-0">Calcular previsão de aluguel 💰</h4>
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
                                <label for="quantidade" class="form-label">Quantidade de dias:</label>
                                <input type="number" class="form-control" name="dias_calculo" value="1" required>
                            </div>
                            <button class="btn btn-success w-100" type="submit" name="calcular">Calcular</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Seção Usuário: Tabela de Itens -->
        <div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Itens Disponíveis 📝</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead style="background-color: #007bff; color: white;">
                            <tr>
                                <th>Imagem</th>  <!-- Nova coluna de imagem -->
                                <th>Tipo</th>
                                <th>Tema</th>
                                <th>Tamanho</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Linha para Item Disponível -->
                            <tr style="background-color: #e9f7ef;">
                                <td><img src="caminho/para/imagem1.jpg" alt="Mickey Safari" style="width: 50px; height: 50px; object-fit: cover;"></td> <!-- Imagem do produto -->
                                <td>Aniversário</td>
                                <td>Mickey Safari</td>
                                <td>A</td>
                                <td><span class="badge bg-success">Disponível ✅</span></td>
                                <td>
                                    <form action="post" class="btn-group-actions d-flex gap-2">
                                        <input type="number" name="dias" class="form-control" value="1" min="1" required>
                                        <button class="btn btn-primary btn-sm" name="alugar">Alugar</button>
                                        <button class="btn btn-danger btn-sm" name="devolver">Devolver</button>
                                        <button class="btn btn-warning btn-sm" name="excluir">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                            <!-- Linha para Item Alugado -->
                            <tr style="background-color: #fff3cd;">
                                <td><img src="img/decoracao-homem-aranha-peter-parker.jpg" alt="Decoração Safari" style="width: 50px; height: 50px; object-fit: cover;"></td> <!-- Imagem do produto -->
                                <td>Aniversário</td>
                                <td>Decoração safari</td>
                                <td>L</td>
                                <td><span class="badge bg-warning">Alugada ❕</span></td>
                                <td>
                                    <form action="post" class="btn-group-actions d-flex gap-2">
                                        <input type="number" name="dias" class="form-control" value="1" min="1" required>
                                        <button class="btn btn-primary btn-sm" name="alugar">Alugar</button>
                                        <button class="btn btn-danger btn-sm" name="devolver">Devolver</button>
                                        <button class="btn btn-warning btn-sm" name="excluir">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                            <!-- Linha para Outro Item Disponível -->
                            <tr style="background-color: #e9f7ef;">
                                <td><img src="caminho/para/imagem3.jpg" alt="Decoração Noivado" style="width: 50px; height: 50px; object-fit: cover;"></td> <!-- Imagem do produto -->
                                <td>Casamento</td>
                                <td>Decoração noivado</td>
                                <td>C</td>
                                <td><span class="badge bg-success">Disponível ✅</span></td>
                                <td>
                                    <form action="post" class="btn-group-actions d-flex gap-2">
                                        <input type="number" name="dias" class="form-control" value="1" min="1" required>
                                        <button class="btn btn-primary btn-sm" name="alugar">Alugar</button>
                                        <button class="btn btn-danger btn-sm" name="devolver">Devolver</button>
                                        <button class="btn btn-warning btn-sm" name="excluir">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
</body>
