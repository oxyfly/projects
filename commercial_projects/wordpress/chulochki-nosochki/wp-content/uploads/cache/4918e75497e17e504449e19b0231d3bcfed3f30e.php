<header class="banner">
    <div class="container">
        
        <nav class="nav-primary">
            <?php if(has_nav_menu('primary_navigation')): ?>
                <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

                <a href="http://server-007/">
                    <div class="header-logo-wrap">
                        <img class="header-logo" src="/wp-content/themes/chulochki/dist/images/logo.svg"
                             alt="Image" title="Logo">
                    </div>
                </a>
            <?php endif; ?>
            <div class="nav-product-block-wrap">
                <div class="nav-product-block">
                    <ul>
                        <li>
                            <a href="#">
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
                    <ul class="women">
                        <li class='has-sub'><a href='#'><span></span>КОЛГОТКИ</a>
                            <ul>
                                <li><a href='#'><span></span>КОРРЕКТИРУЮЩИЕ</a></li>
                                <li><a href='#'><span></span>ФАНТАЗИЙНЫЕ</a></li>
                                <li class='last'><a href='#'><span></span>КЛАССИЧЕСКИЕ</a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='/product-category/chulki'><span></span>ЧУЛКИ</a></li>
                        <li class='has-sub'><a href='#'><span></span>НОСКИ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ГОЛЬФЫ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ВОДОЛАЗКИ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ЛЕГГИНСЫ</a></li>
                        <li class='has-sub'><a href='#'><span></span>БЕЛЬЕ</a>
                            <ul>
                                <li><a href='#'><span></span>МАЙКИ</a></li>
                                <li><a href='#'><span></span>ФУТБОЛКИ</a></li>
                                <li><a href='#'><span></span>БОДИ</a></li>
                                <li><a href='#'><span></span>ТРУСЫ</a></li>
                                <li><a href='#'><span></span>ТЕРМОБЕЛЬЕ</a></li>
                                <li><a href='#'><span></span>КОРСЕТНОЕ БЕЛЬЕ</a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span></span>ОДЕЖДА ДЛЯ ФИТНЕСА</a></li>
                        <li class='has-sub'><a href='#'><span></span>ШАРФЫ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ПЛАТКИ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ПАЛАНТИНЫ</a></li>
                        <li class='has-sub'><a href='#'><span></span>КУПАЛЬНИКИ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ГОЛОВНЫЕ УБОРЫ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ПИЖАМЫ</a></li>
                    </ul>
                </li>

                <li class='active has-sub'><a href='#'><span>МУЖЧИНАМ</span></a>
                    <ul class="men">
                        <li class='has-sub'><a href='#'><span></span>БЕЛЬЕ</a>
                            <ul>
                                <li><a href='#'><span></span>МАЙКИ</a></li>
                                <li><a href='#'><span></span>ФУТБОЛКИ</a></li>
                                <li><a href='#'><span></span>ТРУСЫ</a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>НОСКИ</span></a></li>
                        <li class='has-sub'><a href='#'><span>ТЕРМОБЕЛЬЕ</span></a></li>
                        <li class='has-sub'><a href='#'><span>ПИЖАМЫ</span></a></li>
                    </ul>
                </li>

                <li class='active has-sub'><a href='#'><span>ДЕВОЧКАМ</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span></span>КОЛГОТКИ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ГОЛЬФЫ</a></li>
                        <li class='has-sub'><a href='#'><span></span>НОСКИ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ТРУСЫ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ТЕРМОБЕЛЬЕ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ЛЕГГИНСЫ</a></li>
                        <li class='has-sub'><a href='#'><span></span>МАЙКИ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ФУТБОЛКИ</a></li>
                    </ul>
                </li>

                <li class='active has-sub last'><a href='#'><span>МАЛЬЧИКАМ</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span></span>КОЛГОТКИ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ГОЛЬФЫ</a></li>
                        <li class='has-sub'><a href='#'><span></span>НОСКИ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ТРУСЫ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ТЕРМОБЕЛЬЕ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ЛЕГГИНСЫ</a></li>
                        <li class='has-sub'><a href='#'><span></span>МАЙКИ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ФУТБОЛКИ</a></li>
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
