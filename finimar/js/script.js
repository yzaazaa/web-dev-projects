const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navLinks = document.getElementsByClassName('nav__links')[0]
const header = document.getElementsByClassName('header_wrapper')[0]

toggleButton.addEventListener('click', () => {
  navLinks.classList.toggle('active')
  header.classList.toggle('active')
})