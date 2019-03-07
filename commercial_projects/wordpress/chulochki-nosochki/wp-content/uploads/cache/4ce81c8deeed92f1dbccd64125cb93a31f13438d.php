<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <nav aria-label="breadcrumb" class="breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="/">Главная</a></li>
            <li class="breadcrumb-item"><a href="/delivery">Доставка</a></li>
        </ol>
    </nav>

    <section class="delivery">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <p class="delivery-text">Чтобы получать покупки было удобно, ознакомьтесь с возможными способами
                        доставки:<br>
                        - Курьер<br>
                        - Самовывоз
                    </p>
                    <p class="delivery-text">Выбрать способ доставки и удобное время получения покупок можно в корзине
                        на
                        этапе оформления заказа.
                    </p>

                    <h3 class="delivery-title">Условия доставки курьерами</h3>
                    <p class="delivery-text"><strong>Срок доставки – ближайшие понедельник, среда, пятница</strong>
                        после
                        подтверждения
                        заказа.
                    </p>
                    <p class="delivery-text">К примеру:<br>
                        - Заказы совершенные в пятницу, субботу, воскресенье – будут доставлены Вам в понедельник.<br>
                        - Заказы совершенные в понедельник, вторник – будут доставлены Вам в среду.<br>
                        - Заказы совершенные в среду, четверг – будут доставлены Вам в пятницу.
                    </p>
                    <p class="delivery-text"><strong>Бесплатная доставка при заказе на сумму от 30 рублей.</strong></p>
                    <p class="delivery-text">Доставка при заказе на сумму менее 30 рублей - платная. Стоимость доставки
                        –
                        3 руб.
                    </p>

                    <h3 class="delivery-title">Самовывоз из фирменных магазинов:</h3>
                    <p class="delivery-text">- ТД Неман, 3 этаж, г. Гродно, ул. Советская, 18;<br>
                        - ТЦ Фламинго, 2 этаж, пав. 46, г. Гродно, ул. О.Соломовой.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>