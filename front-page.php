<?php
get_header();
?>

<section class="main-carousel">
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <a class="carousel-item active" href="<?= get_permalink(wc_get_page_id('shop')) ?>">
                <img src="/wp-content/uploads/2020/07/banner.jpg">
            </a>
            <a class="carousel-item" href="<?= get_permalink(wc_get_page_id('shop')) ?>">
                <img src="/wp-content/uploads/2020/07/banner.jpg">
            </a>
        </div>
</section>

<section class="carousel-overlay">
    <div class="container">
        <div class="col-xl-8 col-lg-9 shadow-sm overlay-category-wrapper">
            <a href="/iphone-cases/">
                <img src="/wp-content/uploads/2020/07/iphone.jpg">
                <h5>iPhone Cases</h5>
            </a>
            <a href="/samsung-cases/">
                <img src="/wp-content/uploads/2020/07/samsung.jpg">
                <h5>Samsung Cases</h5>
            </a>
            <a href="/accessories/">
                <img src="/wp-content/uploads/2020/07/Mask-Group-2.jpg">
                <h5>Accessories</h5>
            </a>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="category-block">
                    <div class="text">
                        <div class="lead">Hurry up! Limited time offer</div>
                        <h4>Take advantage of Free Shipping</h4>
                        <a href="<?= get_permalink(wc_get_page_id('shop')) ?>" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="category-block vaporwave">
                    <div class="text">
                        <div class="lead">Hurry up! Limited time offer</div>
                        <h4>Vaporwave Themed Cases</h4>
                        <a href="/iphone-cases/" class="btn btn-primary">Shop Now</a>
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
                        Slimmest, Most Protective Phone Case
                    </h2>
                    <p>
                        With multi-layer construction of acrylic material, our cases are 6 ft drop test approved, no joke.
                    </p>
                    <a href="<?= get_permalink(wc_get_page_id('shop')) ?>" class="btn btn-primary btn-cta btn-lg">Shop iPhone Cases</a>
                </div>
            </div>
            <div class="col-md-6">
                <video src="<?= get_template_directory_uri() ?>/assets/videos/intro.mp4" muted playsinline autoplay loop></video>
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
            <?php
            $query = new WP_Query(array(
                'post_type' => 'product',
                'post_status' => 'publish',
                'posts_per_page' => 4,
                'tax_query' => array(array(
                    'taxonomy' => 'product_visibility',
                    'field'    => 'term_id',
                    'terms'    => 'featured',
                    'operator' => 'IN',
                ))
            ));

            while ($query->have_posts()) {
                $query->the_post();
                do_action('woocommerce_shop_loop');
                wc_get_template_part('content', 'product');
            }
            ?>
        </div>
        <div class="text-center">
            <a href="<?= get_permalink(wc_get_page_id('shop')) ?>" class="btn btn-dark btn-lg">View More</a>
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