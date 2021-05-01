<?php

$patron = array();
//Abrir arquivo.hd
$arquivo = fopen('arquivo.hd', 'r');

while (!feof($arquivo)) {
  $registro = fgets($arquivo);
  $patron[] = $registro;
}
//Fechar arquivo
fclose($arquivo);

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="estilo.css">

    <title>Patrocinadores</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="imagens2/heart_crown_princess_emoji_emo_icon_131636.ico" type="image/x-icon">

    

  </head>
  <body class="corpo">
    <header class="cabecalho">
      <img src="imagens2/capa.png" class="capa">

      <nav class="menu">
        <ul>
          <li>
            <a href="index.html " class="menu__link">HOME</a>
          </li>
          <li class="menu__item">
            <a href="biografia.html" class="menu__link">BIOGRAFIA</a>
          </li>
          <li class="menu__item">
            <a href="campanhas-publicitarias.html" class="menu__link">CAMPANHAS PUBLICITARIAS</a>
          </li>
          <li class="menu__item">
            <a href="contato.html" class="menu__link">CONTATO</a>
          </li>
          <li class="menu__item">
            <a href="patrocinadores.php" class="menu__link">PATROCINADORES</a>
          </li>
        </ul>
      </nav>
    </header>
    
    <main class="principal">
     
      <section class="conteudo">  
      <div>
          <h1>Patrocinadores</h1>
            <?php
            foreach ($patron as $patrocina) { ?>
              <p> <img class="imgpatrocinadores" src="imagens2/media_social_tiktok_icon_124256.ico" alt="tiktok"> <?=$patrocina;?></p>


            <?php } ?>
              
        </div> 


      </section><!--fim conteudo-->
    </main>
    <footer class="rodape">
      <p class="rodape__texto">Todos os direitos reservados.</p>
     </footer>

  </body>
</html>
