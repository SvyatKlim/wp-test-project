export function accordionOpen (btn, contentClass = '.js-accordion-hidden', parentClass = '.js-testimonials') {
  $(btn).each((i, el) => {
    $(el).on('click', (ev) => {

      $(el).addClass('active');
      let parent = $(btn).closest(parentClass),
        content = parent.find(contentClass);

      $(el).fadeOut();
      content.slideDown();
    })
  })
}

export function accordionClose(btn, contentClass = '.js-accordion-hidden', parentClass = '.js-testimonials') {
  let parent = $(btn).closest(parentClass),
    content = parent.find(contentClass);
  $(btn).removeClass('active');
  $(btn).fadeIn();
  content.slideUp();
}
