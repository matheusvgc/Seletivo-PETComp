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
  <title>PETComp</title>
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
        <li><a class="ativo" href="index.php">Início</a></li>
        <li><a href="sobre.php">Sobre Nós</a></li>
        <li id="dropdown">
          <p>Projetos</p>
          <ul class="dropdown-menu">
            <li><a href="monitoria.php">Monitoria</a></li>
            <li><a href="desenvolvimento.php">Fáb. de Software</a></li>
            <li><a href="oficinas.php">Minicursos e Oficinas</a></li>
          </ul>
        </li>
        <li><a href="publicacoes.php">Publicações</a></li>
        <li><a href="biblioteca-pet-comp.php">Biblioteca PETComp</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="slider">
      <div class="slider-container">
        <div class="slider-content ativo">
          <h1>Seja bem-vindo ao novo site PETComp</h1>
          <p>De cara nova e com muito mais informações!</p>
          <a href="#info">Conheça</a>
        </div>
        <div class="slider-content">
          <h1>Conheça nossa história</h1>
          <p>O grupo existe desde 2007 e desenvolve atividades de Monitoria, Desenvolvimento e Pesquisas</p>
          <a href="sobre.php">Conheça</a>
        </div>
        <div class="slider-content">
          <h1>Publicações</h1>
          <p>Leia os artigos e os trabalhos publicados pelos nossos alunos e professores</p>
          <a href="publicacoes.php">Conheça</a>
        </div>
        <div class="slider-content">
          <h1>Biblioteca Digital</h1>
          <p>Tenha acesso às mais diversas aulas e exercícios explicados e resolvidos</p>
          <a href="biblioteca-pet-comp.php">Conheça</a>
        </div>
      </div>
    </section>
    <section class="info" id="info">
      <div class="info-container">
        <div class="info-images">
          <div class="image1"></div>
          <div class="image2"></div>
          <div class="image3"></div>
          <div class="image4"></div>
        </div>

        <div class="info-text">
          <h1>Conheça o PETComp</h1>
          <p>O Programa de Educação Tutorial de Ciência da Computação da UFMA foi criado em 1 de Setembro de 2007, tendo como tutor o professor Alexandre César Muniz de Oliveira, em 19 de Janeiro de 2016 o professor Geraldo Braz Junior tornou-se o novo tutor do grupo. E após sua excelente gestão, em 2019 assume o professor Luis Rivero. O PET Computação já realizou diversas atividades de pesquisa, ensino e extensão. Dentre algumas das atividades podemos citar minicursos, Projetos de Extensão, como por exemplo, ensino de pensamento computacional, organiza o Encontro Acadêmico de Computação (EAComp), desenvolvimento de sistemas, entre outros.</p>
          <a href="sobre.php">Veja Mais ></a>
        </div>
      </div>
    </section>
    <section class="atividades">
      <div class="atividades-container">
        <div class="atividades-text">
          <h1>Atividades</h1>
          <p>O PETComp desenvolve diversas atividades. Clique em um dos cards para obter mais informações.</p>
        </div>
        <div class="cards-container">
          <div class="atividades-card">
            <div class="card-data">
              <img src="./assets/images/monitoria.png" alt="">
              <h2>Monitoria</h2>
            </div>
            <div class="mais">
              <a href="">Saiba mais</a>
            </div>
          </div>

          <div class="atividades-card">
            <div class="card-data">
              <img src="./assets/images/podcast.png" alt="">
              <h2>Podcast</h2>
            </div>
            <div class="mais">
              <a href="">Saiba mais</a>
            </div>
          </div>

          <div class="atividades-card">
            <div class="card-data">
              <img src="./assets/images/software.png" alt="">
              <h2>Fábrica de Software</h2>
            </div>
            <div class="mais">
              <a href="">Saiba mais</a>
            </div>
          </div>

          <div class="atividades-card">
            <div class="card-data">
              <img src="./assets/images/eventos.png" alt="">
              <h2>Organização de Eventos</h2>
            </div>
            <div class="mais">
              <a href="">Saiba mais</a>
            </div>
          </div>

          <div class="atividades-card">
            <div class="card-data">
              <img src="./assets/images/minicursos.png" alt="">
              <h2>Minicursos e Oficinas</h2>
            </div>
            <div class="mais">
              <a href="">Saiba mais</a>
            </div>
          </div>

          <div class="atividades-card">
            <div class="card-data">
              <img src="./assets/images/escrita.png" alt="">
              <h2>Expressão Escrita</h2>
            </div>
            <div class="mais">
              <a href="">Saiba mais</a>
            </div>
          </div>
        </div>
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