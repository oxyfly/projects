<header class="banner">
    <div class="header-top" id="header-top" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="400">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <a href="/">
                        <div class="logo-wrap"></div>
                    </a>
                </div>
                <div class="col-2">
                    <a class="location-link"
                       href="https://yandex.com/maps/?um=constructor%3Ad141a15217be3a9b481fa9cd25c26630ae943665441359dcfd30494e8aaa1be9&source=constructorLink"
                       target="_blank">
                        <div class="location-logo-wrap">
                            <div class="location-wrap">
                                <p class="location-title">Наш адрес:</p>
                                <p class="location-description">г. Гродно, ул. Кирова 45</p>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-2">
                    <a href="tel:+375292232111" class="phone-link">
                        <div class="phone-logo-wrap">
                            <div class="phone-wrap">
                                <p class="phone-title">Номер для связи:</p>
                                <p class="phone-description">+375 29 22 32 111 МТС<br>
                                    +375 29 66 32 111 Velcom</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-2">
                    <a class="time-link" href="#" onclick="timeLink()">
                        <div class="time-logo-wrap">
                            <div class="time-wrap">
                                <p class="time-title">Мы работаем:</p>
                                <p class="time-description">08:00 - 20:00</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
      function timeLink() {
        swal("Мы работаем:", "08:00 - 20:00");
      }
    </script>
    <hr style="margin-top: 0; margin-bottom: 0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">

    <div class="container-fluid">
        {{--    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>--}}

        <nav class="nav-primary">
            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif
            <div class="social">
                <a href="https://www.instagram.com/grodnobrow.by" target="_blank">
                    <img src="/wp-content/themes/browbar/dist/images/icons/instagram-logo-1.png"
                         alt="icon"></a>

            </div>
        </nav>
    </div>
</header>
