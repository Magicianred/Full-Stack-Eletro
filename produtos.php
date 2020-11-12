<?php 
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "fullstackeletro";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("A conexão falhou: ". mysqli_connect_error());
}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Full Stack Eletro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Open+Sans&family=Quicksand:wght@300;400;500;600;700&family=Raleway&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./CSS/prods.css">
    <link rel="stylesheet" type="text/css" href="./CSS/barra.css">


    <script src="JavaScript/page.js"></script>
    <script src="JavaScript/menuvendas.js"></script>
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
    
    <hr>
    <main>
        <h2>
        Produtos
    </h2>
<section class="menuCategorias">
            <ol>
                <li>
                    <h3 id="category">
                        Categorias:
                    </h3>
                </li>
                <li class="listaProduto" onclick="exibir_todos('todos')" onmouseover="prodsOn(this)" onmouseout="prodsOff(this)">
                    Todos os produtos (14)
                </li>
                <li class="listaProduto" onclick="exibir_categoria('fogao')" onmouseover="prodsOn(this)" onmouseout="prodsOff(this)">
                    Fogões (2)
                </li>
                <li class="listaProduto" onclick="exibir_categoria('geladeira')" onmouseover="prodsOn(this)" onmouseout="prodsOff(this)">
                    Geladeiras (3)
                </li>
                <li class="listaProduto" onclick="exibir_categoria('microondas')" onmouseover="prodsOn(this)" onmouseout="prodsOff(this)">
                    Micro-ondas (3)
                </li>
                <li class="listaProduto" onclick="exibir_categoria('lavalouca')" onmouseover="prodsOn(this)" onmouseout="prodsOff(this)">
                    Lava-louças (2)
                </li>
                <li class="listaProduto" onclick="exibir_categoria('lavadora')" onmouseover="prodsOn(this)" onmouseout="prodsOff(this)">
                    Lavadoras (2)
                </li>
                <li class="listaProduto" onclick="exibir_categoria('aspirador')" onmouseover="prodsOn(this)" onmouseout="prodsOff(this)">
                    Aspirador de pó (2)
                </li>
            </ol>

</section>
<section class="menuProdutos">
            <?php
            $sql = "select * from produtos";
            $result = $conn-> query($sql);
            
            if ($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
                     ?>
        
           <div class="box_produtos"  id="<?php echo $rows["categoria"];?>"><img class="Prods" src="<?php echo $rows ["nomeimagem"]; ?>"  onmouseover="destaqueOn(this)" onmouseout="destaqueOff(this)">
                <br>
                <div class="estiloNome"><?php echo $rows["nomeproduto"];?></div>
                <div class="estiloNome"><?php echo $rows["descrição"];?></div>
                <hr>
                <div class="estiloPrecoVelho"> <?php echo "R$" . $rows["preço"];?></div>
                <div class="estiloPrecoNovo"><?php echo "R$" .$rows ["preço_venda"];?></div>
            </div>
           
           <?php 
                } 
            } else {
                echo "nenhum produto cadastrado";
            }
            ?>
            

</section>
            
    
    </main>

    <br>
    <br>
    <br>
    <hr>
    <!--Rodapé-->
    <footer>
            <div class="formas"> Formas de pagamento</div>
            <div class="footer">

            <div><img src="./img/formasdepagamento.png" alt="Formas de pagamento"></div>
            <hr>
            <p id="recode">&copy; Recode Pro </p>
        </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>