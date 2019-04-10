{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <section class="banner-section" id="banner-section">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block" src="/wp-content/themes/browbar/dist/images/banner-1.jpg"
                         alt="image">
                    <div class="carousel-caption d-md-block">
                        <div class="logo-banner-wrap"></div>
                        <h5 class="carousel-caption-title">Салон красоты<br> Brow Bar</h5>
                        <div class="banner-link-wrap">
                            <a class="banner-link" href="#">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="/wp-content/themes/browbar/dist/images/banner-1.jpg"
                         alt="image">
                    <div class="carousel-caption d-md-block">
                        <div class="logo-banner-wrap"></div>
                        <h5 class="carousel-caption-title">Салон красоты<br> Brow Bar</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="/wp-content/themes/browbar/dist/images/banner-1.jpg"
                         alt="image">
                    <div class="carousel-caption d-md-block">
                        <div class="logo-banner-wrap"></div>
                        <h5 class="carousel-caption-title">Салон красоты<br> Brow Bar</h5>
                    </div>
                </div>
            </div>
            {{--            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>--}}
        </div>
    </section>

    <section class="section-services" id="section-services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-xl-3 service-wrap-col">
                    <div class="service-wrap" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
                        <div class="service-img-1"></div>
                        <p class="service-title">
                            Окрашивание и моделирование<br> бровей
                        </p>
                        <div class="button-service">
                            <a href="/okrashivanie-i-modelirovanie-brovei">
                                <button type="button" class="btn btn-outline-danger">Подробнее</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 service-wrap-col">
                    <div class="service-wrap" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
                        <div class="service-img-3"></div>
                        <p class="service-title">
                            Вечерний и свадебный макияж
                        </p>
                        <div class="button-service">
                            <a href="/vecherniy-i-svadebniy-makiyazh">
                                <button type="button" class="btn btn-outline-danger">Подробнее</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 service-wrap-col">
                    <div class="service-wrap" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200">
                        <div class="service-img-2"></div>
                        <p class="service-title">
                            Курс "Professional brow artist"
                        </p>
                        <div class="button-service">
                            <a href="/curs-professional-brow-artist">
                                <button type="button" class="btn btn-outline-danger">Подробнее</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 service-wrap-col">
                    <div class="service-wrap" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="400">
                        <div class="service-img-4"></div>
                        <p class="service-title">
                            Курс "Мастер маникюра"
                        </p>
                        <div class="button-service">
                            <a href="/curs-master">
                                <button type="button" class="btn btn-outline-danger">Подробнее</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="photo-slider" id="photo-slider">
        <div class="photo-slider-wrap">
            <div class="photo-slider-images">
                <div>
                    <a class="example-image-link"
                       href="/wp-content/themes/browbar/dist/images/section-photo-slider/001.jpg"
                       data-lightbox="example-set"
                       data-title="">
                        <img class="example-image"
                             src="/wp-content/themes/browbar/dist/images/section-photo-slider/001.jpg"
                             alt="image"/></a>
                </div>
                <div>
                    <a class="example-image-link"
                       href="/wp-content/themes/browbar/dist/images/section-photo-slider/002.jpg"
                       data-lightbox="example-set"
                       data-title="">
                        <img class="example-image"
                             src="/wp-content/themes/browbar/dist/images/section-photo-slider/002.jpg"
                             alt="image"/></a>
                </div>
                <div>
                    <a class="example-image-link"
                       href="/wp-content/themes/browbar/dist/images/section-photo-slider/003.jpg"
                       data-lightbox="example-set"
                       data-title="">
                        <img class="example-image"
                             src="/wp-content/themes/browbar/dist/images/section-photo-slider/003.jpg"
                             alt="image"/></a>
                </div>
                <div>
                    <a class="example-image-link"
                       href="/wp-content/themes/browbar/dist/images/section-photo-slider/004.jpg"
                       data-lightbox="example-set"
                       data-title="">
                        <img class="example-image"
                             src="/wp-content/themes/browbar/dist/images/section-photo-slider/004.jpg"
                             alt="image"/></a>
                </div>
                <div>
                    <a class="example-image-link"
                       href="/wp-content/themes/browbar/dist/images/section-photo-slider/005.jpg"
                       data-lightbox="example-set"
                       data-title="">
                        <img class="example-image"
                             src="/wp-content/themes/browbar/dist/images/section-photo-slider/005.jpg"
                             alt="image"/></a>
                </div>
                <div>
                    <a class="example-image-link"
                       href="/wp-content/themes/browbar/dist/images/section-photo-slider/006.jpg"
                       data-lightbox="example-set"
                       data-title="">
                        <img class="example-image"
                             src="/wp-content/themes/browbar/dist/images/section-photo-slider/006.jpg"
                             alt="image"/></a>
                </div>
                <div>
                    <a class="example-image-link"
                       href="/wp-content/themes/browbar/dist/images/section-photo-slider/007.jpg"
                       data-lightbox="example-set"
                       data-title="">
                        <img class="example-image"
                             src="/wp-content/themes/browbar/dist/images/section-photo-slider/007.jpg"
                             alt="image"/></a>
                </div>
                <div>
                    <a class="example-image-link"
                       href="/wp-content/themes/browbar/dist/images/section-photo-slider/008.jpg"
                       data-lightbox="example-set"
                       data-title="">
                        <img class="example-image"
                             src="/wp-content/themes/browbar/dist/images/section-photo-slider/008.jpg"
                             alt="image"/></a>
                </div>
                <div>
                    <a class="example-image-link"
                       href="/wp-content/themes/browbar/dist/images/section-photo-slider/009.jpg"
                       data-lightbox="example-set"
                       data-title="">
                        <img class="example-image"
                             src="/wp-content/themes/browbar/dist/images/section-photo-slider/009.jpg"
                             alt="image"/></a>
                </div>
                <div>
                    <a class="example-image-link"
                       href="/wp-content/themes/browbar/dist/images/section-photo-slider/010.jpg"
                       data-lightbox="example-set"
                       data-title="">
                        <img class="example-image"
                             src="/wp-content/themes/browbar/dist/images/section-photo-slider/010.jpg"
                             alt="image"/></a>
                </div>
                <div>
                    <a class="example-image-link"
                       href="/wp-content/themes/browbar/dist/images/section-photo-slider/011.jpg"
                       data-lightbox="example-set"
                       data-title="">
                        <img class="example-image"
                             src="/wp-content/themes/browbar/dist/images/section-photo-slider/011.jpg"
                             alt="image"/></a>
                </div>
                <div>
                    <a class="example-image-link"
                       href="/wp-content/themes/browbar/dist/images/section-photo-slider/012.jpg"
                       data-lightbox="example-set"
                       data-title="">
                        <img class="example-image"
                             src="/wp-content/themes/browbar/dist/images/section-photo-slider/012.jpg"
                             alt="image"/></a>
                </div>
            </div>
        </div>
    </section>

    <section class="price" id="price">
        <h1 class="price-title">Прайс-лист</h1>
        <p class="price-description">*Стоимость услуг зависит от используемых<br> материалов и практикующего мастера</p>
        <div class="prices">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="price-wrap price-wrap-1" data-aos="fade-down" data-aos-duration="1000"
                             data-aos-delay="200">
                            <p class="price-title-name">Бровки и макияж:</p>
                            <div class="price-items-1">
                                <p class="price-item">Моделирование и<br> окрашивание
                                    бровей:<span class="price-item-value">от 12.5 до 18 BYN</span></p>
                                <hr style="width: 188px; margin: 27px auto">
                                <p class="price-item">Долговременная<br> укладка бровей:<span
                                            class="price-item-value">от 18 до 25 BYN</span></p>
                                <hr style="width: 188px; margin: 27px auto">
                                <p class="price-item">Макияж вечерний:<span
                                            class="price-item-value">от 35 до 59.5 BYN</span></p>
                                <hr style="width: 188px; margin: 27px auto">
                                <p class="price-item">Окрашивание ресничек:<span class="price-item-value">6 BYN</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="price-wrap price-wrap-2" data-aos="fade-down" data-aos-duration="1000"
                             data-aos-delay="400">
                            <p class="price-title-name">Прически:</p>
                            <div class="price-items-2">
                                <p class="price-item">Прическа вечерняя:<span
                                            class="price-item-value">от 35 до 50 BYN</span></p>
                                <hr style="width: 188px; margin: 27px auto">
                                <p class="price-item">Прическа свадебная:<span
                                            class="price-item-value">от 60 до 70 BYN</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="price-wrap price-wrap-3" data-aos="fade-down" data-aos-duration="1000"
                             data-aos-delay="600">
                            <p class="price-title-name">Маникюр:</p>
                            <div class="price-items-3">
                                <p class="price-item">Покрытие гель-лаком:<span
                                            class="price-item-value">от 27 до 30 BYN</span>
                                </p>
                                <hr style="width: 188px; margin: 27px auto">
                                <p class="price-item">Маникюр:<span
                                            class="price-item-value">10 BYN</span></p>
                                <hr style="width: 188px; margin: 27px auto">
                                <p class="price-item">Снятие покрытия+<br> маникюр:<span
                                            class="price-item-value">12 BYN</span></p>
                                <hr style="width: 188px; margin: 27px auto">
                                <p class="price-item">Коррекция<br> наращивания:<span
                                            class="price-item-value">30 BYN</span>
                                </p>
                                <hr style="width: 188px; margin: 27px auto">
                                <p class="price-item">Коррекция<br> наращивания:<span
                                            class="price-item-value">40 BYN</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contacts" id="contacts">
        <h1 class="contacts-title">Контакты</h1>
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <h6 class="contacts-col-name">Наш адрес:</h6>
                    <p class="contacts-col-description">г. Гродно, ул. Кирова 45</p>
                </div>
                <div class="col-xl-4">
                    <h6 class="contacts-col-name">Номер для связи:</h6>
                    <p class="contacts-col-description">+375 29 22 32 111 МТС<br>
                        +375 29 66 32 111 Velcom</p>
                </div>
                <div class="col-xl-4">
                    <h6 class="contacts-col-name">Мы работаем:</h6>
                    <p class="contacts-col-description">08:00 - 20:00</p>
                </div>
            </div>
        </div>
    </section>

    <section class="location-map">
        <iframe src="https://yandex.com/map-widget/v1/?um=constructor%3Ad141a15217be3a9b481fa9cd25c26630ae943665441359dcfd30494e8aaa1be9&amp;source=constructor"
                width="100%" height="400" frameborder="0"></iframe>
    </section>
    @include('partials.content-page')
    @endwhile
@endsection
