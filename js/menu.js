const siteMenu = () => {
    const menuButton = document.querySelector('.menu-button')
    const menuButtonClass = 'menu-button--active'
    const menu = document.querySelector('.site-menu')
    const menuClass = 'site-menu--visible'

    const header = document.querySelector('.site-header')
    const headerClass = 'site-header--menu-opened'

    const toggleMenu = () => {
        menu.classList.toggle(menuClass)
        header.classList.toggle(headerClass)
        menuButton.classList.toggle(menuButtonClass)
        
    }

    menuButton.addEventListener('click', toggleMenu)

}

siteMenu()