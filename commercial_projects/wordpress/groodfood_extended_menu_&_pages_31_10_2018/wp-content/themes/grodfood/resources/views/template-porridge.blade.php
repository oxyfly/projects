{{--
  Template Name: Porridge Template
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
            <li class="breadcrumb-item"><a href="/porridge-page">Каши</a></li>
        </ol>
    </nav>
    <section class="porridge-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h3 class="porridge-title-name">Каши</h3>
                        <p class="porridge-title-about">Каша ТМ Гродфуд это классическая консервированная каша с
                            содержанием мяса более 37%. Отсается только разогреть и на Вашем столе готовое сытное
                            блюдо.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="porridge-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-4 porridge-item">
                    <div class="porridge-block">
                        <div class="product-block-item-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/porridge-page-pig.jpg" alt="Image">
                        </div>
                        <h3>Со свининой</h3>
                        <ul class="porridge-description">
                            <li>Массовая доля мяса по закладке: 37,7%</li>
                            <li>Масса нетто, г: 340</li>
                        </ul>
                        <div class="product-pate-page-link-btn">
                            <a href="/porridge-pig">
                                <p class="pate-page-link-text">Подробнее</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 porridge-item">
                    <div class="porridge-block">
                        <div class="product-block-item-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/porridge-page-beef.jpg" alt="Image">
                        </div>
                        <h3>С говядиной</h3>
                        <ul class="porridge-description">
                            <li>Массовая доля мяса по закладке: 37,7%</li>
                            <li>Масса нетто, г: 340</li>
                        </ul>
                        <div class="product-pate-page-link-btn">
                            <a href="/porridge-beef">
                                <p class="pate-page-link-text">Подробнее</p>
                            </a>
                        </div>
                    </div>
                </div>
{{--                <div class="col-md-6 col-xl-4 porridge-item">
                    <div class="porridge-block">
                        <div class="product-block-item-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/porridge-page-rice.jpg" alt="Image">
                        </div>
                        <h3>Рисовая по-белорусски</h3>
                        <ul class="porridge-description">
                            <li>Массовая доля мяса по закладке: 37,7%</li>
                            <li>Масса нетто, г: 340</li>
                        </ul>
                        <div class="product-pate-page-link-btn">
                            <a href="/porridge-rice">
                                <p class="pate-page-link-text">Подробнее</p>
                            </a>
                        </div>
                    </div>
                </div>--}}
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