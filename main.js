var testimonialSlider = document.querySelector('.testimonial-slider .splide');

if (testimonialSlider) {
  new Splide(testimonialSlider, {
    type: 'loop',
    perPage: 3,
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

var productGallery = document.querySelector('.woocommerce-product-gallery .splide');

if (productGallery) {
  var singleProductSlider = new Splide(productGallery, {
    type: 'loop',
    perPage: 1,
    rewind: true,
    arrows: false,
    pagination: false,
    autoplay: false,
    pauseOnHover: true,
    drag: true,
    flickMaxPage: 4,
    flickPower: 500,
    flickVelocityThreshold: 0.5
  }).mount();
}

var galleryThumbnails = document.querySelectorAll('.gallery-thumbnails a');

for (i = 0; i < galleryThumbnails.length; i++) {
  galleryThumbnails[i].addEventListener('click', function (e) {
    document.querySelector('.gallery-thumbnails a.active').classList.remove('active');
    var el = e.currentTarget;
    el.classList.add('active');
  });
}
