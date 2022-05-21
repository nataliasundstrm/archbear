const addClassOnScroll = () => {

    const header = document.querySelector('.site-header')
    const scrollClass = 'site-header--scrolled'
    const distanceFromTop = 200 

    const addClass = () => {

        if (window.scrollY > distanceFromTop) {
            header.classList.add(scrollClass)
        } else {
            header.classList.remove(scrollClass)
        }

    }

    // Lyssnar efter att vi gör n¨tt i webbläsarfönstret 
    window.addEventListener('scroll', addClass)

}

addClassOnScroll()