
<?php 
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "fullstackeletro";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("A conexão falhou: ". mysqli_connect_error());
}

if(isset($_POST['nome']) && isset($_POST['msg']) && isset($_POST['email']) && isset($_POST['telefone'])){
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    
    $sql = "insert into contato (nome, msg, email, telefone) values ('$nome','$msg', '$email', $telefone)";
    $result = $conn->query($sql);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title>Full Stack Eletro - Fale Conosco</title>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Open+Sans&family=Quicksand:wght@300;400;500;600;700&family=Raleway&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./CSS/barra.css">
    <link rel="stylesheet" type="text/css" href="./CSS/contato.css">
    <script src="JavaScript/page.js"></script>

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
    <main>

        <h2>Fale Conosco</h2>
        <hr>

<!--Informações de contato-->
    <section class="grade">
            <div class="mailing"> 
                <img src="./img/emailicon.jpg" width="40px"> contato@fullstackeletro.com
            </div>

            <div class="tele">
                <img src="./img/whapicon.png" width="40px">(21) 92323-6589
            </div>
                
    </section>

<!--Formulário de Mensagem-->
 
<div class="container w-50 p-4 ">   
    <form method="post" action="" >

        <div class="form-group d-flex justify-content-center ">
           <div> 
               <label for="nome"> Nome:</label> 
               <input type="text" class="form-control" id="nomeForm" aria-describedby="name" style="width: 400px;" name="nome" placeholder="Seu nome completo"><br> 
           </div>
        </div>

        <div class="form-group d-flex justify-content-center">  
            <div> 
                <label for="email"> E-mail:</label>        
                <input type="mail" class="form-control" id="emailForm" style="width: 400px;" aria-describedby="emailContato" placeholder="Seu email" name="email"><br>
            </div>
        </div>

        <div class="form-group d-flex justify-content-center">
            <div>
                <label for="telefone"> Telefone:</label>   
                <input type="number" class="form-control" id="telefoneForm" style="width: 400px;" aria-describedby="telefoneContato" placeholder="Seu telefone" name="telefone"><br>          
            </div>
        </div>
        
        <div class="form-group d-flex justify-content-center">
           <div>
               <label for="message"> Mensagem:</label>
            
               <input type="text" class="form-control" id="recado" aria-describedby="recado" placeholder="Sua mensagem..." style="width:400px; height:200px;" name="msg"><br><br>
               <input type="submit"  class="btn btn-primary btn-md d-flex" value="Enviar">
            </div>
        </div>

    </form>
</div>

 
     
    </main>
    
   
    <hr>
    <!--Rodapé-->
    <footer>
        <div class="formas"> Formas de pagamento</div>
           
            <div class="footer">

            <div>
                <img src="./img/formasdepagamento.png" alt="Formas de pagamento">
            </div>
            <hr>
            <p id="recode">&copy; Recode Pro </p>
    </footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>

</html>