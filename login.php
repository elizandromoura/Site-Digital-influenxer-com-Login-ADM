<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="estilo.css">

    <title>Login Adm</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="imagens2/heart_crown_princess_emoji_emo_icon_131636.ico" type="image/x-icon">

    

  </head>
  <body class="corpo">
    <header class="cabecalho">
      

      <nav class="menu">
        <ul>
          <li>
            <a href="index.html " class="menu__link">HOME</a>
          </li>
         
        </ul>
      </nav>
    </header>
    
    <main class="principaladm">
     
      <section>  

        <form action="valida_login.php" method="post">
            <div class="login">
                <h1 class="titulologin">Login Adm</h1>
                <input type="email" name="email" id="emailadm" placeholder="Email"> <br> <br>
                <input type="password" name="senha" id="senhaadm" placeholder="Senha"> <br> 
                <!-- Inicio cod PHP mostra mensagem de erro se os dados forem invalidos -->
                <?php
                  if (isset($_GET['login']) && $_GET['login'] == 'erro') {
                
                ?>

                <div class="logininvalido">
                Email ou senha invalido.
                    
                </div> 

                <?php } ?>

                <?php
                  if (isset($_GET['login']) && $_GET['login'] == 'erro2') {
                
                ?>

                <div class="logininvalido">
                Faça Login para continuar.
                    
                </div> 

                <?php } ?>

                <!-- Fim cod PHP -->
                
                <button class="btlogin" type="submit">Entrar</button>
            </div>
        </form>

       

      </section><!--fim conteudo-->
    </main>
    <footer class="rodape">
      <p class="rodape__texto">Todos os direitos reservados.</p>
     </footer>

  </body>
</html>
