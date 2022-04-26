import detectBrowser from './utils/detectBrowser';
import objectFit from './utils/objectFit';
import AOS from './vendor/aos.js';


$(document).ready(() => {
  const body = document.querySelector('body')
  if ($(window).width() >= 768) {
    body.classList.add('loaded')
  }

  detectBrowser();
  objectFit();
  AOS.init();
})