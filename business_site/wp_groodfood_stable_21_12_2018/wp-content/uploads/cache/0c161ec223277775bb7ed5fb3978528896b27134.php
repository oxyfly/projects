<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
    <section class="distribution">
        <section class="ornament">
            <img src="/wp-content/themes/grodfood/dist/images/misc/ornament.png" alt="Image">
        </section>
        <nav aria-label="breadcrumb" class="breadcrumbs">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="http://grodfood.ruslanyushkevich.com/">Назад</a></li>
            </ol>
        </nav>
        <section class="text-page-bg">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="collaboration-title">Сотрудничество</h2>
                        <p class="collaboration-description">
                            Одним из основных принципов в работе СООО "Квинфуд" является соблюдение территориальной и
                            ценовой политики, во избежание нарушения экономических интересов наших партнеров.<br><br>
                            Реализацию продукции собственного производства СООО "Квинфуд" производит через сеть своих
                            официальных партнеров, дистрибьюторские компании их логистические центры а так же напрямую с
                            завода в г.Гродно.<br><br>
                            Контакты официальных партнеров в интересующем Вас регионе Вы можете найти на странице
                            <a href="/distribution">ДИСТРИБУЦИЯ</a>. Контакты региональных менеджеров и сотрудников
                            предприятия в разделе <a href="/contacts">КОНТАКТЫ</a>.
                        </p>
                    </div>
                </div>
            </div>
        </section>
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