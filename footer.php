<footer class="pt-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="footer-nav">
                    <h5 class="title">
                        Shop Departments
                    </h5>
                    <ul>
                        <li><a href="/shop/">Shop All</a></li>
                        <li><a href="/iphone-cases/">iPhone Cases</a></li>
                        <li><a href="/samsung-cases/">Samsung Cases</a></li>
                        <li><a href="/accessories/">Accessories</a></li>
                    </ul>
                </div>
                <div class="footer-nav">
                    <h5 class="title">
                        Themes
                    </h5>
                    <ul>
                        <li><a href="/shop/">Shop All</a></li>
                        <li><a href="/glitter-cases/">Glitter</a></li>
                        <li><a href="/vaporwave-cases/">Vaporwave</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="footer-nav">
                    <h5 class="title">
                        Shipping & Order Info
                    </h5>
                    <ul>
                        <li><a href="/contact-us/">Your Account</a></li>
                        <li><a href="/order-tracking/">Order Tracking</a></li>
                        <li><a href="/shipping-policy/">Shipping Policy</a></li>
                        <li><a href="/returns-policy/">Returns Policy</a></li>
                        <li><a href="/faqs/">FAQs</a></li>
                    </ul>
                </div>
                <div class="footer-nav">
                    <h5 class="title">
                        About Us
                    </h5>
                    <ul>
                        <li><a href="/contact-us/">About Company</a></li>
                        <li><a href="/contact-us/">Contact Us</a></li>
                        <li><a href="/contact-us/">Careers</a></li>
                        <li><a href="/blog/">News</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="subscribe">
                    <h5 class="title">
                        Stay informed
                    </h5>
                    <form class="input-group mb-1">
                        <span class="input-group-overlay text-muted"><i class="far fa-envelope"></i></span>
                        <input class="form-control email" type="text" placeholder="Your email">
                        <input type="submit" value="Subscribe" class="btn btn-primary">
                    </form>
                    <p>Subscribe to our newsletter to receive early discount offers, updates, and new product info.</p>
                </div>
                <div class="social">
                    <h5 class="title">
                        Follow Us
                    </h5>
                    <div class="buttons">
                        <a href="https://www.facebook.com/thefemrico/" target="_blank" rel="nofollow noopener" class="btn btn-social facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" target="_blank" rel="nofollow noopener" class="btn btn-social twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/femrico/" target="_blank" rel="nofollow noopener" class="btn btn-social instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.pinterest.com/femrico/boards/" target="_blank" rel="nofollow noopener" class="btn btn-social pinterest"><i class="fab fa-pinterest-p"></i></a>
                        <a href="https://www.etsy.com/shop/femrico/" target="_blank" rel="nofollow noopener" class="btn btn-social etsy"><i class="fab fa-etsy"></i></a>
                        <!-- <a href="#" target="_blank" rel="nofollow" class="btn btn-social youtube"><i class="fab fa-youtube"></i></a> -->
                    </div>
                </div>
                <div class="phone">
                    <h5 class="title">
                        Phone Support
                    </h5>
                    <div class="media">
                        <i class="fas fa-phone-alt fa-lg mr-2"></i>
                        <script>
                            var enc = window.atob("KzEgKDgzMikgNDIyIDgwODA=");
                            document.write("<a href='tel:" + enc + "'>" + enc + "</a>")
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-bottom pt-5 pb-3">
    <div class="container">
        <div class="row pb-3">
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="media">
                    <i class="fal fa-credit-card fa-3x pr-3"></i>
                    <div class="media-body">
                        <h6>Secure online payment</h6>
                        <p>We possess SSL / Secure certificate</p>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-3 col-sm-6 mb-3">
                <div class="media">
                    <i class="fal fa-shipping-fast fa-3x pr-3"></i>
                    <div class="media-body">
                        <h6>Fast &amp; free delivery</h6>
                        <p>Free delivery for all order over $200</p>
                    </div>
                </div>
            </div> -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="media">
                    <i class="fal fa-award fa-3x pr-3"></i>
                    <div class="media-body">
                        <h6>Money-back guarantee</h6>
                        <p>We return the money within 30 days</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="media">
                    <i class="fal fa-headset fa-3x pr-3"></i>
                    <div class="media-body">
                        <h6>24/7 customer support</h6>
                        <p>Friendly 24/7 customer support</p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr-light m-0 pb-4 mb-3" />
        <div class="row">
            <div class="col-md-6">
                <a href="/"><img src="<?= get_template_directory_uri() ?>/assets/images/logo.svg" class="logo mb-4" loading="lazy" alt="Femrico Logo | Shop iPhone Cases and Accessories"></a>
                <p class="mb-3">&copy; All right reserved. Made with <i class="fas fa-heart"></i> by Femrico.</p>
            </div>
            <div class="col-md-6">
                <div class="navbar-expand mb-2">
                    <ul class="navbar-nav justify-content-end">
                        <?php
                        $main_menu = wp_get_nav_menu_items('footer-menu');
                        foreach ($main_menu as $item) {
                        ?>
                            <li class="nav-item <?= implode(" ", $item->classes) ?>">
                                <a href="<?= $item->url ?>" class="nav-link"><?= $item->title ?></a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="payment-icons justify-content-end mb-3 pb-2">
                    <i class="fab fa-cc-visa"></i>
                    <i class="fab fa-cc-amex"></i>
                    <i class="fab fa-cc-mastercard"></i>
                    <i class="fab fa-cc-discover"></i>
                    <i class="fab fa-cc-paypal"></i>
                </div>
            </div>
        </div>
    </div>
</div>

                    <a class="back-to-top" href="javascript:void(0)" onclick="javascript:document.documentElement.scrollTop = 0">
    <i class="far fa-arrow-up"></i>
    <span>TOP</span>
</a>

<?php wp_footer(); ?>
<script type='text/javascript'>
    // Lucky Orange Tracking Code
    window.__lo_site_id = 232720;

    (function() {
        var wa = document.createElement('script');
        wa.type = 'text/javascript';
        wa.async = true;
        wa.src = 'https://d10lpsik1i8c69.cloudfront.net/w.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wa, s);
    })();

    // Hotjar Tracking Code
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1931943,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
</body>

</html>