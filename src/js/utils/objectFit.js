const objectFit = () =>{

  const objectFitImg = (imgContainer) => {
    $(imgContainer).each(function () {
      let $container = $(this),
        imgUrl = $container.find("img").prop("src");
      if (imgUrl) {
        $container.css("backgroundImage", 'url(' + imgUrl + ')').addClass("custom-object-fit");
      }
    });
  };

if($('body').hasClass('ie')) {
  objectFitImg('.js-object-fit');
}
};

export default objectFit;