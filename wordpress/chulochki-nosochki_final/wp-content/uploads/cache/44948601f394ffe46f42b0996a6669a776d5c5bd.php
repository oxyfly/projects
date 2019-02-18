<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <nav aria-label="breadcrumb" class="breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="/">Главная</a></li>
            <li class="breadcrumb-item"><a href="/payment">Оплата</a></li>
        </ol>
    </nav>

    <section class="payment">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h3 class="payment-title payment-title-pos">Условия оплаты</h3>
                    <p class="payment-text">Оплатить заказы в нашем интернет-магазине можно наличными в случае доставки
                        курьером.
                    </p>
                    <p class="payment-text">Наличными и банковской картой в случае самовывоза из фирменных магазинов по
                        следующим адресам:<br>
                        - ТД Неман, 3 этаж, ул. Советская, 18;<br>
                        - ТЦ Фламинго, 2 этаж, пав. 46, ул. О.Соломовой.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>