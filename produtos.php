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
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Open+Sans&family=Quicksand:wght@300;400;500;600;700&family=Raleway&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./CSS/estilo.css">
    <script src="JavaScript/page.js"></script>
    <script src="JavaScript/menuvendas.js"></script>
</head>

<body>
    <!--Menu-->
    <?php
        include ('menu.html');
        ?>
    <!--Fim Menu-->

    <h2>
        Produtos
    </h2>
    <hr>
    <main>
        
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
    <footer>
        <div id="formas">Formas de pagamento</div>

        <div><img src="./img/formasdepagamento.png" alt="Formas de pagamento"></div>
        <hr>
        <p id="rodape">&copy; Recode Pro </p>
    </footer>


</body>

</html>