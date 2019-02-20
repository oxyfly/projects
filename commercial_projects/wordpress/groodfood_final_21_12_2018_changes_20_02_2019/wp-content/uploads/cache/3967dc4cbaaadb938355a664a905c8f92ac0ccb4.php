<header class="banner">
    <div class="nav-mobile">
        <a class="mobile-logo-link" href="http://grodfood.by/">
            <img class="mobile-logo" src="/wp-content/themes/grodfood/dist/images/page-1/logo.svg" alt="">
        </a>
        <ul id="nav-mobile-menu">
            <li><a href="http://grodfood.by/about-common">О компании</a></li>
            <li><a href="http://grodfood.by/#catalog">Каталог</a></li>
            <li><a href="http://grodfood.by/contacts">Контакты</a></li>
        </ul>
        <a href="javascript:void(0);" class="burger-icon" onclick="burgerShow()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    
    <script>
      function burgerShow() {
        let x = document.getElementById("nav-mobile-menu");
        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "block";
        }
      }
    </script>

    <div class="container nav-wrap">
        
        <nav class="nav-primary">
            <figure class="logo-header">
                <a href="http://grodfood.by/">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <img class="logo" src="<?= App\asset_path('images/page-1/logo.svg'); ?>" alt="Logo" title="">
                            </div>
                            <div class="back">
                                <img class="logo" src="<?= App\asset_path('images/page-1/logo.svg'); ?>" alt="Logo" title="">
                            </div>
                        </div>
                    </div>
                    <img class="logo-fade" src="<?= App\asset_path('images/page-1/logo-fade.png'); ?>" alt="Logo" title="">
                </a>
            </figure>
            <?php if(has_nav_menu('primary_navigation')): ?>
                <div class="container-fluid navbar-fade"></div>
                <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

            <?php endif; ?>
        </nav>
    </div>
</header>
