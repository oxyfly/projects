<header class="banner">
    <div class="nav-mobile">
        <a href="http://grodfood.ruslanyushkevich.com">Главная</a>
        <ul id="nav-mobile-menu">
            <li><a href="#about">О компании</a>
                <ul class="sub-menu-mobile">
                    <li><a href="http://grodfood.ruslanyushkevich.com/about-history">История и политика
                        </a></li>
                    <li><a href="http://grodfood.ruslanyushkevich.com/about-awards">Дипломы и награды</a></li>
                </ul>
            </li>
            <li><a href="http://grodfood.ruslanyushkevich.com/catalog">Каталог</a></li>
            <li><a href="http://grodfood.ruslanyushkevich.com/consumer">Потребителям</a></li>
            <li><a href="http://grodfood.ruslanyushkevich.com/partner">Партнерам</a></li>
            <li><a href="http://grodfood.ruslanyushkevich.com/distribution">Дистрибуция</a></li>
            <li><a href="http://grodfood.ruslanyushkevich.com/contacts">Контакты</a></li>
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

    <div class="container-fluid contacts-header animated fadeInDown">
        <div class="row">
            <div class="col-12 col-md-2 contact-header contact-header-icon contact-align">
                <a href="https://www.google.com/maps/place/Miasnickaja+vulica+19,+Hrodna/@53.7217131,23.8232149,17z/data=!4m5!3m4!1s0x46e07f49a181d77d:0x7a199e26f9e9a4e0!8m2!3d53.7221858!4d23.8242307"
                   target="_blank">
                    <p class="contact-address contact-address-icon">Гродно, ул.Мясницкая, 16</p>
                </a>
            </div>
            <div class="col-12 col-md-2 contact-header contact-align">
                <a href="tel:+375152443000" class="contact-phone">+375 (152) 44 30 00</a>
            </div>
            <div class="col-12 col-md-2 contact-header contact-align">
                <a href="mailto:info@grodfood.by" class="contact-mail">info@grodfood.by</a>
            </div>
            <div class="col-12 col-md-3 contact-align">
                <span></span>
            </div>
            <div class="col-12 col-md-1 contact-header contact-align">
                <span class="contact-search"></span>
            </div>
            <div class="col-12 col-md-1 contact-header contact-align">
                <span class="contact-auth"></span>
            </div>
            <div class="col-12 col-md-1 contact-header contact-align">
                <div>
                <span class="en_lang">EN
                    <span class="lang_separator"></span>
                </span>
                    <span class="cn_lang">CN</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container nav-wrap">
        {{--<a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>--}}
        <nav class="nav-primary">
            <figure class="logo-header">
                <a href="http://grodfood.ruslanyushkevich.com/">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <img class="logo" src="@asset('images/page-1/logo.png')" alt="Logo" title="">
                            </div>
                            <div class="back">
                                <img class="logo" src="@asset('images/page-1/logo.png')" alt="Logo" title="">
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
