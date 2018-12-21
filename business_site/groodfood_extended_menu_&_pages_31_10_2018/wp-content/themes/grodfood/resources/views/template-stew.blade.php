{{--
  Template Name: Stew Template
--}}

@extends('layouts.app')
@section('content')
    @while(have_posts()) @php the_post() @endphp
    <section class="ornament ornament-top">
        <img src="/wp-content/themes/grodfood/dist/images/misc/ornament.png" alt="Image">
    </section>
    <nav aria-label="breadcrumb" class="breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="/catalog">Каталог</a></li>
            <li class="breadcrumb-item"><a href="/stew-page">Тушенка</a></li>
        </ol>
    </nav>
    <section class="stew-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h3 class="stew-title-name">Тушенка</h3>
                        <p class="stew-title-about">Самым удобным, надежным и популярным видом мяса, способным храниться
                            в течении продолжительного периода времени с начала 19 века было и остается тушеное
                            консервированное мясо, известное покупателю под названием «Тушенка». Белорусская тушенка ТМ
                            Гродфуд - это тушенка для тех, кто ищет <strong>стабильно высокое качество</strong> и уверенность в выбранном
                            продукте.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="stew-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-4 stew-item">
                    <div class="stew-block">
                        <div class="product-block-item-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-page-pig.jpg" alt="Image">
                        </div>
                        <h3>Свинина</h3>
                        <div class="pig-description">
                            <p class="stew-description">ТМ Гродфуд разрушает стереотип о "жирной свинине". Особенностью
                                консервов из свинины ТМ Гродфуд...</p>
                        </div>
                        <div class="product-stew-page-link-btn">
                            <a href="/stew-pig">
                                <p class="stew-page-link-text">Подробнее</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 stew-item">
                    <div class="stew-block">
                        <div class="product-block-item-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-page-beef.jpg" alt="Image">
                        </div>
                        <h3>Говядина</h3>
                        <div class="beef-description">
                            <p class="stew-description">Говядина производимая ТМ Гродфуд это традиционная говядина
                                произведенная согласно самым...</p>
                        </div>
                        <div class="product-stew-page-link-btn">
                            <a href="/stew-beef">
                                <p class="stew-page-link-text">Подробнее</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 stew-item">
                    <div class="stew-block">
                        <div class="product-block-item-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-page-chicken.jpg" alt="Image">
                        </div>
                        <h3>Мясо цыпленка</h3>
                        <div class="chicken-description">
                            <p class="stew-description">Уникальность консервов из мяса цыпленка под ТМ Гродфуд состоит в
                                том, что в их состав входят...</p>
                        </div>
                        <div class="product-stew-page-link-btn">
                            <a href="/stew-chicken">
                                <p class="stew-page-link-text">Подробнее</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 stew-item">
                    <div class="stew-block">
                        <div class="product-block-item-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-page-horsemeat.jpg"
                                 alt="Image">
                        </div>
                        <h3>Конина</h3>
                        <div class="horseflesh-description">
                            <p class="stew-description">ТМ Гродфуд продолжила выпуск премиальной линейки мясной
                                консервации.</p>
                        </div>
                        <div class="product-stew-page-link-btn">
                            <a href="/stew-horsemeat">
                                <p class="stew-page-link-text">Подробнее</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 stew-item">
                    <div class="stew-block">
                        <div class="product-block-item-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-page-turkey.jpg"
                                 alt="Image">
                        </div>
                        <h3 class="turkey-title">Индейка в собственном соку</h3>
                        <div class="turkey-description">
                            <p class="stew-description">Уникальное предложение на рынке - консервы из мяса индеек без
                                костей. Гипоаллергенный...</p>
                        </div>
                        <div class="product-stew-page-link-btn">
                            <a href="/stew-turkey">
                                <p class="stew-page-link-text">Подробнее</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ornament">
        <img src="/wp-content/themes/grodfood/dist/images/misc/ornament.png" alt="Image">
    </section>
    <section class="footer-img">
        <img src="/wp-content/themes/grodfood/dist/images/misc/footer-img.jpg" alt="Image">
    </section>
    @endwhile
@endsection