<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
    <section class="ornament ornament-top">
        <img src="/wp-content/themes/grodfood/dist/images/misc/ornament.png" alt="Image">
    </section>
    <nav aria-label="breadcrumb" class="breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="/catalog">Каталог</a></li>
            <li class="breadcrumb-item"><a href="/stew-page">Тушенка</a></li>
            <li class="breadcrumb-item"><a href="/stew-horsemeat">Конина</a></li>
        </ol>
    </nav>
    <section class="stew-product-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h3 class="stew-product-title-name">Конина</h3>
                        <p class="stew-product-title-about">ТМ Гродфуд продолжила выпуск премиальной линейки мясной
                            консервации с содержанием мяса свыше 90% и выпустила в 2013 году широко востребованную
                            тушенку из конины.</p>
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
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-horsemeat/001.jpg" alt="Image">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-6">
                    <div class="stew-product-block-1">
                        <h3>Тушеная конина</h3>
                        <ul class="stew-product-description-1">
                            <li>Массовая доля мяса по закладке: 97,5%</li>
                            <li>Масса нетто, г: 338</li>
                            <li>Срок годности: 3 года</li>
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