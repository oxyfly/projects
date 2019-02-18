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
                                    <p class="carousel-caption-description carousel-caption-description-3">TM GIULIA<br>Комфорт
                                        и изысканность</p>
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
                        <a href="/product/giulia-pari-love-%D1%84%D0%B0%D0%BD%D1%82%D0%B0%D0%B7%D0%B8%D0%B9%D0%BD%D1%8B%D0%B5-%D0%BA%D0%BE%D0%BB%D0%B3%D0%BE%D1%82%D0%BA%D0%B8">
                            <div class="product-recommend-img">
                                <img src="/wp-content/uploads/2019/01/giulia-pari-love.jpg"
                                     alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/giulia-pari-love-%D1%84%D0%B0%D0%BD%D1%82%D0%B0%D0%B7%D0%B8%D0%B9%D0%BD%D1%8B%D0%B5-%D0%BA%D0%BE%D0%BB%D0%B3%D0%BE%D1%82%D0%BA%D0%B8">
                                <p class="product-title"></p>Giulia PARI LOVE, фантазийные колготки</a>
                        </div>
                        <p class="product-price">Цена: 12.50 р.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product"
                               href="/product/giulia-pari-love-%D1%84%D0%B0%D0%BD%D1%82%D0%B0%D0%B7%D0%B8%D0%B9%D0%BD%D1%8B%D0%B5-%D0%BA%D0%BE%D0%BB%D0%B3%D0%BE%D1%82%D0%BA%D0%B8">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/product/giulia-lovers-04-%D0%BA%D0%BE%D0%BB%D0%B3%D0%BE%D1%82%D0%BA%D0%B8-%D1%84%D0%B0%D0%BD%D1%82%D0%B0%D0%B7%D0%B8%D0%B9%D0%BD%D1%8B%D0%B5">
                            <div class="product-recommend-img">
                                <img src="/wp-content/uploads/2019/01/giulia-Lovers-04.jpg"
                                     alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/giulia-lovers-04-%D0%BA%D0%BE%D0%BB%D0%B3%D0%BE%D1%82%D0%BA%D0%B8-%D1%84%D0%B0%D0%BD%D1%82%D0%B0%D0%B7%D0%B8%D0%B9%D0%BD%D1%8B%D0%B5">
                                <p class="product-title"></p>Giulia LOVERS 04, колготки фантазийные</a>
                        </div>
                        <p class="product-price">Цена: 10.50 р.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product"
                               href="/product/giulia-lovers-04-%D0%BA%D0%BE%D0%BB%D0%B3%D0%BE%D1%82%D0%BA%D0%B8-%D1%84%D0%B0%D0%BD%D1%82%D0%B0%D0%B7%D0%B8%D0%B9%D0%BD%D1%8B%D0%B5">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/product/giulia-glory-01-%D1%87%D1%83%D0%BB%D0%BA%D0%B8">
                            <div class="product-recommend-img">
                                <img src="/wp-content/uploads/2019/01/giulia-glory-01.jpg"
                                     alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/giulia-glory-01-%D1%87%D1%83%D0%BB%D0%BA%D0%B8"><p
                                        class="product-title"></p>Колготки Giulia Afina 04</a>
                        </div>
                        <p class="product-price">Цена: 16.50 р.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="/product/giulia-glory-01-%D1%87%D1%83%D0%BB%D0%BA%D0%B8">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/product/%D1%87%D1%83%D0%BB%D0%BA%D0%B8-giulia-emotion-vision-rete-40-den">
                            <div class="product-recommend-img">
                                <img src="/wp-content/uploads/2019/01/emotion-rete-vision.jpg"
                                     alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/%D1%87%D1%83%D0%BB%D0%BA%D0%B8-giulia-emotion-vision-rete-40-den"><p
                                        class="product-title"></p>Чулки Giulia Emotion Vision Rete 40 Den</a>
                        </div>
                        <p class="product-price">Цена: 13.50 р.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product"
                               href="/product/%D1%87%D1%83%D0%BB%D0%BA%D0%B8-giulia-emotion-vision-rete-40-den">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/product/top-melange-sport-color">
                            <div class="product-recommend-img">
                                <img src="/wp-content/uploads/2019/02/giulia-top-sport-melange-color.jpg"
                                     alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/top-melange-sport-color"><p class="product-title"></p>TOP MELANGE SPORT
                                COLOR</a>
                        </div>
                        <p class="product-price">Цена: 20.50 р.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="/product/top-melange-sport-color">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/product/giulia-evelyn-02-%D1%84%D0%B0%D0%BD%D1%82%D0%B0%D0%B7%D0%B8%D0%B9%D0%BD%D1%8B%D0%B5-%D0%BA%D0%BE%D0%BB%D0%B3%D0%BE%D1%82%D0%BA%D0%B8">
                            <div class="product-recommend-img">
                                <img src="/wp-content/uploads/2019/01/evelyn-02-40.jpg"
                                     alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/giulia-evelyn-02-%D1%84%D0%B0%D0%BD%D1%82%D0%B0%D0%B7%D0%B8%D0%B9%D0%BD%D1%8B%D0%B5-%D0%BA%D0%BE%D0%BB%D0%B3%D0%BE%D1%82%D0%BA%D0%B8">
                                <p class="product-title"></p>Giulia EVELYN 02, фантазийные колготки</a>
                        </div>
                        <p class="product-price">Цена: 16.50 р.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product"
                               href="/product/giulia-evelyn-02-%D1%84%D0%B0%D0%BD%D1%82%D0%B0%D0%B7%D0%B8%D0%B9%D0%BD%D1%8B%D0%B5-%D0%BA%D0%BE%D0%BB%D0%B3%D0%BE%D1%82%D0%BA%D0%B8">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/product/%D1%81%D0%BF%D0%BE%D1%80%D1%82%D0%B8%D0%B2%D0%BD%D1%8B%D0%B9-%D0%B6%D0%B5%D0%BD%D1%81%D0%BA%D0%B8%D0%B9-%D1%82%D0%BE%D0%BF-giulia-top-sport-color">
                            <div class="product-recommend-img">
                                <img src="/wp-content/uploads/2019/02/giulia-top-sport-color.jpg"
                                     alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/%D1%81%D0%BF%D0%BE%D1%80%D1%82%D0%B8%D0%B2%D0%BD%D1%8B%D0%B9-%D0%B6%D0%B5%D0%BD%D1%81%D0%BA%D0%B8%D0%B9-%D1%82%D0%BE%D0%BF-giulia-top-sport-color">
                                <p class="product-title"></p>Спортивный женский топ GIULIA TOP SPORT COLOR</a>
                        </div>
                        <p class="product-price">Цена: 17.50 р.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product"
                               href="/product/%D1%81%D0%BF%D0%BE%D1%80%D1%82%D0%B8%D0%B2%D0%BD%D1%8B%D0%B9-%D0%B6%D0%B5%D0%BD%D1%81%D0%BA%D0%B8%D0%B9-%D1%82%D0%BE%D0%BF-giulia-top-sport-color">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/product/giulia-mania-120">
                            <div class="product-recommend-img">
                                <img src="/wp-content/uploads/2019/01/giulia-mania-120.jpg"
                                     alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/product/giulia-mania-120"><p class="product-title"></p>Giulia Mania 120</a>
                        </div>
                        <p class="product-price">Цена: 9.00 р.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="/product/giulia-mania-120">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>