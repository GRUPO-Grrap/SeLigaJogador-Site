// Carrossel

const carousel = document.querySelector(".carousel")

let isDragStart = false, prevPageX, prevScrollLeft

const dragStart = (e) => {
    isDragStart = true
    prevPageX = e.pageX || e.touches[0].pageX
    prevScrollLeft = carousel.scrollLeft
}

const dragging = (e) => {
    if(!isDragStart) return
    e.preventDefault()
    let positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX
    carousel.scrollLeft = prevScrollLeft - positionDiff
}

const dragStop = () => {
    isDragStart = false
}

carousel.addEventListener("mousedown", dragStart)
carousel.addEventListener("mousemove", dragging)
carousel.addEventListener("mouseup", dragStop)

carousel.addEventListener("touchstart", dragStart)
carousel.addEventListener("touchmove", dragging)
carousel.addEventListener("touchup", dragStop)

// Filtrar

// Obtém todos os botões de categoria
const categoryButtons = document.querySelectorAll('.card_category')

// Obtém todos os cards
const cards = document.querySelectorAll('.card')

// Adiciona o evento de clique a cada botão de categoria
categoryButtons.forEach(button => {
   button.addEventListener('click', () => {
      const categoriaSelecionada = button.getAttribute('data-categoria')

      // Filtra os cards com base na categoria selecionada
      cards.forEach(card => {
         const cardCategoria = card.getAttribute('data-categoria')

         // Verifica se o card possui a mesma categoria selecionada ou se é a categoria "todos"
         if (cardCategoria === categoriaSelecionada || categoriaSelecionada === 'todos') {
            card.style.display = 'block' // Exibe o card
         } else {
            card.style.display = 'none' // Oculta o card
         }
      })
   })
})
