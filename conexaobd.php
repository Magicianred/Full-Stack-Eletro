
   <!DOCTYPE html>
   <html lang="pt-br">
   
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <title>Full Stack Eletro</title>
       <link rel="stylesheet" type="text/css" href="./CSS/estilo.css">
       <script src="JavaScript/page.js"></script>
       <script src="JavaScript/menuvendas.js"></script>
   </head>
   
   <body>
       
       <?php
       $servername = "Recode Pro";
       $username = "root";
       $password = "";
       $database = "fullstackeletro";

       $conn = mysqli_connect($servername, $username, $password, $database);

       ?>
       <!--Menu-->
       <header>
   
           <ul class="header">
               <li>
                   <a href="index.html"><img class="marca" src="./img/logoeletro.png" width="100px" alt="Logo Full Stack Eletro" onmouseover="imgOn(this)" onmouseout="imgOff(this)"></a>
               </li>
               <li class="produtos" onmouseover="navOn(this)" onmouseout="navOff(this)"><a href="produtos.html">Produtos</a></li>
               <li class="lojas" onmouseover="navOn(this)" onmouseout="navOff(this)"><a href="lojas.html">Nossas Lojas</a></li>
               <li class="contatos" onmouseover="navOn(this)" onmouseout="navOff(this)"><a href="faleconosco.html">Fale Conosco</a></li>
   
           </ul>
   
       </header>
       <!--Fim Menu-->
   
       <h2>
           Produtos
       </h2>
       <hr>
       <main>
           <section class="menuProdutos">
   
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
               <div class="box_produtos" id="fogao"><img class="Prods" src="./img/fogaoelectrolux.jpg" width="190px" onmouseover="destaqueOn(this)" onmouseout="destaqueOff(this)">
                   <br>
                   <div class="estiloNome">Fogão 4 Bocas Electrolux Preto - Acendimento Automático 52LPV</div>
                   <hr>
                   <div class="estiloPrecoVelho"> de R$ 1.499,00 <br></div>
                   <div class="estiloPrecoNovo">por R$1.187,10 à vista</div>
               </div>
   
   
               <div class="box_produtos" id="fogao"><img class="Prods" src="./img/fogaoconsul.jpg" width="190px" onmouseover="destaqueOn(this)" onmouseout="destaqueOff(this)">
                   <br>
                   <div class="estiloNome">Fogão 5 Bocas Consul CFS5 VAR - Acendimento Automático Inox</div>
                   <hr>
                   <div class="estiloPrecoVelho">de R$ 1.999,90 <br></div>
                   <div class="estiloPrecoNovo">por R$1.439,10 à vista</div>
               </div>
   
   
               <div class="box_produtos" id="geladeira"><img class="Prods" src="./img/geladeirabrastemp.jpg" width="200px" onmouseover="destaqueOn(this)" onmouseout="destaqueOff(this)">
                   <br>
                   <div class="estiloNome">Geladeira Brastemp Frost Free Evox</div><br>
                   <hr>
                   <div class="estiloPrecoVelho">de R$ 9.519,90<br> </div>
                   <div class="estiloPrecoNovo">por R$4.949,10 à vista</div>
               </div>
   
               <div class="box_produtos" id="geladeira"><img src="./img/geladeiraconsul.jpg" width="154px" onmouseover="destaqueOn(this)" onmouseout="destaqueOff(this)">
                   <br>
                   <div class="estiloNome">Refrigerador Consul Domest 2 Portas 437 Litros Platinum Frost Free 220v</div>
                   <hr>
                   <div class="estiloPrecoVelho"> de R$ 3.999,00 <br></div>
                   <div class="estiloPrecoNovo">por R$3.039,05 à vista</div>
               </div>
               <div class="box_produtos" id="geladeira"><img class="Prods" src="./img/geladeiracontinental.jpg" width="190px" onmouseover="destaqueOn(this)" onmouseout="destaqueOff(this)">
                   <br>
                   <div class="estiloNome"> Geladeira/Refrigerador Continental Frost Free</div>
                   <hr>
                   <div class="estiloPrecoVelho">de R$ 2.899,00 <br></div>
                   <div class="estiloPrecoNovo">por R$1.880,10 à vista </div>
               </div>
   
   
   
               <div class="box_produtos" id="microondas"><img src="./img/microBrastemp.jpg" width="210px" onmouseover="destaqueOn(this)" onmouseout="destaqueOff(this)">
                   <br>
                   <div class="estiloNome">Micro-ondas Brastemp 20 Litros com Funções Pré-preparo Inox Espelhado</div>
   
                   <hr>
                   <div class="estiloPrecoVelho"> de R$ 599,02<br> </div>
                   <div class="estiloPrecoNovo">por R$539,12 à vista</div>
               </div>
   
   
               <div class="box_produtos" id="microondas"><img src="./img/microEletrolux.jpg" width="238px" onmouseover="destaqueOn(this)" onmouseout="destaqueOff(this)">
                   <br>
                   <div class="estiloNome"> Micro-ondas Electrolux com Painel Integrado 31L MI41S - 220 Volts</div>
                   <hr>
                   <div class="estiloPrecoVelho">de R$ 847,97<br> </div>
                   <div class="estiloPrecoNovo">por R$763,17 à vista</div>
               </div>
   
   
               <div class="box_produtos" id="microondas"> <img src="./img/microLG.jpg" width="152px" onmouseover="destaqueOn(this)" onmouseout="destaqueOff(this)">
                   <br>
                   <div class="estiloNome"> Microondas LG Solo 30 Litros Prata MS3095 110V</div>
                   <hr>
                   <div class="estiloPrecoVelho"> de R$ 625,96<br></div>
                   <div class="estiloPrecoNovo"> por R$539,10 à vista</div>
               </div>
               <div class="box_produtos" id="lavalouca"><img src="./img/lavaloucasBrastemp.jpg" width="150px" onmouseover="destaqueOn(this)" onmouseout="destaqueOff(this)">
   
                   <div class="estiloNome">Lava Louças 8 Serviços Brastemp Compacta Prata com Ciclo Pesado</div>
                   <hr>
                   <div class="estiloPrecoVelho"> de R$ 2.899,00<br></div>
                   <div class="estiloPrecoNovo">por R$1.880,10 à vista</div>
               </div>
               </div>
   
   
               <div class="box_produtos" id="lavalouca"> <img src="./img/lavaloucasPhilco.jpg" width="210px" onmouseover="destaqueOn(this)" onmouseout="destaqueOff(this)">
                   <div class="estiloNome">Lava louças Philco - 8 Serviços. </div>ㅤㅤㅤㅤㅤㅤㅤㅤㅤ
                   <hr>
                   <div class="estiloPrecoVelho">de R$ 2.599,00<br></div>
                   <div class="estiloPrecoNovo">por R$1.844,91 à vista</div>
               </div>
   
   
               <div class="box_produtos" id="lavadora"> <img src="./img/lavadoraBrastemp.jpg" width="190px" onmouseover="destaqueOn(this)" onmouseout="destaqueOff(this)">
                   <div class="estiloNome"><br> Lavadora de Roupas Brastemp BWK12A9 12Kg - Cesto Inox 12 Programas de Lavagem<br></div>
   
                   <hr>
                   <div class="estiloPrecoVelho">de R$ 2.599,00<br> </div>
                   <div class="estiloPrecoNovo">por R$1.853,10 à vista</div>
               </div>
   
   
               <div class="box_produtos" id="lavadora"> <img src="./img/lavadoraMidea.jpg" width="190px" onmouseover="destaqueOn(this)" onmouseout="destaqueOff(this)">
                   <br>
                   <div class="estiloNome"> Lavadora de Roupas Midea Storm Wash LFA11X1 - Inverter 11kg Cesto Inox 16 Programas de Lavagem<br><br></div>
                   <hr>
                   <div class="estiloPrecoVelho">de R$ 3.499,00 <br></div>
                   <div class="estiloPrecoNovo">por R$2.699,10 à vista</div>
               </div>
   
               <div class="box_produtos" id="aspirador"> <img src="./img/aspirador2.jpg" width="190px" onmouseover="destaqueOn(this)" onmouseout="destaqueOff(this)">
                   <div class="estiloNome"><br> Aspirador de Pó Vertical Philco 1000W - com Filtro Hepa Ph1100 Rapid Turbo Pas02c<br></div>
   
                   <hr>
                   <div class="estiloPrecoVelho">de R$ 200,00<br> </div>
                   <div class="estiloPrecoNovo">por R$170,91 à vista</div>
               </div>
   
   
               <div class="box_produtos" id="aspirador"> <img src="./img/aspirador1.jpg" width="215px" onmouseover="destaqueOn(this)" onmouseout="destaqueOff(this)">
                   <br>
                   <div class="estiloNome">Aspirador de Pó Britânia 1250W BAS1430<br><br></div>
                   <hr>
                   <div class="estiloPrecoVelho">de R$ 249,90 <br></div>
                   <div class="estiloPrecoNovo">por R$189,90 à vista</div>
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
    
    
    