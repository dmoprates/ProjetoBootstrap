<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">AtionDev</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Cadastrar Equipe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Editar Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-disabled="true">Gerenciar Equipe</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="?sair" class="nav-link"><i class="bi bi-box-arrow-right"></i> Sair!</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2> <i class="bi bi-gear"></i> Painel de Controle</h2>
                </div>
                <div class="col-md-3">
                    <p>Seu último  login foi em: 18/09/2025</p>
                </div>
            </div>
        </div>
    </header>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>