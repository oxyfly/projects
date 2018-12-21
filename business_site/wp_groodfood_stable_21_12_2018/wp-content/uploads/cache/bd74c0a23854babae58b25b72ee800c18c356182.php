<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
    <section class="ornament ornament-top ornament-ham">
        <img src="/wp-content/themes/grodfood/dist/images/misc/ornament.png" alt="Image">
    </section>
    <nav aria-label="breadcrumb" class="breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="http://grodfood.ruslanyushkevich.com/#catalog">Назад</a></li>
            <li class="breadcrumb-item"><a href="http://grodfood.ruslanyushkevich.com/ham-page">Ветчинки</a></li>
            <li class="breadcrumb-item"><a href="http://grodfood.ruslanyushkevich.com/ham-spicy/">Пряная</a></li>
        </ol>
    </nav>
    <section class="ham-product-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <div class="ham-product-block-1">
                        <div class="ham-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/ham-spicy/001.jpg"
                                 alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="ham-product-block-1">
                        <h3>Консервы мясные стерилизованные. "Пряная"</h3>
                        <ul class="ham-product-description-1">
                            <li>Упаковка: ж/б + ключ easy-open</li>
                            <li>Масса нетто, г: 290</li>
                            <li>Количество штук в упаковке: 8</li>
                            <li>Количество упаковок на паллете: 240</li>
                            <li>Срок годности: 2 года</li>
                            <li>Условия хранения: При температуре от 0 С до +20 С, при относительной влажности воздуха
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