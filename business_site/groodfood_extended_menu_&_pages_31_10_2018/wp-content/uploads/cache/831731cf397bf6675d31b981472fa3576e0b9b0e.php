<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
    <section class="about-awards-common">
        <section class="ornament">
            <img src="/wp-content/themes/grodfood/dist/images/misc/ornament.png" alt="Image">
        </section>
        <nav aria-label="breadcrumb" class="breadcrumbs">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="http://grodfood.ruslanyushkevich.com/">Назад</a></li>
            </ol>
        </nav>
        <section class="text-page-bg">
            <section class="about-common">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="about-common-title">О компании</h2>
                            <p class="about-common-description">
                                Совместное общество с ограниченной ответственностью "КВИНФУД" ставит своей главной целью
                                выпуск
                                высококачественной, конкурентоспособной продукции, отвечающей постоянно возрастающим
                                требованиям
                                наших Потребителей, позволяющей занимать лидирующее положение как на внутреннем, так и на
                                внешних рынках сбыта.
                            </p>
                            <h5 class="about-common-title">Достижение поставленной цели по производству продукции высокого
                                качества обеспечивается:
                            </h5>
                            <ul>
                                <li>Внедрением системы менеджмента качества, соответствующей требованиям СТБ ИСО 9001-2001 и
                                    HACCP;
                                </li>
                                <li>Установлением взаимовыгодных и долгосрочных отношений с Поставщиками, обеспечивая четкие
                                    и
                                    бесперебойные поставки сырья и материалов для производства;
                                </li>
                                <li>Соблюдением территориальной и ценовой политики в целях защиты экономических интересов
                                    наших
                                    партнеров;
                                </li>
                                <li>Изучением и анализом рынков сбыта нашей продукции, знанием возможностей потенциальных
                                    конкурентов;
                                </li>
                                <li>Выполнением каждым сотрудником организации своей работы профессионально и
                                    ответственно;
                                </li>
                                <li>Чётким распределением ответственности и полномочий на всех этапах производства и
                                    управления;
                                </li>
                                <li>Осуществлением постоянной деятельности по освоению новых видов продукции и расширения её
                                    ассортимента;
                                </li>
                                <li>Постоянным прослеживанием достижений науки и техники и максимальной реализацией их в
                                    своем
                                    производстве;
                                </li>
                                <li>Совершенствованием организации труда, повышением профессионализма наших кадров и их
                                    благосостояния;
                                </li>
                            </ul>
                            <h5 class="about-common-title">СООО «Квинфуд» выпускает мясную консервацию в четырех категориях:
                            </h5>
                            <ul>
                                <li><a href="/stew-page">«Консервы мясные» (Тушенка) ТМ Гродфуд</a></li>
                                <li><a href="/porridge-page">«Консервы мясорастительные» (Каша с мясом) ТМ Гродфуд</a></li>
                                <li><a href="/pate-page">«Паштет» ТМ Гродфуд</a></li>
                                <li><a href="/ham-page">«Консервированная ветчинка» ТМ Гродфуд</a></li>
                            </ul>
                            <p class="about-common-description">Продукция ТМ "Гродфуд" реализуется на территории <strong><a
                                            href="/distribution">Республики Беларусь, Российской Федерации, Казахстана и
                                        Молдовы</a></strong>. И с каждым годом максимально расширяет свое присутсвие на
                                новых и
                                существующих территориях.</p>
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