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
    {{--    <div class="col-12 col-md-1 contact-header contact-header-lang contact-align">
            <div class="lang">
                    <span class="en_lang">EN
                        <span class="lang_separator"></span>
                    </span>
                <span class="cn_lang">CN</span>
            </div>
        </div>--}}
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
        {{--<a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>--}}
        <nav class="nav-primary">
            <figure class="logo-header">
                <a href="http://grodfood.by/">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <img class="logo" src="@asset('images/page-1/logo.svg')" alt="Logo" title="">
                            </div>
                            <div class="back">
                                <img class="logo" src="@asset('images/page-1/logo.svg')" alt="Logo" title="">
                            </div>
                        </div>
                    </div>
                    <img class="logo-fade" src="@asset('images/page-1/logo-fade.png')" alt="Logo" title="">
                </a>
            </figure>
            @if (has_nav_menu('primary_navigation'))
                <div class="container-fluid navbar-fade"></div>
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif
        </nav>
    </div>
</header>
