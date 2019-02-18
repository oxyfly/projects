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
                                <img class="w-100 slider-bg-1"
                                     src="/wp-content/themes/chulochki/dist/images/slider-bg-1.jpg"
                                     alt="Image">
                                <img class="w-100 slider-bg-mobile-1"
                                     src="/wp-content/themes/chulochki/dist/images/slider-bg-mobile-1.jpg"
                                     alt="Image">
                                <div class="carousel-caption d-md-block">
                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                     src="/wp-content/themes/chulochki/dist/images/slider-bg-2.jpg"
                                     alt="Image">
                                <div class="carousel-caption carousel-caption-second d-md-block">
                                    <h5 class="carousel-caption-title">ДЕТСКАЯ КОЛЛЕКЦИЯ</h5>
                                    <p class="carousel-caption-description">Для самых маленьких принцесс</p>
                                    <a class="btn-slider" href="#">Купить сейчас</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="w-100 slider-bg-3"
                                     src="/wp-content/themes/chulochki/dist/images/slider-bg-3.jpg"
                                     alt="Image">
                                <img class="w-100 slider-bg-mobile-3"
                                     src="/wp-content/themes/chulochki/dist/images/slider-bg-mobile-3.jpg"
                                     alt="Image">
                                <div class="carousel-caption carousel-caption-third d-md-block">
                                    <h5 class="carousel-caption-title carousel-caption-title-3">КОЛГОТКИ GIULIA</h5>
                                    <p class="carousel-caption-description">TM GIULIA<br>Комфорт и изысканность</p>
                                    <a class="btn-slider" href="/product-category/kolgotki">Купить сейчас</a>
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
                    <a href="/actions">
                        <div class="product-block-hit-wrap">
                            <img src="/wp-content/themes/chulochki/dist/images/product-block-photo/image-1.jpg"
                                 alt="Image"
                                 title="Акции и скидки">
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-4 product-block-hit-col">
                    <a href="/certificates">
                        <div class="product-block-hit-wrap">
                            <img src="/wp-content/themes/chulochki/dist/images/product-block-photo/image-2.jpg"
                                 alt="Image"
                                 title="Подарочные сертификаты">
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-4 product-block-hit-col">
                    <a href="/product-category/fitness">
                        <div class="product-block-hit-wrap">
                            <img src="/wp-content/themes/chulochki/dist/images/product-block-photo/image-3.jpg"
                                 alt="Image"
                                 title="">
                            
                        </div>
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
                        <a href="/product/giulia-adriana-02">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/chulochki/dist/images/product-description/cover-chulochki.jpg"
                                     alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/giulia-adriana-02"><p class="product-title"></p>Колготки Giulia Adriana 02</a>
                        </div>
                        <p class="product-price">Цена: 10,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="/product/giulia-adriana-02">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/product/giulia-afina-03">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/chulochki/dist/images/product-description/cover-chulochki.jpg"
                                     alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/giulia-afina-03"><p class="product-title"></p>Колготки Giulia Afina 03</a>
                        </div>
                        <p class="product-price">Цена: 10,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="/product/giulia-afina-03">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/product/giulia-afina-04">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/chulochki/dist/images/product-description/cover-chulochki.jpg"
                                     alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/giulia-afina-04"><p class="product-title"></p>Колготки Giulia Afina 04</a>
                        </div>
                        <p class="product-price">Цена: 10,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="/product/giulia-afina-04">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/product/giulia-afina-love-02">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/chulochki/dist/images/product-description/afina-love-02.jpg"
                                     alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/giulia-afina-love-02"><p class="product-title"></p>Колготки Giulia Afina
                                Love
                                02</a>
                        </div>
                        <p class="product-price">Цена: 10,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="/product/giulia-afina-love-02">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/product/giulia-alison-04">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/chulochki/dist/images/product-description/alison-04.jpg"
                                     alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/giulia-alison-04"><p class="product-title"></p>Колготки Giulia Alison
                                04</a>
                        </div>
                        <p class="product-price">Цена: 10,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="/product/giulia-alison-04">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/product/giulia-alison-05">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/chulochki/dist/images/product-description/alison-05.jpg"
                                     alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/giulia-alison-05"><p class="product-title"></p>Giulia Alison 05</a>
                        </div>
                        <p class="product-price">Цена: 10,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="/product/giulia-alison-05">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/product/giulia-asnly-01">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/chulochki/dist/images/product-description/asnly-01.jpg"
                                     alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/giulia-asnly-01"><p class="product-title"></p>Giulia Asnly 01</a>
                        </div>
                        <p class="product-price">Цена: 10,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="/product/giulia-asnly-01">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/product/giulia-blues-100">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/chulochki/dist/images/product-description/blues-100.jpg"
                                     alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/giulia-blues-100"><p class="product-title"></p>Giulia Blues 100</a>
                        </div>
                        <p class="product-price">Цена: 10,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="/product/giulia-blues-100">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>