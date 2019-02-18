<header class="banner">
    <div class="container">
        {{--<a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>--}}
        <nav class="nav-primary">
            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
                <a href="/">
                    <div class="header-logo-wrap">
                        <img class="header-logo" src="/wp-content/themes/chulochki/dist/images/logo.svg"
                             alt="Image" title="Logo">
                        <img class="header-logo-mobile-black"
                             src="/wp-content/themes/chulochki/dist/images/logo_mobile_black.svg"
                             alt="Image" title="Logo">
                    </div>
                </a>
            @endif
            <div class="nav-product-block-wrap">
                <div class="nav-product-block">
                    <ul>
                        <li>
                            <a href="/search">
                                <img src="/wp-content/themes/chulochki/dist/images/icons/search.svg"
                                     title="Поиск"
                                     alt="Image">
                            </a>
                        </li>
                        <li>
                            <a href="/cart">
                                <img class="basket" src="/wp-content/themes/chulochki/dist/images/icons/bag.svg"
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
                <li class='active has-sub'><a href='#'><span></span>ЖЕНЩИНАМ</a>
                    <ul class="honey">
                        <li class='has-sub'><a href='#'><span></span>КОЛГОТКИ</a>
                            <ul>
                                <li><a href='/product-category/kolgotki'><span></span>КАТАЛОГ КОЛГОТОК</a></li>
                                <li><a href='/product-category/korrektiruyuschie'><span></span>КОРРЕКТИРУЮЩИЕ</a></li>
                                <li><a href='/product-category/fantaziynie'><span></span>ФАНТАЗИЙНЫЕ</a></li>
                                <li><a href='/product-category/classic'><span></span>КЛАССИЧЕСКИЕ</a></li>
                                <li><a href='/product-category/botforti'><span></span>БОТФОРТЫ</a></li>
                                <li><a href='/product-category/cotton'><span></span>ХЛОПКОВЫЕ</a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='/product-category/chulki'><span></span>ЧУЛКИ</a></li>
                        <li class='has-sub'><a href='/product-category/noski'><span></span>НОСКИ</a></li>
                        <li class='has-sub'><a href='/product-category/golfi'><span></span>ГОЛЬФЫ</a></li>
                        {{--<li class='has-sub'><a href='/product-category/vodolazki'><span></span>ВОДОЛАЗКИ</a></li>--}}
                        <li class='has-sub'><a href='/product-category/leggins'><span></span>ЛЕГГИНСЫ</a></li>
                        <li class='has-sub'><a href='/product-category/belyo'><span></span>БЕЛЬЕ</a>
                            <ul>
                                <li><a href='/product-category/mayki'><span></span>МАЙКИ</a></li>
                                {{--<li><a href='/product-category/futbolki'><span></span>ФУТБОЛКИ</a></li>--}}
                                {{--<li><a href='/product-category/bodi'><span></span>БОДИ</a></li>--}}
                                <li><a href='/product-category/trusi'><span></span>ТРУСЫ</a></li>
                                {{--<li><a href='/product-category/termobelyo'><span></span>ТЕРМОБЕЛЬЕ</a></li>--}}
                                {{--<li><a href='/product-category/korset'><span></span>КОРСЕТ</a></li>--}}
                            </ul>
                        </li>
                        <li class='has-sub'><a href='/product-category/fitness'><span></span>ОДЕЖДА ДЛЯ ФИТНЕСА</a></li>
                        {{--<li class='has-sub'><a href='#'><span></span>ШАРФЫ</a></li>--}}
                        <li class='has-sub'><a href='#'><span></span>ПЛАТКИ</a></li>
                        {{--<li class='has-sub'><a href='#'><span></span>ПАЛАНТИНЫ</a></li>--}}
                        {{--<li class='has-sub'><a href='#'><span></span>КУПАЛЬНИКИ</a></li>--}}
                        {{--<li class='has-sub'><a href='#'><span></span>ГОЛОВНЫЕ УБОРЫ</a></li>--}}
                        {{--<li class='has-sub'><a href='#'><span></span>ПИЖАМЫ</a></li>--}}
                    </ul>
                </li>

                <li class='active has-sub'><a href='#'><span>МУЖЩИНАМ</span></a>
                    <ul class="cereals">
                        <li class='has-sub'><a href='#'><span></span>БЕЛЬЕ</a>
                            <ul>
                                {{--<li><a href='#'><span></span>МАЙКИ</a></li>--}}
                                {{--<li><a href='#'><span></span>ФУТБОЛКИ</a></li>--}}
                                <li><a href='#'><span></span>ТРУСЫ</a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>НОСКИ</span></a></li>
                        {{--<li class='has-sub'><a href='#'><span>ТЕРМОБЕЛЬЕ</span></a></li>--}}
                        {{--<li class='has-sub'><a href='#'><span>ПИЖАМЫ</span></a></li>--}}
                    </ul>
                </li>

                <li class='active has-sub'><a href='#'><span>ДЕВОЧКАМ</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span></span>КОЛГОТКИ</a></li>
                        {{--<li class='has-sub'><a href='#'><span></span>ГОЛЬФЫ</a></li>--}}
                        <li class='has-sub'><a href='#'><span></span>НОСКИ</a></li>
                        {{--<li class='has-sub'><a href='#'><span></span>ТРУСЫ</a></li>--}}
                        {{--<li class='has-sub'><a href='#'><span></span>ТЕРМОБЕЛЬЕ</a></li>--}}
                        {{--<li class='has-sub'><a href='#'><span></span>ЛЕГГЕНСЫ</a></li>--}}
                        {{--<li class='has-sub'><a href='#'><span></span>МАЙКИ</a></li>--}}
                        {{--<li class='has-sub'><a href='#'><span></span>ФУТБОЛКИ</a></li>--}}
                    </ul>
                </li>

                <li class='active has-sub last'><a href='#'><span>МАЛЬЧИКАМ</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span></span>КОЛГОТКИ</a></li>
                        {{--<li class='has-sub'><a href='#'><span></span>ГОЛЬФЫ</a></li>--}}
                        <li class='has-sub'><a href='#'><span></span>НОСКИ</a></li>
                        {{--<li class='has-sub'><a href='#'><span></span>ТРУСЫ</a></li>--}}
                        {{--<li class='has-sub'><a href='#'><span></span>ТЕРМОБЕЛЬЕ</a></li>--}}
                        {{--<li class='has-sub'><a href='#'><span></span>ЛЕГГЕНСЫ</a></li>--}}
                        {{--<li class='has-sub'><a href='#'><span></span>МАЙКИ</a></li>--}}
                        {{--<li class='has-sub'><a href='#'><span></span>ФУТБОЛКИ</a></li>--}}
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
    </div>
</header>
