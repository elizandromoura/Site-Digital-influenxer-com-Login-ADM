<?php
require_once "validador_acesso.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="estilo.css">

    <title>Configurações</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="imagens2/heart_crown_princess_emoji_emo_icon_131636.ico" type="image/x-icon">

    

  </head>
  <body class="corpo">
    <header class="cabecalho">
      
      <nav class="menu">
        
        <ul>
          <li>
            <a href="logoff.php" class="menu__link">Sair</a>
                            
        </ul>
                
      </nav>
      
    </header>
    
    <main class="principal">
     
      <section class="conteudo">

        <h1 class="titulo">Configurações</h1>

        <form action="registra.php" method="post">
          <input type="text" name="patrocinador" id="patrocinador">
          
          <input type="submit" value="Salvar">

        </form>
         
       

      </section><!--fim conteudo-->
    </main>
    <footer class="rodape">
      <p class="rodape__texto">Todos os direitos reservados.</p>
    </footer>

  </body>
</html>
