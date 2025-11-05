const sidebar = document.getElementById('sidebar')
const mainContent = document.getElementById('mainContent')
const toggleSidebar = document.getElementById('toggleSidebar')
const overlay = document.getElementById('overlay')

function toggleSidebarMobile() {
  sidebar.classList.toggle('show')
  overlay.classList.toggle('show')
}

toggleSidebar.addEventListener('click', () => {
  if (window.innerWidth <= 768) {
    toggleSidebarMobile()
  } else {
    sidebar.classList.toggle('hide')
    mainContent.classList.toggle('full')
  }
})

overlay.addEventListener('click', () => {
  sidebar.classList.remove('show')
  overlay.classList.remove('show')
})
