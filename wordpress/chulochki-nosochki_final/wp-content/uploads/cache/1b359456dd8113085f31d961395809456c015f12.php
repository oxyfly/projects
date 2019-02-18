<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <nav aria-label="breadcrumb" class="breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="http://server-006/">Главная</a></li>
            <li class="breadcrumb-item"><a href="/about">О нас</a></li>
        </ol>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h3 class="about-title about-title-pos">О нас</h3>
                <p class="about-text">Интернет-магазин натуральных продуктов Eco-Market рад приветствовать ценителей
                    здорового
                    питания, любителей естественной красоты и всех неравнодушных к сохранению живой природы, а также
                    тех, кто только
                    «просыпается» и встаёт на путь самосовершенствования!
                </p>
                <p class="about-text">Мы заботимся о здоровом будущем людей нашей страны, поэтому создали этот магазин
                    для
                    Вас!
                    Eсo-Market – это онлайн-площадка удобных покупок, где собраны натуральные продукты для
                    повседневной жизни активного и занятого человека.
                </p>
                <p class="about-text">Мы работаем с производителями, которые реализуют только экологически чистую и
                    безопасную
                    продукцию. Многие продукты в нашем магазине имеют bio и organic сертификаты.
                </p>
                <p class="about-text">Выбирая органические продукты питания, натуральные косметические и хозяйственные
                    средства
                    сейчас, вы вносите неоценимый вклад в будущее здорового существования человечества на чистой и
                    «живой» планете!
                </p>
                <br>
                <br>
                <p class="about-text">Экологически чистых покупок!</p>
                <p class="about-text"><strong>С заботой о Вас, Eco-Market.</strong></p>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>