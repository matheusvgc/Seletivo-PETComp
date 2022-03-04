<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="shortcut icon" href="./assets/images/logoPET.ico">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <title>Publicações | PETComp</title>
</head>
<body>
<header>
    <div class="logo">
      <a href="index.php" class="logo-pet"><img src="./assets/images/logoPET.png" alt="Logo PETComp"></a>
      <div class="barra"></div>
      <a href="https://portalpadrao.ufma.br/site" target="_blank"><img src="./assets/images/logoUFMA.png" alt="Logo UFMA"></a>
    </div>
    <nav class="nav">
      <button class="menu-toggle"></button>

      <ul class="nav-list" id="menu">
        <li><a href="index.php">Início</a></li>
        <li><a href="sobre.php">Sobre Nós</a></li>
        <li id="dropdown">
          <p>Projetos</p>
          <ul class="dropdown-menu">
            <li><a href="monitoria.php">Monitoria</a></li>
            <li><a href="desenvolvimento.php">Fáb. de Software</a></li>
            <li><a href="oficinas.php">Minicursos e Oficinas</a></li>
          </ul>
        </li>
        <li><a class="ativo" href="publicacoes.php">Publicações</a></li>
        <li><a href="biblioteca-pet-comp.php">Biblioteca PETComp</a></li>
      </ul>
    </nav>
  </header>

  <main>
  <section class="publicacoes-section">
    <div class="publicacoes-container">
      <div class="title">
        <h2>TRABALHOS PUBLICADOS</h2>
      </div>
      <div>
      <?php
        require('connect.php');

        mysqli_select_db($mysqli, $database) or die("Could not select database");

        $query = "SELECT * FROM publicacoes";
        $result = mysqli_query($mysqli, $query);
        $num_results = mysqli_num_rows($result);

        if($num_results > 0) {
          for($i=0; $i<$num_results; $i++) {
            $row = mysqli_fetch_array($result);
            ?> 
            <div class="publicacoes-container">
              <div class="publicacao">
                <h2>Artigo: <?php print_r($row['titulo']);?></h2>
                <div class="autores">
                  <h3>AUTORES</h3>
                  <p><?php print_r($row['autores']);?></p>
                </div>
              </div>
              <div class="link">
              <a href="<?php print_r($row['link_publicacao']);?>" target="_blank">Ver arquivo</a><br>
              </div>
            </div>
            <?php
          }
        }
      ?>
      </div>
    </div>
    <div class="slider-buttons">
      <button>1</button>
      <button>2</button>
      <button>3</button>
    </div>
  </section>
  </main>

  <footer>
    <div class="footer-container">
      <div class="sobre-footer">
        <h2>Sobre</h2>
        <div class="logos-footer">
          <a href="index.html"><img src="./assets/images/logoPET-light.png" alt="Logo PETComp"></a>
          <a href="https://portalpadrao.ufma.br/site" target="_blank"><img src="./assets/images/logoUFMA.png" alt="Logo UFMA"></a>
        </div>
      </div>
      <div class="contato">
        <h2>Contatos</h2>
        <div class="contatos-container">
          <img src="./assets/images/map icon.svg" alt="">
          <p>Av. dos Portugueses, 1966 - Vila Bacanga, São Luís - MA, 65080-805, CCET - Bloco 2</p>
        </div>
        <div class="contatos-container">
          <img src="./assets/images/email icon.svg" alt="">
          <p>petcomputacao.ufma@gmail.com</p>
        </div>
        <div class="contatos-container">
          <img src="./assets/images/instagram icon.svg" alt="">
          <a href="https://www.instagram.com/petcompufma/" target="_blank">@PetCompUfma</a>
        </div>
        <div class="contatos-container">
          <img src="./assets/images/twitter icon.svg" alt="">
          <a href="https://twitter.com/petcompufma" target="_blank">@PetCompUfma</a>
        </div>
      </div>
    </div>
  </footer>
  <script src="./assets/js/script.js"></script>
</body>
</html>