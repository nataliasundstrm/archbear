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

    // Add count to Menu Items 
    const menuItems = menu.querySelectorAll('.menu .menu-item')
    let i = 1 // förändringsbar variabel

    menuItems.forEach(item => {

        const countEl = document.createElement('span') // Vi skapar ett span element 
        countEl.classList.add('menu__count') // ger vårt span element, en class
        countEl.innerText = `0${i}.` // sifforna i span elementet får en nolla framför sig 

        // letar efter en länk i DENNA loop dvs. "item" ( det olika menyalternativen)
        const linkEl = item.querySelector('a')

        // placerar siffran framför menyalternativet
        item.insertBefore(countEl, linkEl)

        i++ // att siffan ökar för varje menyalternativ ex. 01, 02, 03 osv. 
    })

}

siteMenu()