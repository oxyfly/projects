<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <nav aria-label="breadcrumb" class="breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="/">Главная</a></li>
            <li class="breadcrumb-item active"><a href="/">Главная</a></li>
            <li class="breadcrumb-item"><a href="/about">О нас</a></li>
        </ol>
    </nav>

    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h3 class="about-title about-title-pos">Добро пожаловать в наш онлайн-магазин!</h3>
                    <p class="about-text">«Чулочки&Носочки» - молодая развивающаяся сеть магазинов чулочно-носочных и
                        трикотажных изделий для взрослых и детей.
                    </p>
                    <p class="about-text">Мы реализуем качественную и стильную продукцию от передовых производителей,
                        которые работают только с современным оборудованием, используют высококачественное сырьё и
                        внедряют инновационные идеи в области дизайна. Наша сеть напрямую сотрудничает с такими брендами
                        как: SiSi, Glamour, Gatta, Pompea, Levante, Giulia, Rusocks и др.
                    </p>
                    <p class="about-text">Ассортимент наших магазинов порадует даже самого взыскательного клиента, ведь
                        мы постоянно следим за модными тенденциями, уделяем повышенное внимание фасону, тканям,
                        расцветкам и регулярно обновляем наши коллекции.
                    </p>
                    <p class="about-text">Успех сети магазинов «Чулочки&Носочки» основан на нескольких факторах:<br>
                        - огромный выбор чулочно-носочных изделий, трикотажа, спортивной одежды, купальников, головных
                        уборов и т.д.;<br>
                        - внимание к трендам;<br>
                        - идеальное сочетание цены и качества;<br>
                        - комфортные покупки.

                    </p>
                    <p class="about-text">Приобрести продукцию сети «Чулочки&Носочки» можно как в магазинах Вашего
                        города, так и в интернет-магазине. Мы заботимся о каждом покупателе и прилагаем все усилия,
                        чтобы пробудить в Вас желание стать нашим постоянным клиентом.
                    </p>
                    <p class="about-text">Доставка товара осуществляется при помощи курьера или почтовой службы.<br>
                        На нашем сайте доступен наличный и безналичный способ оплаты.<br>
                        Также Вы можете приобрести подарочные сертификаты.
                    </p>
                    <br>
                    <br>
                    <p class="about-text"><strong>С любовью к каждому, Ваши «Чулочки&Носочки».</strong></p>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>