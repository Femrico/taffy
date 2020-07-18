<nav class="navbar-sticky">
    <div class="container">
        <div class="row">
            <div class="navbar navbar-expand-lg col-12 navbar-top">
                <a href="/" class="navbar-brand mr-3">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/logo.svg" class="logo" loading="lazy" alt="Femrico Logo | Shop iPhone Cases and Accessories">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mx-lg-4" id="navbarNav">
                    <ul class="navbar-nav">
                        <?php
                        $main_menu = wp_get_nav_menu_items('main-menu');
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
                <div class="navbar-toolbar text-right">
                    <a class="toolbar-icon cart" href="<?= get_permalink(wc_get_page_id('cart')) ?>">
                        <i class="far fa-shopping-cart"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>