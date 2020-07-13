<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="Styles/store.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="JS/jquery-3.5.1.min.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=ARA-CmolGHlm46StVKarqxgUkL3SD7mfh3ZwhoOmueXTZk8s5f3GRChzp8PmPRLBkcR6jliGdxo_gd6q&currency=MXN&vault=true&locale=es_MX">
     </script>
     <script type="text/javascript" src="JS/Page.js" ></script>
</head> 
<body>
 
    <!-- <form action="View/compra.php" method="post"> -->
        <img src="Images/playera.jpg" class="playera">$5.00</img> 
        <input type="text" id="cantidadProductos" placeholder="cantidad" class="inputText"></input>
        <!-- <input type="submit" value="Comprar"> -->
        <button type="button" id="btnEnviarCarrito" onclick="HacerCompra()">Comprar</button>
    <!-- </form> -->
        <div id="PaginaCompra"></div>
   
</body>
</html>