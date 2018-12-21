<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
    <section class="ornament ornament-top">
        <img src="/wp-content/themes/grodfood/dist/images/misc/ornament.png" alt="Image">
    </section>
    <nav aria-label="breadcrumb" class="breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="/catalog">Каталог</a></li>
            <li class="breadcrumb-item"><a href="/stew-page">Тушенка</a></li>
            <li class="breadcrumb-item"><a href="/stew-pig">Свинина</a></li>
        </ol>
    </nav>
    <section class="stew-product-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h3 class="stew-product-title-name">Свинина</h3>
                        <p class="stew-product-title-about">ТМ Гродфуд разрушает стереотип о "жирной свинине". Особенностью
                            консервов из свинины ТМ Гродфуд является использование мясного сырья с пониженным
                            содержанием жирности, отсутсвием добавок в виде жира сырца, сои и любых других добавок
                            заменяющих мясное сырье.</p>
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
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-pig/001.jpg" alt="Image">
                        </div>
                        <h3>Тушеная свинина, ж/б</h3>
                        <ul class="stew-product-description">
                            <li>Массовая доля мяса по закладке: 97,5%</li>
                            <li>Масса нетто, г: 338, 525</li>
                            <li>Срок годности: 4 года</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="stew-product-block">
                        <div class="stew-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-pig/002.jpg" alt="Image">
                        </div>
                        <h3>Тушеная свинина, стекло</h3>
                        <ul class="stew-product-description">
                            <li>Массовая доля мяса по закладке: 97,5%</li>
                            <li>Масса нетто, г: 500</li>
                            <li>Срок годности: 3 года</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="stew-product-block">
                        <div class="stew-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-pig/003.jpg" alt="Image">
                        </div>
                        <h3>Свинина в белом соусе</h3>
                        <ul class="stew-product-description">
                            <li>Массовая доля мяса по закладке: 90,3%</li>
                            <li>Масса нетто, г: 350</li>
                            <li>Срок годности: 3 года</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="stew-product-block">
                        <div class="stew-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-pig/004.jpg" alt="Image">
                        </div>
                        <h3>Гуляш свиной</h3>
                        <ul class="stew-product-description">
                            <li>Массовая доля мяса по закладке: 87%</li>
                            <li>Масса нетто, г: 350</li>
                            <li>Срок годности: 1,5 года</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="stew-product-block">
                        <div class="stew-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-pig/005.jpg" alt="Image">
                        </div>
                        <h3>Завтрак в дорогу из свинины</h3>
                        <ul class="stew-product-description">
                            <li>Массовая доля мяса по закладке: 93,2%</li>
                            <li>Масса нетто, г: 340</li>
                            <li>Срок годности: 3 года</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="stew-product-block">
                        <div class="stew-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-pig/006.jpg" alt="Image">
                        </div>
                        <h3>Свинина «Семейная»</h3>
                        <ul class="stew-product-description">
                            <li>Массовая доля мяса по закладке: 61%</li>
                            <li>Масса нетто, г: 340</li>
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