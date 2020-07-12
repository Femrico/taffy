window.addEventListener('load', function () {
	var testimonialSlider = document.querySelector('.testimonial-slider .splide');

	if (window.innerWidth >= 992) {
		var perPage = 3;
	} else if (window.innerWidth >= 576) {
		var perPage = 2;
	} else {
		var perPage = 1;
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


window.addEventListener('load', function () {
	var variations = document.querySelectorAll('.variations select');
	if (variations.length > 0) {
		var defaultHTML = document.querySelector(".entry-summary .price").innerHTML;

		for (var i = 0; i < variations.length; i++) {
			variations[i].addEventListener('change', function () {

				setTimeout(function () { // waits for DOM update
					if (document.querySelector('.woocommerce-variation').style.display === "block") {
						firstTime = false;
						var updatedPrice = document.querySelector(".woocommerce-variation-price .price").innerHTML;
						document.querySelector(".entry-summary .price").innerHTML = updatedPrice;
					} else {
						document.querySelector(".entry-summary .price").innerHTML = defaultHTML;
					}
				}, 100);
			});
		}
	}
});