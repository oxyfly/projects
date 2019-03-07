<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- block 1 -->
    <section class="block-1">
        <div class="block-1-wrap">
            <div class="block-1-title-wrap">
                <h3 class="block-1-title-first-row" data-aos="fade-right" data-aos-duration="1000">Новая линейка</h3>
                <h3 class="block-1-title-second-row" data-aos="fade-left" data-aos-duration="1000">Продукции
                    grodfood</h3>
                <h3 class="block-1-title-third-row" data-aos="zoom-in-up" data-aos-duration="1000">со специями</h3>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2">
                        <div class="vegetables vegetable-1 vegetable-animate-1" data-aos="fade-right"
                             data-aos-duration="1000"></div>
                        <div class="vegetables vegetable-2 vegetable-animate-2" data-aos="fade-right"
                             data-aos-duration="1500"
                             data-aos-delay="300"></div>
                    </div>
                    <div class="col-2">
                        <div class="vegetables vegetable-3 vegetable-animate-3" data-aos="zoom-out-down"
                             data-aos-duration="1400"></div>
                        <div class="vegetables vegetable-4 vegetable-animate-4" data-aos="zoom-out-up"
                             data-aos-duration="1400"></div>
                        <div class="vegetables vegetable-5 vegetable-animate-5" data-aos="fade-down-left"
                             data-aos-duration="1000"
                             data-aos-delay="200"></div>
                    </div>
                    <div class="col-2">
                        <div class="vegetables vegetable-6 vegetable-animate-6" data-aos="fade-down"
                             data-aos-duration="1000" data-aos-delay="300"></div>
                        <div class="vegetables vegetable-7 vegetable-animate-7" data-aos-duration="1000"
                             data-aos="fade-up-right" data-aos-delay="400"></div>
                    </div>
                    <div class="col-2">
                        <div class="vegetables vegetable-8 vegetable-animate-8" data-aos="zoom-out"
                             data-aos-duration="1000"
                             data-aos-delay="1050"></div>
                        <div class="vegetables vegetable-pot-left" data-aos="zoom-in-right"
                             data-aos-duration="1000" data-aos-delay="400"></div>
                        <div class="vegetables vegetable-pot-right" data-aos="zoom-in-left"
                             data-aos-duration="1500" data-aos-delay="600"></div>
                    </div>
                    <div class="col-2">
                        <div class="vegetables vegetable-9 vegetable-animate-9" data-aos="fade-right"
                             data-aos-duration="1000"
                             data-aos-delay="1300"></div>
                        <div class="vegetables vegetable-10 vegetable-animate-10" data-aos="zoom-out-up"
                             data-aos-duration="1300"></div>
                    </div>
                    <div class="col-2">
                        <div class="vegetables vegetable-11 vegetable-animate-11" data-aos="fade-left"
                             data-aos-duration="2000"></div>
                        <div class="vegetables vegetable-12 vegetable-animate-12" data-aos="fade-left"
                             data-aos-duration="1400" data-aos-mirror="true"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- block 2 -->
    <section class="block-2" id="block-2">
        <div class="block-2-wrap-about">
            <h4 class="block-2-title-about" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">О
                продукте</h4>
            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <p class="block-2-about-description" data-aos="fade-right" data-aos-duration="1000">
                            Новая линейка мясных консерв с добавлением специй создана для любителей побаловать вкусовые
                            рецепторы смелыми гастрономи-ческими сочетаниями. Сочные тушёные кусочки отборной говядины и
                            свинины в гармонии с пикантными, жгучими пряностями могут быть самостоятельным блюдом или
                            стать аппетитным дополнением к любому гарниру. Добавьте разнообразие в свой привычный рацион
                            – попробуйте новые вкусы уже полюбившихся тушёнок высокого качества от «ГРОДФУД».
                        </p>
                    </div>
                    <div class="col-5">
                        <div class="block-2-about-col-7-img" data-aos="fade-left" data-aos-duration="1000"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-2-wrap-advantage">
            <h4 class="block-2-title-advantage" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
                Преимущества</h4>
            <div class="container block-2-wrap-advantage-container">
                <div class="row">
                    <div class="col-md-6 col-xl-6">
                        <div class="block-2-advantage-col-left-img-left" data-aos="fade-right" data-aos-duration="1000"
                             data-aos-delay="1000"></div>
                        <div class="block-2-advantage-col-left-img-right" data-aos="fade-right"
                             data-aos-duration="1000" data-aos-delay="500"></div>
                        <div class="block-2-advantage-col-left-img-leafs" data-aos="zoom-in-right"
                             data-aos-duration="1000"></div>
                    </div>
                    <div class="col-md-6 col-xl-6">
                        <div class="block-2-description-advantage-wrap">
                            <p class="block-2-description-advantage block-2-description-advantage-animation-1"
                               data-aos="fade-down" data-aos-delay="100">Только
                                отборное мясо</p>
                            <p class="block-2-description-advantage block-2-description-advantage-animation-2"
                               data-aos="fade-down" data-aos-delay="200">
                                Натуральные специи</p>
                            <p class="block-2-description-advantage block-2-description-advantage-animation-3"
                               data-aos="fade-down" data-aos-delay="300">Источник
                                протеина</p>
                            <p class="block-2-description-advantage block-2-description-advantage-animation-4"
                               data-aos="fade-down" data-aos-delay="400">Без
                                применения: жира сырца;<br> консервантов и
                                усилителей вкуса</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- block 3 -->
    <section class="block-3" id="block-3">
        <div class="block-3-title-wrap" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
            <h3 class="block-3-title-first-row">Каталог</h3>
            <h3 class="block-3-title-second-row">Линейки продукции grodfood</h3>
            <h3 class="block-3-title-third-row">со специями</h3>
        </div>
        <div class="cow-title-wrap" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
            <div class="cow-img"></div>
            <h3 class="cow-title">Тушеная говядина</h3>
        </div>
        <div class="cow-wrap">
            <div class="container cow-wrap-pos">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-xl-3">
                        <div class="beef-img-1" data-aos="fade-down-right" data-aos-duration="1000"></div>
                        <div class="beef-img-description beef-img-description-1" data-aos="zoom-in">
                            <p class="beef-img-description-text beef-img-description-text-align-1">С перцем чили</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xl-3">
                        <div class="beef-img-2" data-aos="fade-down" data-aos-duration="1000"></div>
                        <div class="beef-img-description beef-img-description-2" data-aos="zoom-in">
                            <p class="beef-img-description-text beef-img-description-text-align-2">С паприкой</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xl-3">
                        <div class="beef-img-3" data-aos="fade-down" data-aos-duration="1000"></div>
                        <div class="beef-img-description beef-img-description-3" data-aos="zoom-in">
                            <p class="beef-img-description-text beef-img-description-text-align-3">С томатом и<br>
                                перцем чили</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xl-3">
                        <div class="beef-img-4" data-aos="fade-down-left" data-aos-duration="1000"></div>
                        <div class="beef-img-description beef-img-description-4" data-aos="zoom-in">
                            <p class="beef-img-description-text beef-img-description-text-align-4">С кумином и<br> и
                                перцем чили</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pig-title-wrap" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
            <div class="pig-img"></div>
            <h3 class="pig-title">Тушеная свинина</h3>
        </div>
        <div class="pig-wrap">
            <div class="container pig-wrap-pos">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-xl-3">
                        <div class="pig-img-5" data-aos="fade-up-right" data-aos-duration="1000"></div>
                        <div class="pig-img-description pig-img-description-1" data-aos="zoom-in" data-aos-delay="300">
                            <p class="pig-img-description-text pig-img-description-text-align-1">С перцем чили</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xl-3">
                        <div class="pig-img-6" data-aos="fade-up" data-aos-duration="1000"></div>
                        <div class="pig-img-description pig-img-description-2" data-aos="zoom-in" data-aos-delay="300">
                            <p class="pig-img-description-text pig-img-description-text-align-2">С паприкой</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xl-3">
                        <div class="pig-img-7" data-aos="fade-up" data-aos-duration="1000"></div>
                        <div class="pig-img-description pig-img-description-3" data-aos="zoom-in" data-aos-delay="300">
                            <p class="pig-img-description-text pig-img-description-text-align-3">С томатом и<br>
                                перцем
                                чили</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xl-3">
                        <div class="pig-img-8" data-aos="fade-up-left" data-aos-duration="1000"></div>
                        <div class="pig-img-description pig-img-description-4" data-aos="zoom-in" data-aos-delay="300">
                            <p class="pig-img-description-text pig-img-description-text-align-4">С кумином и<br> и
                                перцем чили</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="arrow-top" src="/wp-content/themes/grodfoodspicy/dist/images/arrow-top.svg" alt="Image"
             title="Scroll Page">
    </section>
    <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>