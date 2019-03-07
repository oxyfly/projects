<header class="banner">
    <div class="container">
        <nav class="nav-primary" data-aos="zoom-in-down" data-aos-duration="2000">
            <a href="http://grodfood.by" target="_blank">
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                        <div class="front">
                            <img class="logo"
                                 src="/wp-content/themes/grodfoodspicy/dist/images/header-logo.svg" alt="Logo"
                                 title="">
                        </div>
                        <div class="back">
                            <img class="logo"
                                 src="/wp-content/themes/grodfoodspicy/dist/images/header-logo.svg" alt="Logo"
                                 title="">
                        </div>
                    </div>
                </div>
            </a>
            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif
        </nav>
    </div>
</header>
