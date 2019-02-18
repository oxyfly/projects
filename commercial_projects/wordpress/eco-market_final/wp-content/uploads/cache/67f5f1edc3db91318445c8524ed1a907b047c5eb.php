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
                                <img class="d-block w-100" src="/wp-content/themes/ecomarket/dist/images/slider-bg.jpg"
                                     alt="First slide">
                                <div class="carousel-caption d-md-block">
                                    <h5 class="carousel-caption-title">WORDS</h5>
                                    <p class="carousel-caption-description">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Aut deserunt facilis
                                        iste nisi numquam sed sunt vel velit voluptate voluptatem!</p>
                                    <a class="btn-slider" href="#">Купить сейчас</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/wp-content/themes/ecomarket/dist/images/slider-bg.jpg"
                                     alt="Second slide">
                                <div class="carousel-caption d-md-block">
                                    <h5 class="carousel-caption-title">WORDS</h5>
                                    <p class="carousel-caption-description">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Aut deserunt facilis
                                        iste nisi numquam sed sunt vel velit voluptate voluptatem!</p>
                                    <a class="btn-slider" href="#">Купить сейчас</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/wp-content/themes/ecomarket/dist/images/slider-bg.jpg"
                                     alt="Third slide">
                                <div class="carousel-caption d-md-block">
                                    <h5 class="carousel-caption-title">WORDS</h5>
                                    <p class="carousel-caption-description">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Aut deserunt facilis
                                        iste nisi numquam sed sunt vel velit voluptate voluptatem!</p>
                                    <a class="btn-slider" href="#">Купить сейчас</a>
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
                            <img src="/wp-content/themes/ecomarket/dist/images/product-block-photo/image-1.jpg"
                                 alt="Image"
                                 title="Акции">
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-4 product-block-hit-col">
                    <a href="/product-category/fitness/">
                        <div class="product-block-hit-wrap">
                            <img src="/wp-content/themes/ecomarket/dist/images/product-block-photo/image-2.jpg"
                                 alt="Image"
                                 title="Фитнес">
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-4 product-block-hit-col">
                    <a href="#">
                        <div class="product-block-hit-wrap">
                            <img src="/wp-content/themes/ecomarket/dist/images/product-block-photo/image-3.jpg" alt="">
                            
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="products-recommend">
        <h2 class="products-recommend-title">Рекомендуемые продукты</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/chulki-1">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/ecomarket/dist/images/giulia-small.jpg" alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/chulki-1"><p class="product-title"></p>GIULIA | Классические</a>
                        </div>
                        <p class="product-price">Цена: 10,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="#">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/chulki-2">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/ecomarket/dist/images/giulia-small.jpg" alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/chulki-2"><p class="product-title"></p>GIULIA | Классические</a>
                        </div>
                        <p class="product-price">Цена: 10,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="#">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/chulki-3">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/ecomarket/dist/images/giulia-small.jpg" alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/chulki-3"><p class="product-title"></p>GIULIA | Классические</a>
                        </div>
                        <p class="product-price">Цена: 10,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="#">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="/chulki-4">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/ecomarket/dist/images/giulia-small.jpg" alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="/chulki-4"><p class="product-title"></p>GIULIA | Классические</a>
                        </div>
                        <p class="product-price">Цена: 10,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="#">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="#">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/ecomarket/dist/images/giulia-small.jpg" alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="#"><p class="product-title"></p>GIULIA | Классические</a>
                        </div>
                        <p class="product-price">Цена: 10,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="#">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="#">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/ecomarket/dist/images/giulia-small.jpg" alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="#"><p class="product-title"></p>GIULIA | Классические</a>
                        </div>
                        <p class="product-price">Цена: 10,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="#">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="#">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/ecomarket/dist/images/giulia-small.jpg" alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="#"><p class="product-title"></p>GIULIA | Классические</a>
                        </div>
                        <p class="product-price">Цена: 10,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="#">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="product-recommend-block product-recommend-block-pos product-recommend-block-pos-bottom">
                        <a href="#">
                            <div class="product-recommend-img">
                                <img src="/wp-content/themes/ecomarket/dist/images/giulia-small.jpg" alt="Image"
                                     title="Product">
                            </div>
                        </a>
                        <div class="product-title-link">
                            <a href="#"><p class="product-title"></p>GIULIA | Классические</a>
                        </div>
                        <p class="product-price">Цена: 10,00 руб.</p>
                        <div class="btn-product-wrap">
                            <a class="btn-product" href="#">В корзину</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>