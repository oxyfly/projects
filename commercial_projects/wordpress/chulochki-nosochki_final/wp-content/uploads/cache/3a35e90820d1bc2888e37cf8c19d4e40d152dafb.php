<header class="banner">
    <div class="container">
        
        <nav class="nav-primary">
            <?php if(has_nav_menu('primary_navigation')): ?>
                <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

                <a href="http://server-006/">
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
                <li class='active has-sub'><a href='#'><span></span>МЁД</a>
                    <ul class="honey">
                        <li class='has-sub'><a href='#'><span></span>МЁД</a>
                            <ul>
                                <li><a href='#'><span></span>МЁД</a></li>
                                <li><a href='#'><span></span>МЁД</a></li>
                                <li class='last'><a href='#'><span></span>МЁД</a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='/product-category/honey-name'><span></span>МЁД-НАЗВАНИЕ</a></li>
                        <li class='has-sub'><a href='#'><span></span>МЁД</a></li>
                        <li class='has-sub'><a href='#'><span></span>МЁД</a></li>
                        <li class='has-sub'><a href='#'><span></span>МЁД</a></li>
                        <li class='has-sub'><a href='#'><span></span>МЁД</a></li>
                        <li class='has-sub'><a href='#'><span></span>МЁД</a>
                            <ul>
                                <li><a href='#'><span></span>МЁД</a></li>
                                <li><a href='#'><span></span>МЁД</a></li>
                                <li><a href='#'><span></span>МЁД</a></li>
                                <li><a href='#'><span></span>МЁД</a></li>
                                <li><a href='#'><span></span>МЁД</a></li>
                                <li><a href='#'><span></span>МЁД</a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span></span>МЁД</a></li>
                        <li class='has-sub'><a href='#'><span></span>МЁД</a></li>
                        <li class='has-sub'><a href='#'><span></span>МЁД</a></li>
                        <li class='has-sub'><a href='#'><span></span>МЁД</a></li>
                        <li class='has-sub'><a href='#'><span></span>МЁД</a></li>
                        <li class='has-sub'><a href='#'><span></span>МЁД</a></li>
                        <li class='has-sub'><a href='#'><span></span>МЁД</a></li>
                    </ul>
                </li>

                <li class='active has-sub'><a href='#'><span>ЗЛАКИ</span></a>
                    <ul class="cereals">
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
                    </ul>
                </li>

                <li class='active has-sub'><a href='#'><span>КОСМЕТИКА</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span></span>КОСМЕТИКА</a></li>
                        <li class='has-sub'><a href='#'><span></span>КОСМЕТИКА</a></li>
                        <li class='has-sub'><a href='#'><span></span>КОСМЕТИКА</a></li>
                        <li class='has-sub'><a href='#'><span></span>КОСМЕТИКА</a></li>
                        <li class='has-sub'><a href='#'><span></span>КОСМЕТИКА</a></li>
                        <li class='has-sub'><a href='#'><span></span>КОСМЕТИКА</a></li>
                        <li class='has-sub'><a href='#'><span></span>КОСМЕТИКА</a></li>
                        <li class='has-sub'><a href='#'><span></span>КОСМЕТИКА</a></li>
                    </ul>
                </li>

                <li class='active has-sub last'><a href='#'><span>ЧАЙ</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span></span>ЧАЙ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ЧАЙ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ЧАЙ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ЧАЙ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ЧАЙ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ЧАЙ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ЧАЙ</a></li>
                        <li class='has-sub'><a href='#'><span></span>ЧАЙ</a></li>
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
