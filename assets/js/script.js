function menuToggle() {
  const menuButton = document.querySelector('.menu-toggle')
  const menuList = document.querySelector('.nav-list')

  function openMenu() {
    menuList.classList.toggle('ativo')
    menuButton.classList.toggle('ativo')
  }

  menuButton.addEventListener('click', openMenu)
}
menuToggle()

function initSlider() {
  const slides = document.querySelectorAll('.slider-content')

  if(slides.length > 0) {
    let i = 0
    setInterval(() => {
      slides[i].classList.remove('ativo')
      i++
      if(i > 3) {
        i = 0
      }
      slides[i].classList.add('ativo')
    }, 4000)
  }
}
initSlider()

const btnAlg = document.getElementById('python')

function filterJs() {
  if (btnAlg) {
    const btnCalc = document.getElementById('calc')
    const btnLp = document.getElementById('lp')

    const aulasAlg = document.getElementById('python-alg')
    const aulasCalc = document.getElementById('calc-1')
    const aulasLp = document.getElementById('lp-c')

    function filterCadeirasAlg() {
      if (aulasCalc.classList.contains('ativo')) {
        aulasCalc.classList.remove('ativo')
        btnCalc.parentNode.classList.remove('ativo')
      }
      if (aulasLp.classList.contains('ativo')) {
        aulasLp.classList.remove('ativo')
        btnLp.parentNode.classList.remove('ativo')
      }
      aulasAlg.classList.add('ativo')
      btnAlg.parentNode.classList.add('ativo')
    }

    function filterCadeirasCalc() {
      if (aulasAlg.classList.contains('ativo')) {
        aulasAlg.classList.remove('ativo')
        btnAlg.parentNode.classList.remove('ativo')
      }
      if (aulasLp.classList.contains('ativo')) {
        aulasLp.classList.remove('ativo')
        btnLp.parentNode.classList.remove('ativo')
      }
      aulasCalc.classList.add('ativo')
      btnCalc.parentNode.classList.add('ativo')
    }

    function filterCadeirasLp() {
      if (aulasCalc.classList.contains('ativo')) {
        aulasCalc.classList.remove('ativo')
        btnCalc.parentNode.classList.remove('ativo')
      }
      if (aulasAlg.classList.contains('ativo')) {
        aulasAlg.classList.remove('ativo')
        btnAlg.parentNode.classList.remove('ativo')
      }
      aulasLp.classList.add('ativo')
      btnLp.parentNode.classList.add('ativo')
    }

    btnAlg.addEventListener('click', filterCadeirasAlg)
    btnCalc.addEventListener('click', filterCadeirasCalc)
    btnLp.addEventListener('click', filterCadeirasLp)
  }
}
filterJs()

const menu = document.getElementById('dropdown')

menu.addEventListener('click', handleClick)
const largura = screen.availWidth

function handleClick(event) {
  if(largura > 800) {
    this.classList.toggle('active')
  }
}

console.log(largura)