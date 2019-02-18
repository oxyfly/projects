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

            </div>
        </div>
    </div>

    <section class="contacts">
        <h3 class="contacts-title">Контакты</h3>
        <p class="contacts-text"><strong>Адреса:</strong><br>
            - ТД Неман, 3 этаж, г. Гродно, ул. Советская, 18;<br>
            - ТЦ Фламинго, 2 этаж, пав. 46, г. Гродно, ул. О.Соломовой.<br><br>
        </p>
        <p class="contacts-text"><strong>Телефон:</strong><br>
            - +375 33 663 59 76.
        </p>
    </section>
    <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>