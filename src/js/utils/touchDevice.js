const touchDevice = () => {

  function is_touch_device() {
    return (('ontouchstart' in window) || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0);
  }

  if ( is_touch_device() ) {
    $('body').addClass('touch');
  } else {
    $('body').addClass('no-touch');
  }

  return  is_touch_device();
};

export default touchDevice;