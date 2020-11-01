<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="./CSS/estilo.css">
    <script src="JavaScript/page.js"></script>

    <body>
        <!--MENU-->
        
        <?php
        include ('menu.html');
        ?>
        
        <!--fim do MENU-->
        <main>
            <h2 onmouseover="mOn(this)" onmouseout="mOff(this)">Seja Bem-vindo(a)! </h2>
            <hr>
            <p>
                Aqui em nossa loja <em>programadores tem desconto</em>!
            </p><br>
            <div id="amostra"> <img src="./img/produtos.jpg" alt="Eletrodomésticos" onmouseover="amostraOn(this)" onmouseout="amostraOff(this)"></div>
            <br>
            <br>


        </main>
        <hr>
        <footer>
            <div id="formas">Formas de pagamento</div>

            <div><img src="./img/formasdepagamento.png" alt="Formas de pagamento"></div>
            <hr>
            <p id="rodape">&copy; Recode Pro </p>
        </footer>

    </body>

</html>