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
                        <h2 class="consumer-about-product-title">О ветчинке</h2>
                        <p class="consumer-about-product-description">
                            Ветчину умели готовить уже в Древнем Риме в 1 в. до н.э. Первым технологию консервирования
                            ветчины освоил американец Джордж Хормель в 1926 году.<br><br>
                            Ветчинка ТМ ГРОДФУД это закусочный продукт - аналог бутербродной ветчине известной, как мелёнка.
                            Мелкорубленное мясо птицы и свинина, с добавлением ароматных специй, глубокая стерилизация и
                            следование старославянским рецептурам, делает данный продукт незаменимым в дорогах, на даче, в
                            офисе.<br><br>
                            Ветчинка ТМ ГРОДФУД - не требует холодильного хранения. Используется для приготовления
                            бутербродов и салатов, с рецептами можно ознакомиться ниже на странице.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="about-pate">
                            <img class="about-pate-img"
                                 src="/wp-content/themes/grodfood/dist/images/product-page/about-ham.jpg" alt="Image">
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