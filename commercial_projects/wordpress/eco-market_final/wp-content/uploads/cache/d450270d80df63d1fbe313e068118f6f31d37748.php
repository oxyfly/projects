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
                        2,50 руб.
                    </p>

                    <h3 class="delivery-title">Условия самовывоза из фирменных магазинов</h3>
                    <p class="delivery-text">К примеру:<br>
                        - Срок доставки заказа в выбранный вами фирменный магазин - до 2 рабочих дней после
                        подтверждения
                        заказа.
                        <br>
                        - Бесплатная доставка в магазин при любой сумме заказа.<br>
                        - Возможна дегустация и частичный выкуп заказа.
                    </p>
                    <p class="delivery-text">Срок хранения заказа в фирменном магазине - 7 дней.</p>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>