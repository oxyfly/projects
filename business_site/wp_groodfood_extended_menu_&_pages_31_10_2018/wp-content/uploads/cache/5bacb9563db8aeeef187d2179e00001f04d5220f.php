<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
    <section class="ornament ornament-top">
        <img src="/wp-content/themes/grodfood/dist/images/misc/ornament.png" alt="Image">
    </section>
    <nav aria-label="breadcrumb" class="breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="/catalog">Каталог</a></li>
            <li class="breadcrumb-item"><a href="/porridge-page">Каши</a></li>
            <li class="breadcrumb-item"><a href="/porridge-pig">Со свининой</a></li>
        </ol>
    </nav>

    <section class="porridge-product-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <div class="porridge-product-block-1">
                        <div class="porridge-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/porridge-pig/001.jpg"
                                 alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="porridge-product-block-1">
                        <h3>Гречневая по-белорусски</h3>
                        <ul class="porridge-product-description-1">
                            <li>Состав: свинина, крупа гречневая, вода питьевая, лук сушеный, соль йодированная, перец
                                черный молотый.
                            </li>
                            <li>Массовая доля мяса по закладке: 37,7%</li>
                            <li>Масса нетто, г: 340</li>
                            <li>Количество штук в упаковке: 10</li>
                            <li>Количество упаковок на паллете: 150</li>
                            <li>Срок годности: 2 года</li>
                            <li>Крышка: ключ easy-open</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="porridge-product-block-1">
                        <div class="porridge-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/porridge-pig/002.jpg"
                                 alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="porridge-product-block-1">
                        <h3>Перловая по-белорусски</h3>
                        <ul class="porridge-product-description-1">
                            <li>Состав: свинина, крупа перловая, вода питьевая, лук сушеный, соль йодированная, перец
                                черный молотый.
                            </li>
                            <li>Массовая доля мяса по закладке: 37,7%</li>
                            <li>Масса нетто, г: 340</li>
                            <li>Количество штук в упаковке: 10</li>
                            <li>Количество упаковок на паллете: 150</li>
                            <li>Срок годности: 2 года</li>
                            <li>Крышка: ключ easy-open</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="porridge-product-block-1">
                        <div class="porridge-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/porridge-pig/003.jpg"
                                 alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="porridge-product-block-1">
                        <h3>Рисовая по-белорусски</h3>
                        <ul class="porridge-product-description-1">
                            <li>Состав: свинина, крупа рисовая, вода питьевая, лук сушеный, соль йодированная, перец
                                черный молотый.
                            </li>
                            <li>Массовая доля мяса по закладке: 37,7%</li>
                            <li>Масса нетто, г: 340</li>
                            <li>Количество штук в упаковке: 10</li>
                            <li>Количество упаковок на паллете: 150</li>
                            <li>Срок годности: 2 года</li>
                            <li>Крышка: ключ easy-open</li>
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