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
    <!--Menu-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
   
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseNavbar"><span class="navbar-toggler-icon"></span></button>
  
      <div class="collapse navbar-collapse" id="collapseNavbar">
          <ul class="nav nav-fill shadow p-2 mb-5">
               <a class="navbar-brand" href="index.php"><img src="./img/marca.png" width="150px" alt="Logo Full Stack Eletro"></a>
              <li class="nav-item "> 
                  <a class="nav-link active text-primary" href="produtos.php">Produtos</a> 
              </li>
              <li class="nav-item">
                  <a class="nav-link active text-primary" href="lojas.php">Nossas Lojas</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active text-primary" href="faleconosco.php">Fale Conosco</a>
              </li>
  
  
          </ul>
      </div> 
  </nav>
  <!--Fim do Menu-->
<!--Conteúdo-->
    <main>
        <h2>Nossas Lojas</h2> 
        <hr>

        <div class="lojas">
            <div class="lojaRj" onmouseover="shopOn(this)" onmouseout="shopOff(this)">
                <h3>Rio de Janeiro</h3>
                 <p class="lojasParag">Presidente Vargas, 1234 <br> 10&ordm; andar<br> Centro<br> (21) 2222-222 </p>
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.243155948581!2d-43.19025728511791!3d-22.90440054354397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f6b9ebdff0d%3A0xfddce16d156a199e!2sAv.%20Pres.%20Vargas%20-%20Centro%2C%20Rio%20de%20Janeiro%20-%20RJ!5e0!3m2!1spt-BR!2sbr!4v1604957230826!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="1" style="border:2px solid purple;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

            <div class="lojaSp" onmouseover="shopOn(this)" onmouseout="shopOff(this)" >
                <h3>São Paulo</h3>
                 <p class="lojasParag">Avenida Paulista, 4561<br> 4&ordm; andar<br> Bela Vista<br> (11) 2222-4444 </p>
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.0757942374726!2d-46.653417885102606!3d-23.5657211676382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.%20Paulista%20-%20Bela%20Vista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1604957514495!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="1" style="border:2px solid purple;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

            <div class="lojaSc" onmouseover="shopOn(this)" onmouseout="shopOff(this)" >
                <h3> Belo Horizonte</h3>
                 <p class="lojasParag">Rua dos Tupinambás<br> 2&ordm; andar <br> Centro <br>(31) 1234-2222 </p>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3751.1637453331437!2d-43.94191038518256!3d-19.917503443064124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa699fc8928137d%3A0x232fdc4200f9dde9!2sRua%20dos%20Tupinamb%C3%A1s%20-%20Centro%2C%20Belo%20Horizonte%20-%20MG%2C%2030120-070!5e0!3m2!1spt-BR!2sbr!4v1604957727031!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="1" style="border:2px solid purple;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

        </div>
    </main>
    <!--Fim do Conteúdo-->
    <hr>
    <!--Rodapé-->
    <footer>
            <div class="formas"> Formas de pagamento</div>

        <div class="footer">

            <div><img src="./img/formasdepagamento.png" alt="Formas de pagamento"></div>
            <hr>
            <p id="recode">&copy; Recode Pro </p>
        </div>
    
    </footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>