<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <section class="service-page-banner">
        <div class="banner-img-5">
            <div class="service-page-banner-wrap">

            </div>
        </div>
    </section>

    <section class="curs-master">
        <h1 class="curs-master-title">Курс "Мастер Маникюра"</h1>
        <div class="curs-master-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <p class="curs-master-item">Теоретическое введение в специальность мастера-бровиста.</p>
                        <p class="curs-master-item">Время и дни занятий устанавливаются индивидуально для каждой
                            группы.</p>
                        <p class="curs-master-item">Содержание курса: 6 часов теории и 18 часов практики (количество
                            часов может изменяться в зависимости от количества дней курса).</p>
                        <p class="curs-master-item">Общая продолжительность: с 10:00 до 18:00. Занятие продолжается 2
                            либо 3 дня с часовым перерывом на обед.</p>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="curs-master-title">Теория</h1>
        <div class="curs-master-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <p class="curs-master-item">Изучение всех необходимых материалов и инструментов.</p>
                        <p class="curs-master-item">Изучение противопоказаний, которые имеет процедура.</p>
                        <p class="curs-master-item">Изучение ошибок, которые наиболее часто совершают мастера.</p>
                        <p class="curs-master-item">Особенности работы с «проблемными» руками.</p>
                        <p class="curs-master-item">Правила ухода за руками.</p>
                        <p class="curs-master-item">Комбинированный маникюр.</p>
                        <p class="curs-master-item">Правила ухода за руками.</p>
                        <p class="curs-master-item">Комбинированный маникюр.</p>
                        <p class="curs-master-item">Изучение форм ногтей.</p>
                        <p class="curs-master-item">Колористика и правильное нанесение лака.</p>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="curs-master-title">Практика</h1>
        <div class="curs-master-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <p class="curs-master-item">Отработка комбинированного маникюра.</p>
                        <p class="curs-master-item">Бесплатное предоставление всех необходимых материалов и
                            инструментов.</p>
                        <p class="curs-master-item">Предоставление подготовленных моделей, отработка маникюра под четким
                            руководством преподавателя.</p>
                        <p class="curs-master-item">Обучение подготовки клиентов и рабочих мест к процедуре.</p>
                        <p class="curs-master-item">Обучение правильному подбору материалов и инструментов, которые
                            потребуются в работе: пилки, пушеры, бафы, кусачки и др.</p>
                        <p class="curs-master-item">Обучение тщательной обработке инструмента.</p>
                        <p class="curs-master-item">Отработка процедуры всеми видами предназначенных для этого
                            инструментов, а также подбор наиболее удобного для работы инструмента.</p>
                        <p class="curs-master-item">Исправление неправильно выполненного маникюра на моделях.</p>
                        <p class="curs-master-item">Отработка правильной работы с ножничками во избежание порезов на
                            руках клиента, а также отработка дезинфекции возможных порезов.</p>
                        <p class="curs-master-item">Отработка техники нанесения лака, демонстрация легких дизайнов.</p>
                        <p class="curs-master-item">Обсуждение с преподавателем всех возникающих вопросов.</p>
                        <p class="curs-master-item curs-master-last-item">Проведение практики на моделях вплоть до полного освоения темы.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>