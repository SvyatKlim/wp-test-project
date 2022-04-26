// import Swiper from 'swiper';
import {accordionOpen, accordionClose} from  './accordion'
const Carousel = (container, type = 'mobile', accordionBtn = ".js-accordion", accordionContent = ".full-content") => {
  let slider = undefined;

  function initMobileSlider(){
    console.log('initMobileSlider');
    const width = $(window).width();

    if(width <= 768 && typeof slider === typeof undefined) {

      slider = new Swiper(container, {
        slidesPerView: 1,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          576: {
            slidesPerView: 2
          },
          320: {
            slidesPerView: 1.5
          },
        },
      });
      console.log('init', slider);
    } else{
      console.log('destroy', slider);
      if(typeof slider !== typeof undefined){
        slider.destroy(true, true);
        slider = undefined;
      }
    }
  }

  if (type === 'mobile') {
    initMobileSlider();
    $(window).on('resize', function () {
      initMobileSlider();
    })
  }

  if (type === 'desktop') {
    accordionOpen(accordionBtn);

    const swiper = new Swiper(container, {
      pagination: {
        el: ".swiper-pagination",
        type: "fraction",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
    swiper.on('slideChange', function () {
      accordionClose(accordionBtn);
    });
  }

}
export default Carousel;