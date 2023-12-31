<?php
include ("conecta.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armações</title>
     <!--ICON NA GUIA-->
     <link rel="icon" href="imagensTelaInicial/logo.png">
    <link rel="stylesheet" href="estiloQuemsomos.css">
    <link rel="stylesheet" href="estiloProdutos.css">
    
</head>
<body>
    <main>
      <center>
        <section>
            <div class="container">
                <div class="seta">
                    <a href="javascript:history.back()"><img src="images/setaespeculary (1).jpg"></a>
                </div>
                <div class="left-side">
                <div class="items">
                <div class="select-image">
                    <img src="images/armacaohoje.jpg">
                </div>
            </div>
        </div>
                <div class="right-side">
                <div class="content">
                    <h6>ARMAÇÃO</h6>
                    <h1>Armação Feminina Circular Cor Preta e Padrão de Onça </h1>
                    <p>poucas unidades</p>
                    <div class="prices">
                    <span class="price">$70,00</span>
                    <span class="off">$95,00</span>
                    </div>
                    <div class="options">
                    <form action="paginadeprodutosarmacao2.php" method="post">
                          <button onclick="comprar()" type="submit" name="update" class=button>Adicionar ao Carrinho</button>
                          <input placeholder="Quantidade" value="1" name="quantidade" class="quantidade" type="number" min="1" max="100">
                          <?php
                          if(isset($_POST["update"]))
                          {
                            $quantidade = $_POST["quantidade"];
                            $comando = $pdo->prepare("UPDATE produtos SET carrinho=1, quantidade='$quantidade' WHERE id_produto = 2;");
                            $resultado = $comando->execute();
                              ?><script>window.location.replace("carrinho.php");</script><?php
                          }
                          ?>
                      </form>
                      <form action="paginadeprodutosarmacao2.php" method="post">

                      <button style="scale: 70%; font-size: 15px;" type="submit" name="favoritar" class=button>Favoritar &nbsp <i class="fa-solid fa-heart" style="color: #eb0505;"></i></button>

                      <?php
                          if(isset($_POST["favoritar"]))
                          {
                            $quantidade = $_POST["quantidade"];
                            $comando = $pdo->prepare("UPDATE produtos SET favoritos=1, quantidade='$quantidade' WHERE id_produto = 1;");
                            $resultado = $comando->execute();
                              ?><script>window.location.replace("favoritos.php");</script><?php
                          }
                          
                          ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </center>
    </main>
</body>
<script src="https://kit.fontawesome.com/daa9922b2e.js" crossorigin="anonymous"></script>
<script>
function comprar()
{
  window.open("carrinho.php?nome=" +document.getElementById("nome").innerHTML+"&preco="+document.getElementById("preco").innerHTML+"&imagem="+"images/armacao3.jpg", "_self");
}
</script>
</html>