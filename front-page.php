<?php
get_header();
?>

<section class="main-carousel">
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <a class="carousel-item active" href="#">
                <img src="<?= get_template_directory_uri() ?> /assets/images/slide-1.jpg">
            </a>
            <a class="carousel-item" href="#">
                <img src="<?= get_template_directory_uri() ?> /assets/images/slide-1.jpg">
            </a>
            <a class="carousel-item" href="#">
                <img src="<?= get_template_directory_uri() ?> /assets/images/slide-1.jpg">
            </a>
        </div>
</section>

<section class="carousel-overlay">
    <div class="container">
        <div class="col-xl-8 col-lg-9 shadow-sm overlay-category-wrapper">
            <a href="#">
                <img src="<?= get_template_directory_uri() ?> /assets/images/samsung.jpg">
                <h5>Samsung</h5>
            </a>
            <a href="#">
                <img src="<?= get_template_directory_uri() ?> /assets/images/iphone.jpg">
                <h5>iPhone</h5>
            </a>
            <a href="#">
                <img src="<?= get_template_directory_uri() ?> /assets/images/Mask-Group-2.jpg">
                <h5>Accessories</h5>
            </a>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="category-block">
                    <div class="text">
                        <div class="lead">Hurry up! Limited time offer</div>
                        <h4>Converse All Star on Sale</h4>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="category-block vaporwave">
                    <div class="text">
                        <div class="lead">Hurry up! Limited time offer</div>
                        <h4>Converse All Star on Sale</h4>
                        <a href="/product-category/clothing" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-5 intro-video">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text">
                    <h2>
                        World's Slimmest, Most Protective Phone Case
                    </h2>
                    <p>
                        With a 2-layer construction of qitech™ material, our impact cases are 6.6 ft. drop test
                        approved, no joke.
                    </p>
                    <a href="#" class="btn btn-primary btn-cta btn-lg">Shop iPhone 11 Pro Case</a>
                </div>
            </div>
            <div class="col-md-6">
                <video src="<?= get_template_directory_uri() ?> /assets/videos/intro.mp4" muted playsinline autoplay
                    loop></video>
            </div>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="container py-5">
        <div class="text-center mb-4 pb-2">
            <h2>Best Sellers</h2>
        </div>
        <div class="product-grid mb-5 pb-2">
            <div class="card product-card">
                <a href="#">
                    <img src="<?= get_template_directory_uri() ?> /assets/images/product.png">
                </a>
                <div class="card-body">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <a href="#" class="title">Coconut, Indonesia (piece)</a>
                    <div class="action-bar">
                        <div class="price">
                            $10<small>.99</small>
                            <span class="strike">
                                $12<small>.99</small>
                            </span>
                        </div>
                        <a href="#" class="btn btn-primary btn-cta">+ <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
            <div class="card product-card">
                <a href="#">
                    <img src="<?= get_template_directory_uri() ?> /assets/images/product.png">
                </a>
                <div class="card-body">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <a href="#" class="title">Coconut, Indonesia (piece)</a>
                    <div class="action-bar">
                        <div class="price">
                            $10<small>.99</small>
                            <span class="strike">
                                $12<small>.99</small>
                            </span>
                        </div>
                        <a href="#" class="btn btn-primary btn-cta">+ <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
            <div class="card product-card">
                <a href="#">
                    <img src="<?= get_template_directory_uri() ?> /assets/images/product.png">
                </a>
                <div class="card-body">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <a href="#" class="title">Coconut, Indonesia (piece)</a>
                    <div class="action-bar">
                        <div class="price">
                            $10<small>.99</small>
                            <span class="strike">
                                $12<small>.99</small>
                            </span>
                        </div>
                        <a href="#" class="btn btn-primary btn-cta">+ <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
            <div class="card product-card">
                <a href="#">
                    <img src="<?= get_template_directory_uri() ?> /assets/images/product.png">
                </a>
                <div class="card-body">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <a href="#" class="title">Coconut, Indonesia (piece)</a>
                    <div class="action-bar">
                        <div class="price">
                            $10<small>.99</small>
                            <span class="strike">
                                $12<small>.99</small>
                            </span>
                        </div>
                        <a href="#" class="btn btn-primary btn-cta">+ <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#" class="btn btn-dark btn-lg">View More</a>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="container">
        <div class="testimonial-slider">
            <div class="text-center mb-4 pb-2">
                <h2>Customer Reviews</h2>
            </div>
            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="slide-inner">
                                <div class="review-by">
                                    James Hamilton
                                </div>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="review">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quasi tenetur ipsum
                                    animi
                                    sapiente nobis et
                                </div>
                                <div class="date">
                                    2 days ago
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slide-inner">
                                <div class="review-by">
                                    William Henry
                                </div>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="review">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                                </div>
                                <div class="date">
                                    3 days ago
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slide-inner">
                                <div class="review-by">
                                    James Parker
                                </div>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="review">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt amet consectetur
                                    adipisicing elit.
                                </div>
                                <div class="date">
                                    3 days ago
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slide-inner">
                                <div class="review-by">
                                    Ryan Gomez
                                </div>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="review">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quasi tenetur ipsum
                                    animi
                                    sapiente nobis et
                                </div>
                                <div class="date">
                                    2 days ago
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slide-inner">
                                <div class="review-by">
                                    Paul White
                                </div>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="review">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                                </div>
                                <div class="date">
                                    3 days ago
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slide-inner">
                                <div class="review-by">
                                    Jake Smith
                                </div>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="review">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt amet consectetur
                                    adipisicing elit.
                                </div>
                                <div class="date">
                                    3 days ago
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
get_footer();
?>