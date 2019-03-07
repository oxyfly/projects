<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
    <section class="stew-title">
        <section class="ornament ornament-stew-page">
            <img src="/wp-content/themes/grodfood/dist/images/misc/ornament.png" alt="Image">
        </section>
        <nav aria-label="breadcrumb" class="breadcrumbs">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="http://grodfood.by/#catalog">Назад</a></li>
                <li class="breadcrumb-item"><a href="/stew-spicy">Тушенка со специями</a></li>
            </ol>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h3 class="stew-title-name">Тушенка со специями</h3>
                        <p class="stew-title-about">Новая линейка мясных консерв с добавлением специй создана для
                            любителей побаловать вкусовые рецепторы смелыми гастрономи-ческими сочетаниями. Сочные
                            тушёные кусочки отборной говядины и свинины в гармонии с пикантными, жгучими пряностями
                            могут быть самостоятельным блюдом или стать аппетитным дополнением к любому гарниру.
                            Добавьте разнообразие в свой привычный рацион – попробуйте новые вкусы уже полюбившихся
                            тушёнок высокого качества от «ГРОДФУД».</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="stew-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-6 stew-item">
                    <a class="product-item-click" href="/stew-spicy-pig">
                        <div class="stew-block">
                            <div class="product-block-item-img">
                                <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-spicy/01.png"
                                     alt="Image">
                            </div>
                            <h3>Свинина</h3>
                            <div class="pig-description">
                                <p class="stew-description">ТМ Гродфуд разрушает стереотип о "жирной свинине".
                                    Особенностью
                                    консервов из свинины ТМ Гродфуд...</p>
                            </div>
                            <div class="product-stew-page-link-btn">
                                <a href="/stew-spicy-pig">
                                    <p class="stew-page-link-text">Подробнее</p>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-6 stew-item">
                    <a class="product-item-click" href="/stew-spicy-beef">
                        <div class="stew-block">
                            <div class="product-block-item-img">
                                <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-spicy/05.png"
                                     alt="Image">
                            </div>
                            <h3>Говядина</h3>
                            <div class="beef-description">
                                <p class="stew-description">Говядина производимая ТМ Гродфуд это традиционная говядина
                                    произведенная согласно самым...</p>
                            </div>
                            <div class="product-stew-page-link-btn">
                                <a href="/stew-spicy-beef">
                                    <p class="stew-page-link-text">Подробнее</p>
                                </a>
                            </div>
                        </div>
                    </a>
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