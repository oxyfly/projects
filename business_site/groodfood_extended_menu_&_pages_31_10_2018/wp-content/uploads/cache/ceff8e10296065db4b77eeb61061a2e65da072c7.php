<?php the_content() ?>
<?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>


<section class="food">
    <img class="food-bg" src="<?= App\asset_path('images/page-2/background.jpg'); ?>" alt="Image" title="">
    <div class="foods">
        <div class="stew">
            <img class="stew-img" src="<?= App\asset_path('images/page-2/stew.png'); ?>" alt="Image" title="">
            <div class="stew-comment">
                <p class="comment-name">Тушенка</p>
                <p class="comment-text">Самым удобным, надежным и популярным видом мяса, способным храниться в течении продолжительного периода времени с начала 19 века было  и остается тушеное консервированное мясо...</p>
                <div class="comment-arrow"></div>
                <button type="button" class="btn btn-dark">
                    <a class="btn-stew" href="#">Подробнее</a>
                </button>
            </div>
        </div>
        <div class="ham">
            <img class="ham-img" src="<?= App\asset_path('images/page-2/ham.png'); ?>" alt="Image" title="">
            <div class="ham-comment">
                <p class="comment-name">Ветчинка</p>
                <p class="comment-text">«Консервированная ветчинка» изготавливается по старославянским традициям из отборных лопаточных и шейных частей свинины с добавлением ароматных натуральных специй...</p>
                <div class="comment-arrow"></div>
                <button type="button" class="btn btn-dark">
                    <a class="btn-ham" href="#">Подробнее</a>
                </button>
            </div>
        </div>
        <div class="pate">
            <img class="pate-img" src="<?= App\asset_path('images/page-2/pate.png'); ?>" alt="Image" title="">
            <div class="pate-comment">
                <p class="comment-name">Паштет</p>
                <p class="comment-text">Паштеты ТМ Гродфуд с использованием мяса птицы приготовлены на курином бульоне. Характеризуются нежной кремовой консистенцией, пониженным содержанием соли и печени...</p>
                <div class="comment-arrow"></div>
                <button type="button" class="btn btn-dark">
                    <a class="btn-pate" href="#">Подробнее</a>
                </button>
            </div>
        </div>
        <div class="porridge">
            <img class="porridge-img" src="<?= App\asset_path('images/page-2/porridge.png'); ?>" alt="Image" title="">
            <div class="porridge-comment">
                <p class="comment-name">Каша</p>
                <p class="comment-text">Каша ТМ Гродфуд это классическая консервированная каша с содержанием мяса более 37%. Отсается только разогреть и на Вашем столе готовое сытное блюдо.</p>
                <div class="comment-arrow-porridge"></div>
                <button type="button" class="btn btn-dark">
                    <a class="btn-porridge" href="#">Подробнее</a>
                </button>
            </div>
        </div>
        <div class="leaf">
            <img class="leaf-img" src="<?= App\asset_path('images/page-2/leaf.png'); ?>" alt="Image" title="">
        </div>
    </div>
</section>
<section class="about">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active carousel-item-about">
                <img class="d-block w-100" src="<?= App\asset_path('images/page-3/slide-1.jpg'); ?>" alt="First slide">
                <div class="carousel-caption d-none d-md-block carousel-caption-about">
                    <h1 class="about-title">О компании</h1>
                    <p class="about-line"></p>
                    <p class="about-text">Соблюдением территориальной и ценовой политики в целях защиты экономических интересов наших партнеров</p>
                    <p class="about-text">Соблюдением территориальной и ценовой политики в целях защиты экономических интересов наших партнеров.Соблюдением территориальной и ценовой политики в целях защиты экономических интересов наших партнеров</p>
                </div>
            </div>
            <div class="carousel-item carousel-item-about">
                <img class="d-block w-100" src="<?= App\asset_path('images/page-3/slide-2.jpg'); ?>" alt="First slide">
                <div class="carousel-caption d-none d-md-block carousel-caption-about">
                    <h1 class="about-title">О компании</h1>
                    <p class="about-line"></p>
                    <p class="about-text">Соблюдением территориальной и ценовой политики в целях защиты экономических интересов наших партнеров</p>
                    <p class="about-text">Соблюдением территориальной и ценовой политики в целях защиты экономических интересов наших партнеров.Соблюдением территориальной и ценовой политики в целях защиты экономических интересов наших партнеров</p>
                </div>
            </div>
            <div class="carousel-item carousel-item-about">
                <img class="d-block w-100" src="<?= App\asset_path('images/page-3/slide-3.jpg'); ?>" alt="First slide">
                <div class="carousel-caption d-none d-md-block carousel-caption-about">
                    <h1 class="about-title">О компании</h1>
                    <p class="about-line"></p>
                    <p class="about-text">Соблюдением территориальной и ценовой политики в целях защиты экономических интересов наших партнеров</p>
                    <p class="about-text">Соблюдением территориальной и ценовой политики в целях защиты экономических интересов наших партнеров.Соблюдением территориальной и ценовой политики в целях защиты экономических интересов наших партнеров</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="awards">
    <h1 class="awards-title">Участие в выставках</h1>
    <div class="awards-images">
        <div class="award-img">
            <img src="<?= App\asset_path('images/page-3/awards/award-1.png'); ?>" alt="">
        </div>
        <div class="award-img">
            <img src="<?= App\asset_path('images/page-3/awards/award-2.png'); ?>" alt="">
        </div>
        <div class="award-img">
            <img src="<?= App\asset_path('images/page-3/awards/award-3.png'); ?>" alt="">
        </div>
        <div class="award-img">
            <img src="<?= App\asset_path('images/page-3/awards/award-4.png'); ?>" alt="">
        </div>
        <div class="award-img">
            <img src="<?= App\asset_path('images/page-3/awards/award-5.png'); ?>" alt="">
        </div>
        <div class="award-img">
            <img src="<?= App\asset_path('images/page-3/awards/award-6.png'); ?>" alt="">
        </div>
    </div>
</section>
