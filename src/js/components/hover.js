const hovers = (el, parentEl, typeofElement, onlyDiv = false) => {
    $(el).each((i, item) => {
      $(item).hover(function () {
        if (typeofElement === 'div') {
          $(item).addClass('hover');
        }
        if (!onlyDiv) {
          let a = $(this).closest(parentEl).find(`a`);
          if (a && a.length) {
            a.addClass('hover');
          }
        }
      }, function () {
        if (onlyDiv) {
          let a = $(this).closest(parentEl).find(`a`);
          if (a && a.length) {
            a.removeClass('hover');
          }
        }
        if (typeofElement === 'div') {
          $(item).removeClass('hover');
        }
      });
    });
};
export default hovers;
