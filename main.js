window.addEventListener('load', function () {
  var testimonialSlider = document.querySelector('.testimonial-slider .splide');

  if (window.innerWidth >= 992) {
    var perPage = 3;
    console.log(1);
  } else if (window.innerWidth >= 576) {
    var perPage = 2;
    console.log(2);
  } else {
    var perPage = 1;
    console.log(3);
  }

  if (testimonialSlider) {
    new Splide(testimonialSlider, {
      type: 'loop',
      perPage: perPage,
      rewind: true,
      arrows: false,
      autoplay: false,
      pauseOnHover: true,
      drag: true,
      flickMaxPage: 4,
      flickPower: 500,
      flickVelocityThreshold: 0.5
    }).mount();
  }
});
var productGallery = document.querySelector('.woocommerce-product-gallery .splide');

if (productGallery) {
  var singleProductSlider = new Splide(productGallery, {
    type: 'loop',
    perPage: 1,
    rewind: true,
    arrows: false,
    pagination: true,
    autoplay: false,
    pauseOnHover: true,
    drag: true,
    flickMaxPage: 4,
    flickPower: 500,
    flickVelocityThreshold: 0.5
  }).mount();
  var galleryThumbnails = document.querySelectorAll('.gallery-thumbnails a');
  singleProductSlider.on('move', function (newIndex, oldIndex, destIndex) {
    document.querySelector('.gallery-thumbnails a.active').classList.remove('active');
    galleryThumbnails[destIndex].classList.add('active');
  });
}
