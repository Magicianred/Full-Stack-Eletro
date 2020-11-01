<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="./CSS/estilo.css">
    <script src="JavaScript/page.js"></script>

</head>

<body>
    <!--MENU-->
    <?php
        include ('menu.html');
        ?>
    <!--fim do MENU-->
    <main>

        <h2>Fale Conosco</h2>
        <hr>


        <section class="grade">
            <div> <img src="./img/emailicon.jpg" width="40px"> contato@fullstackeletro.com
            </div>


            <div><img src="./img/whapicon.png" width="40px">
                <div>(21) 92323-6589</div>
        </section>


        <form class="gradeDois">
            <h4>
                Nome:
            </h4>
            <input type="text" style="width: 400px;">
            <h4>
                E-mail:
            </h4>
            <input type="mail" style="width: 400px;">
            <h4>
                Telefone:
            </h4>
            <input type="number" style="width: 400px;">

            <h4>
                Mensagem:
            </h4>
            <textarea style="width: 400px;"></textarea><br>
            <input type="submit" id="botao" value="Enviar" onclick="sucessOn(this)" onmouseover="botaOn(this)" onmouseout="botaOff(this)">

        </form>
    </main>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <hr>
    <footer>
        <div id="formas">Formas de pagamento</div>
        <hr>

        <div><img src="./img/formasdepagamento.png" alt="Formas de pagamento"></div>

        <p id="rodape">&copy; Recode Pro </p>
    </footer>


</body>

</html>