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
  <title>Fáb de Software | PETComp</title>
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
        <li><a href="publicacoes.php">Publicações</a></li>
        <li><a href="biblioteca-pet-comp.php">Biblioteca PETComp</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="dev">
      <div class="dev-container">
        <div class="title">
          <h2>FÁBRICA DE SOFTWARE</h2>
        </div>
        <p>A Engenharia de Softwares é uma das vertentes mais fortes na área de Ciência da Computação. A construção de um software pode ser para fins administrativos, de pesquisa, entretenimento, etc. A atividade visa a coleta, criação e manutenção de softwares para a UFMA, também visa solucionar problemáticas da comunidade e projetos apoiados pela IES. Além disso, a atividade colabora juntamente para o ensino de tecnologias aos integrantes do grupo PET e para o compartilhamento desse conhecimento fazendo o uso de políticas de troca de conhecimento, pesquisa e desenvolvimento de tecnologias, e a extensão tecnológica.</p>
        <p>A atividade da continuidade às políticas já realizadas pelo PETComp. Os projetos serão adotados por toda a equipe, de forma que cada um se responsabiliza por algumas sub funcionalidades, usando de processos de desenvolvimento de software hábil a ser pesquisado pelos alunos, bem como metodologias para a gestão de atividades. O software que apresentar melhor desempenho no processo de ensino e aprendizagem será escolhido e produzido. Poderão ser produzidos durante o desenvolvimento da atividade: objetos de aprendizado, aplicações móveis para fins diversos, sistemas de informação, e sistemas computacionais para atender demandas, através das pesquisas realizadas em outras políticas desta proposta.</p>

        <div class="dev-cards">
          <div class="dev-card">
            <img src="./assets/images/eng-1.svg" alt="">
            <div class="card-description">
              <h3>Observatório Saúde Mental</h3>
              <div class="card-icons">
                <p class="php">PHP</p>
                <p class="html">HTML</p>
                <p class="css">CSS</p>
                <p class="js">JavaScript</p>
              </div>
            </div>
          </div>

          <div class="dev-card">
            <img src="./assets/images/eng-2.svg" alt="">
            <div class="card-description">
              <h3>COCOM</h3>
              <div class="card-icons">
                <p class="php">PHP</p>
                <p class="html">HTML</p>
                <p class="css">CSS</p>
                <p class="js">JavaScript</p>
              </div>
            </div>
          </div>

          <div class="dev-card">
            <img src="./assets/images/eng-3.svg" alt="">
            <div class="card-description">
              <h3>EAComp</h3>
              <div class="card-icons">
                <p class="html">HTML</p>
                <p class="css">CSS</p>
                <p class="js">JavaScript</p>
              </div>
            </div>
          </div>

          <div class="dev-card last">
            <img src="./assets/images/eng-4.png" alt="">
            <div class="card-description">
              <h3>MAMAPrev</h3>
              <div class="card-icons">
                <p class="react">React-Native</p>
                <p class="js">JavaScript</p>
              </div>
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