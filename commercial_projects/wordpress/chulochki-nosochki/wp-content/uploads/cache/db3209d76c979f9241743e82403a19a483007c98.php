<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <nav aria-label="breadcrumb" class="breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="/">Главная</a></li>
            <li class="breadcrumb-item"><a href="/certificates">Подарочные сертификаты</a></li>
        </ol>
    </nav>

    <section class="certificates">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h3 class="certificates-title certificates-title-pos">Подарочные сертификаты</h3>
                    <p class="delivery-text">Сертификат на покупки в магазине «Чулочки&Носочки» – отличный подарок,
                        который исключает ошибки с размером, цветом и фасоном. Просто вручайте сертификаты в качестве
                        подарка и получайте благодарность в ответ!
                    </p>
                    <p class="delivery-text">Вы можете приобрести подарочный сертификат в наших фирменных магазинах.</p>
                    <p class="delivery-text">Подробности по телефону: +375 33 663 59 76.</p>
                    <div class="certificate-img-wrap">
                        <img src="/wp-content/themes/chulochki/dist/images/misc/certificate-1.jpg" alt="Image"
                             title="Сертификат">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>