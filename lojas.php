<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nossas Lojas</title>
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
        <h2>Nossas Lojas</h2>
        <hr>
        <div class="lojasAdress">

            <section class="lojaRj" onmouseover="shopOn(this)" onmouseout="shopOff(this)">
                <h3>Rio de Janeiro</h3>
                <p class="lojasParag">Presidente Vargas, 1234 <br> 10&ordm; andar<br> Centro<br> (21) 2222-222 </p>
            </section>

            <section class="lojaSp" onmouseover="shopOn(this)" onmouseout="shopOff(this)">
                <h3>São Paulo</h3>
                <p class="lojasParag">Avenida Paulista, 4561<br> 4&ordm; andar<br> Jardins<br> (11) 2222-4444 </p>
            </section>

            <section class="lojaSc" onmouseover="shopOn(this)" onmouseout="shopOff(this)">
                <h3> Santa Catarina</h3>
                <p class="lojasParag">Rua Major &Aacute;vila, 370 <br> 2&ordm; andar <br> Vila Mariana <br>(48) 1234-2222 </p>
            </section>

        </div>
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