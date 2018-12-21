<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
    <section class="ornament ornament-top">
        <img src="/wp-content/themes/grodfood/dist/images/misc/ornament.png" alt="Image">
    </section>
    <nav aria-label="breadcrumb" class="breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="/catalog">Каталог</a></li>
            <li class="breadcrumb-item"><a href="/pate-page">Паштеты</a></li>
            <li class="breadcrumb-item"><a href="/pate-duck">Утиный</a></li>
        </ol>
    </nav>

    <section class="pate-product-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <div class="pate-product-block-1">
                        <div class="pate-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/pate-duck/001.jpg" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="pate-product-block-1">
                        <h3>Утиный печеночный</h3>
                        <ul class="pate-product-description-1">
                            <li>Упаковка: ламистер</li>
                            <li>Масса нетто, г: 50; 100; 105; 130</li>
                            <li>Срок годности: 2 года</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="pate-product-block-1">
                        <div class="pate-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/pate-duck/002.jpg" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="pate-product-block-1">
                        <h3>Утиный печеночный</h3>
                        <ul class="pate-product-description-1">
                            <li>Упаковка: ж/б + ключ easy-open</li>
                            <li>Масса нетто, г: 290</li>
                            <li>Количество штук в упаковке: 8</li>
                            <li>Количество упаковок на паллете: 240</li>
                            <li>Срок годности: 2 года</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ornament">
        <img src="/wp-content/themes/grodfood/dist/images/misc/ornament.png" alt="Image">
    </section>
    <section class="footer-img">
        <img src="/wp-content/themes/grodfood/dist/images/misc/footer-img.jpg" alt="Image">
    </section>
    <?php endwhile; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>