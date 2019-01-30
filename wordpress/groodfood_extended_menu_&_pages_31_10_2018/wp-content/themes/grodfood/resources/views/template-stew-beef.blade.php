{{--
  Template Name: Stew-beef Template
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
            <li class="breadcrumb-item"><a href="/stew-beef">Говядина</a></li>
        </ol>
    </nav>
    <section class="stew-product-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h3 class="stew-product-title-name">Говядина</h3>
                        <p class="stew-product-title-about">Говядина производимая ТМ Гродфуд это традиционная говядина
                            произведенная согласно самым высоким требованиям. Для производства говядины используется
                            отборное сырье от лучших поставщиков.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="stew-product-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="stew-product-block">
                        <div class="stew-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-beef/001.jpg" alt="Image">
                        </div>
                        <h3>Тушеная говядина, ж/б</h3>
                        <ul class="stew-product-description">
                            <li>Массовая доля мяса по закладке: 97,5%</li>
                            <li>Масса нетто, г: 338, 525</li>
                            <li>Срок годности: 4 года</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="stew-product-block">
                        <div class="stew-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-beef/002.jpg" alt="Image">
                        </div>
                        <h3>Тушеная говядина, стекло</h3>
                        <ul class="stew-product-description">
                            <li>Массовая доля мяса по закладке: 97,5%</li>
                            <li>Масса нетто, г: 500</li>
                            <li>Срок годности: 3 года</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="stew-product-block">
                        <div class="stew-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-beef/003.jpg" alt="Image">
                        </div>
                        <h3>Говядина в белом соусе по-белорусски</h3>
                        <ul class="stew-product-description">
                            <li>Массовая доля мяса по закладке: 90,2%</li>
                            <li>Масса нетто, г: 350</li>
                            <li>Количество штук в упаковке: 10</li>
                            <li>Срок годности: 3 года</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="stew-product-block">
                        <div class="stew-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-beef/004.jpg" alt="Image">
                        </div>
                        <h3>Гуляш говяжий в томатном соусе</h3>
                        <ul class="stew-product-description">
                            <li>Массовая доля мяса по закладке: 87,2%</li>
                            <li>Масса нетто, г: 350</li>
                            <li>Количество штук в упаковке: 10</li>
                            <li>Срок годности: 3 года</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="stew-product-block">
                        <div class="stew-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-beef/005.jpg" alt="Image">
                        </div>
                        <h3>Завтрак в дорогу из говядины</h3>
                        <ul class=stew-product-description">
                            <li>Массовая доля мяса по закладке: 93,2%</li>
                            <li>Масса нетто, г: 340</li>
                            <li>Количество штук в упаковке: 10</li>
                            <li>Срок годности: 3 года</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="stew-product-block">
                        <div class="stew-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-beef/006.jpg" alt="Image">
                        </div>
                        <h3>Говядина «Семейная»</h3>
                        <ul class="stew-product-description">
                            <li>Массовая доля мяса по закладке: 61%</li>
                            <li>Масса нетто, г: 340</li>
                            <li>Количество штук в упаковке: 10</li>
                            <li>Срок годности: 3 года</li>
                        </ul>
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