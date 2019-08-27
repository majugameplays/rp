<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thimble Sample</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <img src="wawawiwa.png" alt="logo wawawiwa"/>

    <nav id="menu">

      <ul>

        <li> <a href="index.html"><strong>Inicio</strong></a></li>
        <li> <a href="images.html"><strong>Images</strong></a></li>
        <li> <a href="stickers.html"><strong>Stickers</strong></a></li>
        <li> <a href="#"><strong>Amigurumi</strong></a></li>
        <li> <a href="llaveros.html"><strong>Llaveros</strong></a></li>
        <li> <a href="carrito.html"><strong>Carrito</strong></a></li>

      </ul>

    </nav>
    
    <br>
    
    <div id="carrito">
      <fieldset>
        <legend><strong>Itens</strong></legend>
    
      <div id="compra">
      
          <?=$produto?><br>
          <?=preco?><br>
          
        
      </div>
      <br>
      
      </fieldset>
      
      <br>
      
      <fieldset>
      
        <legend><strong>Total</strong></legend>
        
        
      
      </fieldset>
    </div>
    <br>
    
    <div id="linha"></div>
    
    
    <div class="news">

      <p>¡Recibe noticias y un 15% de descuento en tu próxima compra!</p>

      <form action="vaiDados.php" method="post">

        <div id="info">

          <input class="formulario" type="text" name="nome" placeholder=" Nombre Completo">
          <br>
          <input class="formulario" type="text" name="email" placeholder=" Email">

        </div>

        <input type="checkbox" name="recebida" value="recebida">
        Acepto recibir correos de Wawawiwa
        <button class="formulario" type="submit"> Suscribirme</button>

      </form>

    </div>

    <nav id="rodape">

      <ul>

        <li> <a href="#"><strong>Contacto</strong></a></li>
        <li> <a href="#"><strong>Términos y condiciones</strong></a></li>
        <li> <a href="#"><strong>Administrador</strong></a></li>
        
      </ul>

    </nav>

  </body>
</html>
