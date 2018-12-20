<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Compra realizada | MMDesign</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="imagens/icon-separador.png">
</head>
<body>
    <div class="contentor">
        <header class="grid-header">

            <?php include('header.html'); ?>

            <div class="row">
                <div class="col-12 img-video carousel">
                    <img src="imagens/slideshow1.jpg" alt="Projeto 2017">
                </div>
            </div>
        </header>

        <main class="grid-main">
            <div class="row">
                <div class="col-2"></div>

                <div class="titulo col-8">
                    <h5>A sua compra foi realizada com sucesso.</h5>
                </div>

                <div class="col-2"></div>
            </div>

            <div class="row">
                <div class="col-2"></div>

                <div class="col-8">
                        Enviamos um mail com o comprovativo e dados da sua compra.<br>
                        Por questões de verificação e segurança, carregue aqui o comprovativo que lhe foi enviado
                    </div>

                <div class="col-2"></div>
            </div>

            <div class="row">
                <div class="col-2"></div>

                <div class="col-4">
                    <form enctype="multipart/form-data" action="processform.php" method="POST">
                        <label>Ficheiro: <input type="file" name="file"></label>
                    </form>
                </div>

                <div class="col-6"></div>
            </div>

            <div class="row">
                <div class="col-2"></div>

                <div class="col-2">
                    <form enctype="multipart/form-data" action="processform.php" method="POST">
                        <input type="submit" class="botao">
                    </form>
                </div>

                <div class="col-8"></div>
            </div>

            <div class="row">
                <div class="col-8"></div>

                <div class="col-4">
                    <a href="loja.php">
                        <button class="botao">
                            Continuar a Comprar
                        </button>
                    </a>
                </div>
            </div>
        </main>
    </div>

    <footer class="grid-footer">

        <?php include('footer.html'); ?>

    </footer>
    <script src="javascript/javascript.js"></script>
    <script src="javascript/slideshow.js"></script>
</body>
</html>