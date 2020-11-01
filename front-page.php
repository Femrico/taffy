<?php
get_header();
?>

<section class="main-carousel">
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <a class="carousel-item active" href="/among-us-airpods-case/">
                <img src="/wp-content/uploads/2020/11/banner.jpg" alt="Shop Among Us AirPods Case | Femrico" class="d-none d-lg-block" loading="lazy">
                <img src="/wp-content/uploads/2020/11/banner-md.jpg" alt="Silicon AirPods Case | Femrico" class="d-none d-sm-block d-lg-none" loading="lazy">
                <img src="/wp-content/uploads/2020/11/banner-sm.jpg" alt="Silicon Among Us airpods case | Femrico" class="d-block d-sm-none" loading="lazy">
            </a>
        </div>
</section>

<section class="carousel-overlay">
    <div class="container">
        <div class="col-xl-8 col-lg-9 shadow-sm overlay-category-wrapper">
            <a href="/iphone-cases/">
                <img src="/wp-content/uploads/2020/07/iphone-2.jpg" alt="Shop iPhone Cases by Femrico | Glitter phone cases" loading="lazy">
                <h5>iPhone Cases</h5>
            </a>
            <a href="/samsung-cases/">
                <img src="/wp-content/uploads/2020/07/samsung-2.jpg" alt="Shop Samsung Phone Cases by Femrico | Galaxy Phone Cases" loading="lazy">
                <h5>Samsung Cases</h5>
            </a>
            <a href="/accessories/">
                <img src="/wp-content/uploads/2020/07/Mask-Group-2-1.jpg" alt="Shop iPhone Accessories by Femrico | Shop Airpod Accessories" loading="lazy">
                <h5>Accessories</h5>
            </a>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="category-block vaporwave">
                    <div class="text">
                        <div class="lead">Hurry up! Limited time offer</div>
                        <h4>Vaporwave Themed Cases</h4>
                        <a href="/vaporwave-cases/" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="category-block glitter">
                    <div class="text">
                        <div class="lead">New Collection!</div>
                        <h4>Sparkling Cases</h4>
                        <a href="/glitter-cases/" class="btn btn-primary">Shop Now</a>
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
                    <a href="/iphone-cases/" class="btn btn-primary btn-cta btn-lg">Shop iPhone Cases</a>
                </div>
            </div>
            <div class="col-md-6">
                <!-- <video src="<?= get_template_directory_uri() ?>/assets/videos/intro.mp4" muted playsinline autoplay loop></video> -->
                <img src="https://femrico.com/wp-content/uploads/2020/07/71OGUtahCbL._AC_SL1300_-e1594706598662.jpg" class="img-fluid mw-75 rounded">
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



<section class="mb-5 who-are-we">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="text">
                    <h2>
                        Who Are We?
                    </h2>
                    <p>
                        At Femrico, we’re fashion enthusiasts who want to help others enjoy the looks and
                        protection of their mobile devices. Unlike the generic store, we’re not the last step
                        of a long & overpriced distribution chain. We’re lifelong partners with years of
                        experience in the industry who want to give direct access to the best quality products
                        that’s out there - along with unlimited access to our friendly customer support and tech resources.
                    </p>
                    <div class="social dark-bg">
                        <div class="buttons">
                            <a href="https://www.facebook.com/thefemrico/" target="_blank" rel="nofollow noopener" class="btn btn-social facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" target="_blank" rel="nofollow noopener" class="btn btn-social twitter"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/femrico/" target="_blank" rel="nofollow noopener" class="btn btn-social instagram"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.pinterest.com/femrico/boards/" target="_blank" rel="nofollow noopener" class="btn btn-social pinterest"><i class="fab fa-pinterest-p"></i></a>
                            <a href="https://www.etsy.com/shop/femrico/" target="_blank" rel="nofollow noopener" class="btn btn-social etsy"><i class="fab fa-etsy"></i></a>
                            <!-- <a href="#" target="_blank" rel="nofollow" class="btn btn-social youtube"><i class="fab fa-youtube"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
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
                                    Elisha F.
                                </div>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="review">
                                    I got this iPhone 11 case and knew immediately I wanted a vaporwave themed case to go perfectly with it. Femrico had exactly what I needed...
                                </div>
                                <!-- <div class="date">
                                    2 days ago
                                </div> -->
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slide-inner">
                                <div class="review-by">
                                    Hui G.
                                </div>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="review">
                                    Satisfied, Case has a very good grip and design is as per photo.

                                    Have used for a month and prints
                                    did not fade
                                </div>
                                <!-- <div class="date">
                                    2 days ago
                                </div> -->
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slide-inner">
                                <div class="review-by">
                                    Anisa B.
                                </div>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="review">
                                    It is the best case I have ever bought from a case company as it keeps my phone very protected against any falls , it hasn’t left a scratch on the back of my phone , and keeps the front well maintained.
                                </div>
                                <!-- <div class="date">
                                    3 days ago
                                </div> -->
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slide-inner">
                                <div class="review-by">
                                    Abbie R.
                                </div>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="review">
                                    Phone case is great and durable!!!
                                </div>
                                <!-- <div class="date">
                                    3 days ago
                                </div> -->
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slide-inner">
                                <div class="review-by">
                                    Destiny C.
                                </div>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="review">
                                    I notoriously dislike cases. They’re usually bulky and not that cute (when it comes to Samsung). This one is a slim but sturdy design that makes me feel my phone has a chance if I drop it. Lol I LOVE the design and I didnt have to compromise the safety for looks. 🙂
                                </div>
                                <!-- <div class="date">
                                    2 days ago
                                </div> -->
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slide-inner">
                                <div class="review-by">
                                    Kylie
                                </div>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="review">
                                    I have had this phone case for a while now and it’s truly amazing. I drop my phone a lot and I haven’t broke it once except for a tiny scratch.
                                </div>
                                <!-- <div class="date">
                                    3 days ago
                                </div> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="category-block glitter">
                    <div class="text">
                        <div class="lead">New Collection!</div>
                        <h4>Sparkling Cases</h4>
                        <a href="/glitter-cases/" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="category-block vaporwave">
                    <div class="text">
                        <div class="lead">Hurry up! Limited time offer</div>
                        <h4>Vaporwave Themed Cases</h4>
                        <a href="/vaporwave-cases/" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();
?>