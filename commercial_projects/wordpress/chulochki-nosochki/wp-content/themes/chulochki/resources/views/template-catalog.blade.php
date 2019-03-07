{{--
  Template Name: Catalog Template
--}}

{{-- description-honeys --}}

@extends('layouts.app')
@section('content')
    @while(have_posts()) @php the_post() @endphp
    @include('partials.content-page')
    <nav aria-label="breadcrumb" class="breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="/">Главная</a></li>
            <li class="breadcrumb-item"><a href="/catalog">Каталог</a></li>
        </ol>
    </nav>

    <div class="container honey-pot-description-container">
        <div class="row">
{{--            <div class="col-md-6 col-xl-5">
                <div class="honey-pot-wrap">
                    <img class="honey-pot-img"
                         src="/wp-content/themes/chulochki/dist/images/product-description/honey.jpg" alt="">
                </div>
            </div>

            <div class="col-md-6 col-xl-7">
                <p class="honey-pot-title">Мёд натуральный</p>
                <p class="honey-pot-price">44,00 руб.</p>
                <hr>
                <p class="honey-pot-description">
                    Гречишный мед считается одним из лучших сортов меда. Собирают его пчелы с цветущих соцветий гречихи,
                    зерна которой богаты не только белками, углеводами и жирами, но и различными микро- и
                    макроэлементами, витаминами. Так как Россия лидирует по посевам гречихи, пчелы имеют возможность
                    заготавливать этот мед практически повсеместно и в больших количествах.
                </p>
                <div class="btn-honey-pot-description-wrap">
                    <a class="btn-honey-pot-description" href="#">Положить в корзину</a>
                </div>
            </div>--}}

{{--            <h2 class="similar-products-title">Похожие продукты</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="similar-product-item">
                            <a href="#">
                                <div class="similar-product-img">
                                    <img src="/wp-content/themes/chulochki/dist/images/honey-pot.jpg" alt="Image"
                                         title="Мед">
                                </div>
                            </a>
                        </div>
                        <div class="product-catalog-link">
                            <a href="#"><p class="product-catalog-title"></p>Мед натуральный</a>
                        </div>
                        <p class="product-catalog-price">Цена: 44,00 руб.</p>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="similar-product-item">
                            <a href="#">
                                <div class="similar-product-img">
                                    <img src="/wp-content/themes/chulochki/dist/images/honey-pot.jpg" alt="Image"
                                         title="Мед">
                                </div>
                            </a>
                        </div>
                        <div class="product-catalog-link">
                            <a href="#"><p class="product-catalog-title"></p>Мед натуральный</a>
                        </div>
                        <p class="product-catalog-price">Цена: 44,00 руб.</p>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="similar-product-item">
                            <a href="#">
                                <div class="similar-product-img">
                                    <img src="/wp-content/themes/chulochki/dist/images/honey-pot.jpg" alt="Image"
                                         title="Мед">
                                </div>
                            </a>
                        </div>
                        <div class="product-catalog-link">
                            <a href="#"><p class="product-catalog-title"></p>Мед натуральный</a>
                        </div>
                        <p class="product-catalog-price">Цена: 44,00 руб.</p>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="similar-product-item">
                            <a href="#">
                                <div class="similar-product-img">
                                    <img src="/wp-content/themes/chulochki/dist/images/honey-pot.jpg" alt="Image"
                                         title="Мед">
                                </div>
                            </a>
                        </div>
                        <div class="product-catalog-link">
                            <a href="#"><p class="product-catalog-title"></p>Мед натуральный</a>
                        </div>
                        <p class="product-catalog-price">Цена: 44,00 руб.</p>
                    </div>
                </div>
            </div>--}}
        </div>
    </div>

    @endwhile
@endsection
