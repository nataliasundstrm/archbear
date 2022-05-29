const currentSlideEl = document.querySelector('.slider__current')
const slides = document.querySelectorAll('.swiper-slide')
const currentAnchorEl = document.querySelector('.slider__anchor')

const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    effect: 'fade',
  
    // Navigation arrows
    navigation: {
      nextEl: '.slider__arrow--right',
      prevEl: '.slider__arrow--left',
    },

    // Change number in pagination 
   on: {
       transitionEnd: function () {

        // Set current slide number 
        let currentIndex = this.realIndex + 1 

        if (currentIndex < 10 ) {
            currentIndex = "0" + currentIndex
        }
           currentSlideEl.innerHTML = currentIndex

        // Change Anchor - ex City Hall - Muchen
        const anchorName = slides[this.realIndex].querySelector('.anchor-name')

        currentAnchorEl.innerHTML = anchorName.innerHTML

       }
   }
  
  });

  const slideCounter = () => {
      const totalSlidesEl = document.querySelector('.slider__total')
      const slides = document.querySelectorAll('.hero .swiper-slide')

    //  Det totala antalet slides (3) 
      let totalSlides = slides.length - 2

    // Ger oss nollan framför sifrran 3 
      if (totalSlides < 10) {
          totalSlides = "0" + totalSlides
      }

      totalSlidesEl.innerHTML = totalSlides 
  }

  slideCounter()


  const projectSlider = new Swiper('.projects', {
    slidesPreView: 3, // ger oss slideffekten, hur många project den "bläddrar" i taget
    spaceBetween: 48,
    grabCursor: true,
    freeMode: {
      enabled: true,
    }

  })
  