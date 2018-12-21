<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
    <section class="consumer">
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
                    <div class="col-12">
                        <h2 class="consumer-about-product-title">О паштетах</h2>
                        <p class="consumer-about-product-description">
                            Паштет (нем. Раstеtе — «паштет, пирожок») — это фарш из дичи, мяса, печени, яиц, грибов,
                            трюфелей и пр., приготовленный особым образом. Изобрел знаменитый деликатес, известный под
                            названием страсбургский паштет, в 1782 году нормандский повар Жан-Жозеф Клоз, получивший за это
                            дворянский титул.<br>
                            Также паштетом называют круглый пирог из слоёного теста с начинкой из паштетного фарша, который
                            во времена Пушкина назывался страсбургский пирог и упоминается в романе «Евгений Онегин».<br>
                            ТМ Гродфуд предлагает своим потребителям широкие возможности в приготовлении различных блюд с
                            использованием своей мясной консервации. Паштет ТМ гродфуд можно использовать не только, как
                            традиционную бутербродную закуску, но и как начинку для блинчиков и пирогов, фаршировать вареные
                            яйца и многое другое.В этом разделе мы постараемся публиковать для Вас новые идеи и рецепты
                            использования паштетов ТМ Гродфуд.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="about-pate">
                            <img class="about-pate-img"
                                 src="/wp-content/themes/grodfood/dist/images/product-page/about-pate-1.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="about-pate">
                            <img class="about-pate-img"
                                 src="/wp-content/themes/grodfood/dist/images/product-page/about-pate-2.jpg" alt="Image">
                        </div>
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