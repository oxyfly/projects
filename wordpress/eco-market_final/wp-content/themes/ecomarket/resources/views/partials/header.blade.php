<header class="banner">
    <div class="container">
        {{--<a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>--}}
        <nav class="nav-primary">
            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
                <a href="/">
                    <div class="header-logo-wrap">
                        <img class="header-logo" src="/wp-content/themes/ecomarket/dist/images/logo.svg"
                             alt="Image" title="Logo">
                    </div>
                </a>
            @endif
            <div class="nav-product-block-wrap">
                <div class="nav-product-block">
                    <ul>
                        <li>
                            <a href="/search">
                                <img src="/wp-content/themes/ecomarket/dist/images/icons/search.svg"
                                     title="Поиск"
                                     alt="Image">
                            </a>
                        </li>
                        <li>
                            <a href="/cart">
                                <img class="basket" src="/wp-content/themes/ecomarket/dist/images/icons/bag.svg"
                                     title="Корзина"
                                     alt="Image">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id='nav-products'>
            <ul>
                <li class='active has-sub'><a href='#'><span></span>МЁД</a>
                    <ul class="honey">
                        <li class='has-sub'><a href='/product-category/honey'><span></span>КАТАЛОГ ПРОДУКЦИИ</a></li>
                        <li class='has-sub'><a href='/product-category/honey-family'><span></span>МЕДОВАЯ СЕМЬЯ</a>
                            {{--<ul>--}}
                            {{--<li><a href='#'><span></span>МЁД</a></li>--}}
                            {{--<li><a href='#'><span></span>МЁД</a></li>--}}
                            {{--<li class='last'><a href='#'><span></span>МЁД</a></li>--}}
                            {{--</ul>--}}
                        </li>
                        <li class='has-sub'><a href='/product-category/honey-mirniy'><span></span>МИРНЫЙ МЁД</a></li>
                        <li class='has-sub'><a href='/product-category/zdorovaya-strana'><span></span>ЗДОРОВАЯ
                                СТРАНА</a></li>
                        <li class='has-sub'><a href='/product-category/medoviy-shlyah'><span></span>МЯДОВЫ
                                ШЛЯХ</a></li>
                        {{--<li class='has-sub'><a href='#'><span></span>ЛЕСНОЙ</a></li>--}}
                        {{--<li class='has-sub'><a href='#'><span></span>ОДНОПОРЦИОННЫЙ</a></li>--}}
                        {{--<li class='has-sub'><a href='#'><span></span>ПОДАРОЧНАЯ ПРОДУКЦИЯ</a></li>--}}
                    </ul>
                </li>

                <li class='active has-sub'><a href='#'><span>ЗЛАКИ</span></a>
                    {{--                    <ul class="cereals">
                                            <li class='has-sub'><a href='#'><span></span>ЗЛАКИ</a>
                                                <ul>
                                                    <li><a href='#'><span></span>ЗЛАКИ</a></li>
                                                    <li><a href='#'><span></span>ЗЛАКИ</a></li>
                                                    <li><a href='#'><span></span>ЗЛАКИ</a></li>
                                                </ul>
                                            </li>
                                            <li class='has-sub'><a href='#'><span>ЗЛАКИ</span></a></li>
                                            <li class='has-sub'><a href='#'><span>ЗЛАКИ</span></a></li>
                                            <li class='has-sub'><a href='#'><span>ЗЛАКИ</span></a></li>
                                        </ul>--}}
                </li>

                <li class='active has-sub'><a href='#'><span>КОСМЕТИКА</span></a>
                    {{--                    <ul>
                                            <li class='has-sub'><a href='#'><span></span>КОСМЕТИКА</a></li>
                                            <li class='has-sub'><a href='#'><span></span>КОСМЕТИКА</a></li>
                                            <li class='has-sub'><a href='#'><span></span>КОСМЕТИКА</a></li>
                                            <li class='has-sub'><a href='#'><span></span>КОСМЕТИКА</a></li>
                                            <li class='has-sub'><a href='#'><span></span>КОСМЕТИКА</a></li>
                                            <li class='has-sub'><a href='#'><span></span>КОСМЕТИКА</a></li>
                                            <li class='has-sub'><a href='#'><span></span>КОСМЕТИКА</a></li>
                                            <li class='has-sub'><a href='#'><span></span>КОСМЕТИКА</a></li>
                                        </ul>--}}
                </li>

                <li class='active has-sub last'><a href='#'><span>ЧАЙ</span></a>
                    <ul class="position-mobile">
                        <li class='has-sub'><a href='/product-category/tea'><span></span>КАТАЛОГ
                                ПРОДУКЦИИ</a>
                        <li class='has-sub'><a href='/product-category/gusto-botanico'><span></span>GUSTO BOTANICO</a>
                        </li>
                        <li class='has-sub'><a href='/product-category/fitotea'><span></span>ФИТОЧАЙ</a></li>
                        <li class='has-sub'><a href='/product-category/black-tea'><span></span>ЧАЙ ЧЁРНЫЙ</a></li>
                        {{--<li class='has-sub'><a href='#'><span></span>ЧАЙ</a></li>--}}
                        {{--<li class='has-sub'><a href='#'><span></span>ЧАЙ</a></li>--}}
                        {{--<li class='has-sub'><a href='#'><span></span>ЧАЙ</a></li>--}}
                        {{--<li class='has-sub'><a href='#'><span></span>ЧАЙ</a></li>--}}
                        {{--<li class='has-sub'><a href='#'><span></span>ЧАЙ</a></li>--}}
                    </ul>
                </li>
            </ul>
        </div>

        <div class="s-header__basket-wr woocommerce">
          <?php
          global $woocommerce; ?>
            <a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="basket-btn basket-btn_fixed-xs">
                <span class="basket-btn__label"></span>
                <span class="basket-btn__counter">(<?php echo sprintf($woocommerce->cart->cart_contents_count); ?>)</span>
            </a>
        </div>

        <div>
            <span class="basket-circle"></span>
        </div>

        {{--<div class="nav-product">--}}
        {{--<div class="nav-product-pos">--}}
        {{--<div class="nav-product-item"><a class="nav-product-link" href="/catalog/">ЖЕНЩИНАМ</a></div>--}}
        {{--<div class="nav-product-item"><a class="nav-product-link" href="/catalog/">МУЖЧИНАМ</a></div>--}}
        {{--<div class="nav-product-item"><a class="nav-product-link" href="/catalog/">ДЕВОЧКАМ</a></div>--}}
        {{--<div class="nav-product-item"><a class="nav-product-link" href="/catalog/">МАЛЬЧИКАМ</a></div>--}}
        {{--</div>--}}
        {{--</div>--}}
    </div>
</header>
