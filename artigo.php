<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loja | MMDesign</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="imagens/icon-separador.png">
</head>
<body>
    <div class="contentor">
        <header class="grid-header">
            <nav class="row">
                    <span class="col-6 empty">
                        <img class="icon burguer" src="imagens/mobile/options.png" alt="">
                    </span>

                <a href="index.html">
                        <span class="logo botao">
                            MMDesign
                        </span>
                </a>

                <div class="paginas">
                    <a href="sobre.html">
                            <span class="col-1">
                                Sobre
                            </span>
                    </a>
                    <div>
                        <div class="col-1">
                            Portfólio
                        </div>
                        <div class="list">
                            <a href="portfolio.html"><div class="col-1">2018</div></a>
                            <a href=""><div class="col-1">2017</div></a>
                            <a href=""><div class="col-1">2016</div></a>
                        </div>
                    </div>
                    <a href="eventos.html">
                            <span class="col-1">
                                Eventos
                            </span>
                    </a>
                    <a href="loja.html">
                            <span class="col-1">
                                Loja
                            </span>
                    </a>
                    <a href="contactoselocalizacao.html">
                            <span class="col-1">
                                Contactos
                            </span>
                    </a>
                    <a href="carrinho.php">
                        <span class="col-1">
                            <img class="icon" src="imagens/carrinho.png" alt="Carrinho de Compras">
                        </span>
                    </a>
                </div>
            </nav>

            <div class="row">
                <div class="col-12 img-video carousel">
                    <img src="imagens/slideshow1.jpg" alt="Projeto 2017">
                </div>
            </div>
        </header>

        <main class="grid-main artigo">
            <div class="row">
                <div class="col-2"></div>

                <div class="col-3">

                    <a href="carrinho.php?id=<?php echo $_GET['id']; ?>">
                        <button class="botao" name="addCart">
                            Adicionar ao Carrinho
                        </button>
                    </a>

                    <a href="dadospagamento.php">
                        <button class="botao">
                            Proceder à Compra Imediata
                        </button>
                    </a>
                </div>

                <div class="col-1"></div>

                <div class="col-4"></div>
            </div>
        </main>
    </div>

    <footer class="grid-footer">
        <div class="row">
            <div class="col-2">
                <a href="index.html">
                    <svg id="Camada_1" data-name="Camada 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 243.22 58.47" width="200px">
                        <defs>
                            <style>.cls-1{fill:#303;}.cls-2{font-size:36px;fill:#909;font-family:OCRAStd, OCR A Std;}</style>
                        </defs>
                        <title>logo-footer</title>
                        <rect class="cls-1" width="243.22" height="58.47"/>
                        <text class="cls-2" transform="translate(14.41 40.68)">MMDesign</text>
                    </svg>
                </a>
            </div>

            <div class="col-1 empty"></div>

            <div class="col-2">
                <a href="*link to fb">
                    <img class="icon" src="imagens/facebook.png" alt="Ícone do Facebook">
                </a>
                <br>
                <a href="*link to fb">
                    Facebook/MMDesign
                </a>
            </div>

            <div class="col-2">
                <a href="*link to insta">
                    <img class="icon" src="imagens/insta.png" alt="Ícone do Instagram">
                </a>
                <br>
                <a href="*link to insta">
                    Instagram/MMDesign
                </a>
            </div>

            <div class="col-2">
                <a href="*link to tt">
                    <img class="icon" src="imagens/twitter.png" alt="Ícone do Twitter">
                </a>
                <br>
                <a href="*link to tt">
                    Twitter/MMDesign
                </a>
            </div>

            <div class="col-1 empty"></div>

            <div class="col-2"> Website Design:<br> MMDesign</div>
        </div>
    </footer>
    <script src="javascript/javascript.js"></script>
    <script src="javascript/artigo.js"></script>
</body>
</html>