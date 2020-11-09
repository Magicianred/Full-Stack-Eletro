<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nossas Lojas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Open+Sans&family=Quicksand:wght@300;400;500;600;700&family=Raleway&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./CSS/barra.css">
    <link rel="stylesheet" type="text/css" href="./CSS/lojas.css">
    
    <script src="JavaScript/adresses.js"></script>

</head>

<body>
<ul class="nav nav-fill">
            <li class="nav-item">
                <a class="nav-link active" href="index.php"><img src="./img/marca.png" width="150px" alt="Logo Full Stack Eletro"></a>
            </li>
            <li class="nav-item "><a class="nav-link active text-primary" href="produtos.php">Produtos</a></li>
            <li class="nav-item"><a class="nav-link active text-primary" href="lojas.php">Nossas Lojas</a></li>

            <li class="nav-item"><a class="nav-link active text-primary" href="faleconosco.php">Fale Conosco</a></li>
</div>

        </ul>


    <main>
        <h2>Nossas Lojas</h2> <hr>
        <div class="lojas">

       
            <div class="lojaRj" onmouseover="shopOn(this)" onmouseout="shopOff(this)">
                <h3>Rio de Janeiro</h3>
                <p class="lojasParag">Presidente Vargas, 1234 <br> 10&ordm; andar<br> Centro<br> (21) 2222-222 </p>
</div>

            <div class="lojaSp" onmouseover="shopOn(this)" onmouseout="shopOff(this)" >
                <h3>São Paulo</h3>
                <p class="lojasParag">Avenida Paulista, 4561<br> 4&ordm; andar<br> Jardins<br> (11) 2222-4444 </p>
</div>

            <div class="lojaSc" onmouseover="shopOn(this)" onmouseout="shopOff(this)" >
                <h3> Santa Catarina</h3>
                <p class="lojasParag">Rua Major &Aacute;vila, 370 <br> 2&ordm; andar <br> Vila Mariana <br>(48) 1234-2222 </p>
</div>

        </div>
    </main>
    <hr>
    <!--Rodapé-->
    <footer>
            <div class="formas"> Formas de pagamento</div>
            <div class="footer">

            <div><img src="./img/formasdepagamento.png" alt="Formas de pagamento"></div>
            <hr>
            <p>&copy; Recode Pro </p>
        </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>