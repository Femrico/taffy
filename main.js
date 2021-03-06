/*** TESTIMONIAL SLIDER ***/
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


/*** PRODUCT GALLERY SLIDER ***/
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
		destIndex = (destIndex + galleryThumbnails.length) % galleryThumbnails.length
		document.querySelector('.gallery-thumbnails a.active').classList.remove('active');
		galleryThumbnails[destIndex].classList.add('active');
	});
}


/*** PRODUCT UPDATE VARIATION PRICE ***/
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


/*** ADD WebP CLASS on BODY ***/
function canUseWebP() {
	var elem = document.createElement('canvas');

	if (!!(elem.getContext && elem.getContext('2d'))) {
		// was able or not to get WebP representation
		return elem.toDataURL('image/webp').indexOf('data:image/webp') == 0;
	}

	// very old browser like IE 8, canvas not supported
	return false;
}
window.addEventListener('load', function () {
	if (!canUseWebP()) {
		$('body').addClass('no-webp');
	}
})


/*** GO TO TOP BUTTON ***/
window.addEventListener('scroll', function () {
	var height = window.scrollY;

	if (height >= 600) {
		document.querySelector(".back-to-top").classList.add("active");
	} else {
		if (document.querySelector(".back-to-top").classList.contains("active")) {
			document.querySelector(".back-to-top").classList.remove("active");
		}
	}
});

function scrollTop() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}