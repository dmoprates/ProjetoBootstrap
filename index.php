<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">AtionDev</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="box">
        <section class="banner">
            <div class="overlay"></div>
            <div class="container chamada-banner">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>AtionDev</h2>
                        <p>Empresa voltada para desenvolvimento WEB</p>
                        <a href="">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </section><!--banner-->
        <section class="cadastro-lead">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <h2> <i class="bi bi-envelope-check-fill"></i> Entre na nossa lista</h2>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="nome"><input type="submit" value="Enviar">
                    </div>
                </div>
            </div>
        </section><!--cadastro-lead-->
        <section class="depoimento text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Depoimentos</h2>
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae. Aliqua et ea
                                deserunt mollit exercitation consequat et mollit non consectetur consectetur laborum
                                pariatur. Lorem velit aliquip incididunt qui mollit fugiat excepteur. Proident in
                                aliquip eiusmod in ad magna sit do minim officia est. Laborum sunt nulla in magna id.
                                Nisi aute veniam irure minim cillum non sint eu sint magna sunt.</p>
                        </blockquote>
                    </div>
                </div>
            </div><!--container-->
        </section><!--depoimento-->
        <section class="diferenciais text-center">
            <h2>Conheça nossa empresa</h2>
            <div class="container diferenciais-container">
                <div class="row">
                    <div class="col-md-4">
                        <h3><i class="bi bi-backpack3-fill"></i></h3>
                        <h2>Diferencial #1</h2>
                        <p>Ipsum laborum ipsum magna enim cupidatat eu duis aute sit id sint nulla. Irure eiusmod elit
                            officia pariatur consequat eu voluptate quis non ipsum aliquip. Officia nostrud anim tempor
                            eu cillum labore pariatur voluptate eu Lorem qui veniam.</p>
                    </div>
                    <div class="col-md-4">
                        <h3><i class="bi bi-award-fill"></i></h3>
                        <h2>Diferencial #2</h2>
                        <p>Ipsum laborum ipsum magna enim cupidatat eu duis aute sit id sint nulla. Irure eiusmod elit
                            officia pariatur consequat eu voluptate quis non ipsum aliquip. Officia nostrud anim tempor
                            eu cillum labore pariatur voluptate eu Lorem qui veniam.</p>
                    </div>
                    <div class="col-md-4">
                        <h3><i class="bi bi-balloon-fill"></i></h3>
                        <h2>Diferencial #3</h2>
                        <p>Ipsum laborum ipsum magna enim cupidatat eu duis aute sit id sint nulla. Irure eiusmod elit
                            officia pariatur consequat eu voluptate quis non ipsum aliquip. Officia nostrud anim tempor
                            eu cillum labore pariatur voluptate eu Lorem qui veniam.</p>
                    </div>
                </div>
            </div><!--container-->
        </section><!--diferenciais-->
        <section class="equipe">
            <h2>Equipe</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="equipe-single">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="user-picture">
                                        <div class="user-picture-child">
                                        </div><!--user-picture-child-->
                                    </div><!--user-picture-->
                                </div>
                                <div class="col-md-10 col-md-offset-1">
                                    <h3>Lorem Ipsum</h3>
                                    <p>Nisi velit ullamco enim non excepteur cupidatat duis voluptate ex esse ut
                                        nostrud irure. Aute fugiat laborum ullamco magna nostrud tempor labore elit
                                        amet laboris elit. Sint laboris et nostrud laborum ipsum Lorem incididunt
                                        dolor.</p>
                                </div>
                            </div>
                        </div><!--equipe-single-->
                    </div>
                    <div class="col-md-6">
                        <div class="equipe-single">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="user-picture">
                                        <div class="user-picture-child">
                                        </div><!--user-picture-child-->
                                    </div><!--user-picture-->
                                </div>
                                <div class="col-md-10 col-md-offset-1">
                                    <h3>Lorem Ipsum</h3>
                                    <p>Nisi velit ullamco enim non excepteur cupidatat duis voluptate ex esse ut
                                        nostrud irure. Aute fugiat laborum ullamco magna nostrud tempor labore elit
                                        amet laboris elit. Sint laboris et nostrud laborum ipsum Lorem incididunt
                                        dolor.</p>
                                </div>

                            </div>
                        </div><!--equipe-single-->
                    </div>
                </div>
            </div><!--container-->
        </section><!--equipe-->
        <section class="final-site">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Fale Conosco</h2>
                        <form action="">
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" id="nome">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="email">Mensagem:</label>
                                <textarea class="form-control" name="mensagem" id=""></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                    <div class="col-md-6 mt-4">
                        <h2>Nossos Planos</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Plano Semanal</th>
                                    <th scope="col">Plano Mensal</th>
                                    <th scope="col">Plano Anual</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>R$ 99,90</td>
                                    <td>R$ 159,90</td>
                                    <td>R$ 989,70</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!--container-->
        </section><!--final-site-->

        <footer>
            <p class="text-center">Todos os direitos reservados</p>
        </footer>
    </div><!--box-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>