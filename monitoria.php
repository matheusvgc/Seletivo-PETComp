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
  <title>Sobre | PETComp</title>
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
    <section class="monitoria">
      <div class="monitoria-container">
        <div class="title">
          <h2>MONITORIA</h2>
        </div>
        <p>Visando combater problemas, como o alto índice de evasão dos cursos da área de tecnologia e o baixo rendimento dos alunos nas primeiras disciplinas que envolvem computação e cálculo, foi criado o GAD (Grupo de Acompanhamento de Discentes). Essa atividade serve como um grupo de estudos para os discentes que estão com dificuldade, além de ajudar na interação dos mesmos com outros alunos de períodos mais avançados do curso. Assim, ajudando e motivando os discentes a continuar no curso e a se interessar pelas disciplinas: Algoritmos 1, Cálculo 1 e Linguagem de Programação 1, sendo essas disciplinas de grande importância para o curso. Essa atividade, além de trazer o ensino e extensão, também envolve a pesquisa trazendo a formação criativa de novas práticas de ensino, apresentação e defesa de resultados.</p>
        <p>Os principais resultados esperados após a realização dessa atividade são melhoria no rendimento dos discentes que participaram das monitorias, o desenvolvimento de novas metodologias de ensino e uma maior união dos petianos com o resto dos discentes do curso. Os arquivos da monitoria podem ser vistos neste <a href="biblioteca-pet-comp" target="_blank">link</a>

        <div class="monitoria-imgs">
          <img src="./assets/images/mon-1.jpg" alt="">
          <img src="./assets/images/mon-2.jpg" alt="">
          <img src="./assets/images/mon-3.jpg" alt="">
          <img src="./assets/images/mon-4.jpg" alt="">
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