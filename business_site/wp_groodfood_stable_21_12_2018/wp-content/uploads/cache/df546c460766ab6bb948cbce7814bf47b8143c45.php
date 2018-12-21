<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
    <section class="ornament ornament-top ornament-pate">
        <img src="/wp-content/themes/grodfood/dist/images/misc/ornament.png" alt="Image">
    </section>
    <nav aria-label="breadcrumb" class="breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="http://grodfood.ruslanyushkevich.com/#catalog">Назад</a></li>
            <li class="breadcrumb-item"><a href="http://grodfood.ruslanyushkevich.com/pate-page">Паштеты</a></li>
            <li class="breadcrumb-item"><a href="http://grodfood.ruslanyushkevich.com/pate-gold">Золотая Серия</a></li>
        </ol>
    </nav>
    <section class="pate-product-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <div class="pate-product-block-1">
                        <div class="pate-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/pate-gold/001.jpg"
                                 alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="pate-product-block-1">
                        <h3>Классический</h3>
                        <ul class="pate-product-description-1">
                            <li>Массовая доля мясных ингредиентов: 95,8%</li>
                            <li>Масса нетто, г: 100</li>
                            <li>Количество штук в упаковке: 12</li>
                            <li>Количество упаковок на паллете: 225</li>
                            <li>Срок годности: 2 года</li>
                            <li>Условия хранения: При температуре от 0 С до +25 С, при относительной влажности воздуха
                                не более 75%.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="pate-product-block-1">
                        <div class="pate-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/pate-gold/002.jpg"
                                 alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="pate-product-block">
                        <h3>С жареным луком</h3>
                        <ul class="pate-product-description-1">
                            <li>Массовая доля мясных ингредиентов: 95,8%</li>
                            <li>Масса нетто, г: 100</li>
                            <li>Количество штук в упаковке: 12</li>
                            <li>Количество упаковок на паллете: 225</li>
                            <li>Срок годности: 2 года</li>
                            <li>Условия хранения: При температуре от 0 С до +25 С, при относительной влажности воздуха
                                не более 75%.
                            </li>
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