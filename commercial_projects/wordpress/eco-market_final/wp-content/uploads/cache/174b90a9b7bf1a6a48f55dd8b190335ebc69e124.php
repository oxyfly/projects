<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <section class="product-slider">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 slider-bg-1"
                                     src="/wp-content/themes/ecomarket/dist/images/slider-bg-1.jpg"
                                     alt="First slide">
                                <img class="w-100 slider-bg-mobile-1"
                                     src="/wp-content/themes/ecomarket/dist/images/slider-bg-mobile-1.jpg"
                                     alt="First slide">
                                <div class="carousel-caption d-md-block">
                                    <h5 class="carousel-caption-title carousel-caption-title-1">НАТУРАЛЬНЫЙ МЁД<br> КФХ
                                        &laquo;МЕДОВАЯ
                                        СЕМЬЯ&raquo</h5>
                                    <div class="btn-slider-wrap">
                                        <a class="btn-slider"
                                           href="/product-category/honey-family">Купить сейчас</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 slider-bg-2"
                                     src="/wp-content/themes/ecomarket/dist/images/slider-bg-2.jpg"
                                     alt="Second slide">
                                <img class="w-100 slider-bg-mobile-2"
                                     src="/wp-content/themes/ecomarket/dist/images/slider-bg-mobile-2.jpg"
                                     alt="Second slide">
                                <div class="carousel-caption d-md-block">
                                    <h5 class="carousel-caption-title carousel-caption-title-2"><strong>МАКС
                                            МИРНЫЙ</strong> <i>РЕКОМЕНДУЕТ</i>
                                    </h5>
                                    <p class="carousel-caption-description carousel-caption-description-2">Удобное
                                        решение для офиса и дома.<br>
                                        25 медовых пакетиков, каждый по 15 гр.</p>
                                    <div class="btn-slider-wrap">
                                        <a class="btn-slider"
                                           href="/product/honey-natur-odnoporcionniy">Купить
                                            сейчас</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 slider-bg-3"
                                     src="/wp-content/themes/ecomarket/dist/images/slider-bg-3.jpg"
                                     alt="Third slide">
                                <img class="w-100 slider-bg-mobile-3"
                                     src="/wp-content/themes/ecomarket/dist/images/slider-bg-mobile-3.jpg"
                                     alt="Third slide">
                                <div class="carousel-caption d-md-block">
                                    <h5 class="carousel-caption-title carousel-caption-title-3">Продукция ООО &laquo;ЗДОРОВАЯ
                                        СТРАНА&raquo</h5>
                                    <p class="carousel-caption-description carousel-caption-description-3">Является
                                        одним из пионеров<br>
                                        развивающегося рынка органической<br> продукции в Беларуси.</p>
                                    <div class="btn-slider-wrap">
                                        <a class="btn-slider"
                                           href="/product-category/zdorovaya-strana">Купить сейчас</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-block-hit">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-4 product-block-hit-col">
                    <a href="/product-category/actions/">
                        <div class="product-block-hit-wrap">
                            <img src="/wp-content/themes/ecomarket/dist/images/product-block-photo/image-1.png"
                                 alt="Image"
                                 title="Акции">
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-4 product-block-hit-col">
                    <a href="/product-category/newest/">
                        <div class="product-block-hit-wrap">
                            <img src="/wp-content/themes/ecomarket/dist/images/product-block-photo/image-2.png"
                                 alt="Image"
                                 title="Новинки">
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-4 product-block-hit-col">
                    <a href="#">
                        <div class="product-block-hit-wrap">
                            <img src="/wp-content/themes/ecomarket/dist/images/product-block-photo/image-3.png" alt="">
                            
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="advertising-section">
        <div class="advertising-flex-container">
            <div class="advertising-flex-block">
                <div class="advertising-img-wrap advertising-img-wrap-1">
                    <a href="https://www.instagram.com/ecomarketby/" target="_blank">
                        <img class="advertising-img-1"
                             src="/wp-content/themes/ecomarket/dist/images/advertising-section/banner-1.jpg" alt="Image"
                             title="Instagram">
                    </a>
                </div>
            </div>
            <div class="advertising-flex-block">
                <div class="advertising-img-wrap">
                    <a href="tel:+375333643649">
                        <img class="advertising-img-2"
                             src="/wp-content/themes/ecomarket/dist/images/advertising-section/banner-2.jpg" alt="Image"
                             title="Телефон заказов">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="products-recommend">
        <div class="products-recommend-title">
            <div class="products-recommend-title-line-left"></div>
            <div class="products-recommend-title-size">Рекомендуемые ТОВАРЫ</div>
            <div class="products-recommend-title-line-right"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/product/cacao-vzbityj">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/ecomarket/dist/images/medoviy-shlyah/cacao-vzbityj.jpg"
                                     alt="Image"
                                     title="Мёд «взбитый» с фундуком и какао">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/cacao-vzbityj"><p class="product-title"></p>МЁД «ВЗБИТЫЙ» С ФУНДУКОМ И
                                КАКАО</a>
                        </div>
                        <p class="product-price">Цена: 5,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="/product/cacao-vzbityj">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/product/honey-natur-odnoporcionniy">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/ecomarket/dist/images/honey-mirniy/honey-natur-odnoporcionniy.jpg"
                                     alt="Image"
                                     title="Мёд натуральный «Однопорционный»">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/honey-natur-odnoporcionniy"><p class="product-title"></p>МЁД НАТУРАЛЬНЫЙ
                                «ОДНОПОРЦИОННЫЙ»
                            </a>
                        </div>
                        <p class="product-price">Цена: 14,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="/product/honey-natur-odnoporcionniy">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/product/propolis_dlia_zdorovia">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/ecomarket/dist/images/medoviy-shlyah/propolis_dlia_zdorovia.jpg"
                                     alt="Image"
                                     title="Мёд с прополисом">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/propolis_dlia_zdorovia"><p class="product-title"></p>МЁД С ПРОПОЛИСОМ</a>
                        </div>
                        <p class="product-price">Цена: 6,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="/product/propolis_dlia_zdorovia">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/product/honey-grechishniy">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/ecomarket/dist/images/honey-family/image-grechishniy.jpg"
                                     alt="Image"
                                     title="МЁД ГРЕЧИШНЫЙ, 350 г.">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/honey-grechishniy"><p class="product-title"></p>МЁД ГРЕЧИШНЫЙ, 350 г.</a>
                        </div>
                        <p class="product-price">Цена: 4,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="/honey-grechishniy">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/product/med_0004_sa">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/ecomarket/dist/images/medoviy-shlyah/med%20_0004_sa.jpg"
                                     alt="Image"
                                     title="Сувенирные мёды Набор №1">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/med_0004_sa"><p class="product-title"></p>СУВЕНИРНЫЕ МЁДЫ НАБОР №1
                            </a>
                        </div>
                        <p class="product-price">Цена: 8,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="/product/med_0004_sa">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/product/honey-mirniy-440">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/ecomarket/dist/images/honey-mirniy/honey-family-440.jpg"
                                     alt="Image"
                                     title="МИРНЫЙ МЁД, 440 г.">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/honey-mirniy-440"><p class="product-title"></p>МИРНЫЙ МЁД, 440 г.</a>
                        </div>
                        <p class="product-price">Цена: 6,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="/product/honey-mirniy-440">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/product/podarochnaya-seriya-family">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/ecomarket/dist/images/honey-family/image-suvenir.png"
                                     alt="Image"
                                     title="ПОДАРОЧНАЯ СЕРИЯ">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/podarochnaya-seriya-family"><p class="product-title"></p>ПОДАРОЧНАЯ СЕРИЯ</a>
                        </div>
                        <p class="product-price">Цена: 33,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="/product/podarochnaya-seriya-family">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/product/honey-family-natur-350">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/ecomarket/dist/images/honey-family/honey-family-natur-350.jpg"
                                     alt="Image"
                                     title="МЁД НАТУРАЛЬНЫЙ, 350
                                г.">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/honey-family-natur-350"><p class="product-title"></p>МЁД НАТУРАЛЬНЫЙ, 350
                                г.</a>
                        </div>
                        <p class="product-price">Цена: 6,50 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="/product/honey-family-natur-350">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>