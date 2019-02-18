<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <nav aria-label="breadcrumb" class="breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="/">Главная</a></li>
            <li class="breadcrumb-item"><a href="/contacts">Контакты</a></li>
        </ol>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-12">
                <section class="contacts">
                    <h3 class="contacts-title contacts-title-pos">Контактные телефоны:</h3>
                    <a class="contacts-text" style="color: black;" href="tel:+375333643649">+375 (33) 36-436-49</a><br>
                    <a class="contacts-text" style="color: black;" href="tel:+375152687186">+375 (152)
                        68-71-86</a><br><br>

                    <h3 class="contacts-title contacts-title-pos">Адрес магазина:</h3>
                    <p class="contacts-text">г. Гродно, ул. Пушкина, 31А, «АЛМИ» 2-ой этаж</p>

                    <h3 class="contacts-title contacts-title-pos">Режим работы нашего магазина:</h3>
                    <p class="contacts-text">Понедельник - пятница: с 9.00 до 20.00</p>
                    <p class="contacts-text">Суббота - воскресенье: с 10.00 до 19.00</p>
                </section>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>