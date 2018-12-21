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

        <?php include('header.html'); ?>

        <div class="row">
            <div class="col-12 img-video carousel">
                <img src="imagens/slideshow1.jpg" alt="Projeto 2017">
            </div>
        </div>
    </header>

    <main class="grid-main">
        <div class="row">
            <div class="col-8">
                <?php
                $filename = "data.txt";

                $nome = $_POST["name"];
                $mail = $_POST["email"];
                $numero	= $_POST["mobile"];
                $morada	= $_POST["adress"];
                $cartao = $_POST["cartao"];
                $validade = $_POST["validade"];
                $codigo	= $_POST["codigo"];

                htmlOutputForm($nome, $mail, $numero, $morada, $cartao, $validade, $codigo);

                fileOutputForm($nome, $mail, $numero, $morada, $cartao, $validade, $codigo, $filename);

                function htmlOutputForm($nome, $mail, $numero, $morada, $cartao, $validade, $codigo)
                {
                    echo '<table>';

                    echo '<tr>';
                    echo '<th>Nome</th><th>Email</th><th>Telemóvel</th><th>Morada</th><th>Nº de Cartão</th><th>Validade</th><th>Código</th>';
                    echo '</tr>';

                    echo '<tr>';
                    echo "<td>$nome</td><td>$mail</td><td>$numero</td><td>$morada</td><td>$cartao</td><td>$validade</td><td>$codigo</td>";
                    echo '</tr>';

                    echo '</table>';
                }


                function fileOutputForm($nome, $mail, $numero, $morada, $cartao, $validade, $codigo, $filename)
                {
                    $line_to_write = $nome . ', ';
                    $line_to_write = $line_to_write . $mail . ',';

                    $line_to_write = $line_to_write . $numero . ',';
                    $line_to_write = $line_to_write . $morada;
                    $line_to_write = $line_to_write . $cartao;
                    $line_to_write = $line_to_write . $validade;
                    $line_to_write = $line_to_write . $codigo;
                    $line_to_write = $line_to_write . "\n";

                    file_put_contents($filename, $line_to_write, FILE_APPEND);
                }

                mailOutputForm($nome, $mail, $numero, $morada, $cartao, $validade, $codigo);


                function mailOutputForm($nome, $mail, $numero, $morada, $cartao, $validade, $codigo)
                {

                    $message = "Saudacoes,
Este mail serve de confirmacao de dados. Por favor, não responda a este mail. 
   
Dados:
Nome: $nome
Email: $mail
Numero de Telemovel: $numero
Morada: $morada
Numero de cartao: $cartao
Validade: $validade
Codigo de Seguranca: $codigo
 
Cumprimentos,
MMDesign
    ";

                    mail($mail,
                        'Form submitted',
                        $message,
                        'From: mmdesign@example.com');
                }
                
                ?>
            </div>

            <div class="col-4">
                <a href="comprafinalizada.php">
                    <button class="botao" name="continue">
                        Finalizar Compra
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
<script src="javascript/artigo.js"></script>
</body>
