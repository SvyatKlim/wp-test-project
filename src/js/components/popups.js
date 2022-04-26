require('@fancyapps/fancybox/dist/jquery.fancybox');

const popups = (btn) => {
  $(btn).each((i, el) => {
    let popup = $(el).data('href');
    $(el).on('click', () => {
      $.fancybox.open({
        src: popup,
        keyboard: false,
        closeExisting: true,
        infobar: false,
        autoFocus: false,
        buttons: [
          "close"
        ],
        backFocus: false,
        btnTpl: {
          smallBtn: '<button data-fancybox-close="" class="fancybox-button fancybox-button--close" title="Close"><svg class="btn-close"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
            '<path d="M13.7864 12.001L23.6301 2.15732C24.1233 1.664 24.1233 0.864225 23.6301 0.37096C23.1368 -0.122351 22.3369 -0.122351 21.8437 0.37096L12 10.2146L2.15634 0.37096C1.66303 -0.122351 0.863248 -0.122351 0.369984 0.37096C-0.123281 0.864272 -0.123328 1.66405 0.369984 2.15732L10.2136 12.001L0.369984 21.8446C-0.123328 22.3379 -0.123328 23.1377 0.369984 23.6309C0.863295 24.1243 1.66308 24.1242 2.15634 23.6309L12 13.7873L21.8436 23.6309C22.3369 24.1243 23.1367 24.1242 23.63 23.6309C24.1232 23.1376 24.1232 22.3379 23.63 21.8446L13.7864 12.001Z" />\n' +
            '</svg>\n</button>'
        },
      });
    });
  });

};

export default popups;