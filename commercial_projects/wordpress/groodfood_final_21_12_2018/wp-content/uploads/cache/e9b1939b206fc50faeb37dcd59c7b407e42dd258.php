<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
    <section class="ornament ornament-top ornament-stew">
        <img src="/wp-content/themes/grodfood/dist/images/misc/ornament.png" alt="Image">
    </section>
    <nav aria-label="breadcrumb" class="breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="http://grodfood.ruslanyushkevich.com/#catalog">Назад</a></li>
            <li class="breadcrumb-item"><a href="http://grodfood.ruslanyushkevich.com/stew-page">Тушенка</a></li>
            <li class="breadcrumb-item"><a href="http://grodfood.ruslanyushkevich.com/stew-turkey">Индейка в собственном соку</a></li>
        </ol>
    </nav>
    <section class="stew-product-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h3 class="stew-product-title-name">Индейка в собственном соку</h3>
                        <p class="stew-product-title-about">Уникальное предложение на рынке - консервы из мяса индеек без
                            костей. Гипоаллергенный, низкокалорийный продукт, подходит для диетического питания.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="stew-product-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <div class="stew-product-block-1">
                        <div class="stew-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-turkey/001.jpg" alt="Image">
                            <h3>Индейка в собственном соку</h3>
                            <ul class="stew-product-description-1">
                                <li>Массовая доля мяса по закладке: 97,4%</li>
                                <li>Масса нетто, г: 338</li>
                                <li>Срок годности: 2 года</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-img">
        <img class="footer-image-big" src="/wp-content/themes/grodfood/dist/images/misc/footer-img.jpg" alt="Image">
    </section>
    <?php endwhile; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>