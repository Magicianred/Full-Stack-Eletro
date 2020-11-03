
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
    <title>Full Stack Eletro</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Open+Sans&family=Quicksand:wght@300;400;500;600;700&family=Raleway&family=Roboto&display=swap" rel="stylesheet">
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
            <div class="mailing"> <img src="./img/emailicon.jpg" width="40px"> contato@fullstackeletro.com
            </div>


            <div class="tele"><img src="./img/whapicon.png" width="40px">(21) 92323-6589
        </div>
                
        </section>

<div class="container">
        <form method="post" action="" class="gradeDois">
            <h4>Nome:</h4> 
            <input type="text" style="width: 400px;" name="nome"><br> 
            <h4>E-mail:
            </h4>
            <input type="mail" style="width: 400px;" name="email">
            <h4>
                Telefone:
            </h4>
            <input type="number" style="width: 400px;" name="telefone">

           <h4> Mensagem: </h4>
            <input type="text" style="width:400px; height:200px;" name="msg"><br>
            <input type="submit" id="botao" value="Enviar">
        </form></div>


        
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