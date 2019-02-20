<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
    <section class="ornament ornament-top ornament-stew">
        <img src="/wp-content/themes/grodfood/dist/images/misc/ornament.png" alt="Image">
    </section>
    <nav aria-label="breadcrumb" class="breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="http://grodfood.by/#catalog">Назад</a></li>
            <li class="breadcrumb-item"><a href="/stew-spicy">Тушенка со специями</a></li>
            <li class="breadcrumb-item"><a href="/stew-spicy-pig">Свинина со специями</a></li>
        </ol>
    </nav>
    <section class="stew-product-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h3 class="stew-product-title-name">Свинина со специями</h3>
                        <p class="stew-product-title-about">ТМ Гродфуд разрушает стереотип о "жирной свинине".
                            Особенностью консервов из свинины ТМ Гродфуд является использование мясного сырья с
                            пониженным содержанием жирности, отсутствием добавок в виде жира сырца, сои и любых других
                            добавок заменяющих мясное сырье.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="stew-product-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="stew-product-block">
                        <div class="stew-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-spicy/01.png" alt="Image">
                        </div>
                        <h3>С перцем чили</h3>
                        <ul class="stew-product-description">
                            <li>Массовая доля мяса по закладке: 96,6%</li>
                            <li>Масса нетто, г: 338</li>
                            <li>Срок годности: 4 года</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="stew-product-block">
                        <div class="stew-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-spicy/02.png"
                                 alt="Image">
                        </div>
                        <h3>С паприкой</h3>
                        <ul class="stew-product-description">
                            <li>Массовая доля мяса по закладке: 96,3%</li>
                            <li>Масса нетто, г: 338</li>
                            <li>Срок годности: 4 года</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="stew-product-block">
                        <div class="stew-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-spicy/03.png"
                                 alt="Image">
                        </div>
                        <h3>С томатом и перцем чили</h3>
                        <ul class="stew-product-description">
                            <li>Массовая доля мяса по закладке: 95,0%</li>
                            <li>Масса нетто, г: 338</li>
                            <li>Срок годности: 4 года</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="stew-product-block">
                        <div class="stew-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-spicy/04.png"
                                 alt="Image">
                        </div>
                        <h3>С кумином и перцем чили</h3>
                        <ul class="stew-product-description">
                            <li>Массовая доля мяса по закладке: 96,5%</li>
                            <li>Масса нетто, г: 338</li>
                            <li>Срок годности: 4 года</li>
                        </ul>
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