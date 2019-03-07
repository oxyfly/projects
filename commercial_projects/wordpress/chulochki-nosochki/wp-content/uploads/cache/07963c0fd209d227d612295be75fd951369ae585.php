<header class="banner">
    <div class="container">
        
        <nav class="nav-primary">
            <?php if(has_nav_menu('primary_navigation')): ?>
                <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

                <a href="http://localhost:3000/">
                    <div class="header-logo-wrap">
                        <img class="header-logo" src="/wp-content/themes/chulochki/dist/images/logo.svg"
                             alt="Image" title="Logo">
                    </div>
                </a>
            <?php endif; ?>
            <div class="nav-product-block animated fadeInUp delay-4s">
                <ul>
                    <li>
                        <a href="#">
                            <img src="/wp-content/themes/chulochki/dist/images/icons/search.svg" title="Search"
                                 alt="Image">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/wp-content/themes/chulochki/dist/images/icons/bag.svg" title="Basket"
                                 alt="Image">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="nav-product">
            <div class="nav-product-pos">
                <div class="nav-product-item"><a class="nav-product-link" href="#">мёд</a></div>
                <div class="nav-product-item"><a class="nav-product-link" href="#">злаки</a></div>
                <div class="nav-product-item"><a class="nav-product-link" href="#">косметика</a></div>
                <div class="nav-product-item"><a class="nav-product-link" href="#">чай</a></div>
            </div>
        </div>
    </div>
</header>
