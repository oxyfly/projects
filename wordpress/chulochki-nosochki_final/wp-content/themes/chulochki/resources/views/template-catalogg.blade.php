{{--
  Template Name: Catalogg Template
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
    @include('partials.content-page')
    <nav aria-label="breadcrumb" class="breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="http://localhost:3000/">Главная</a></li>
            <li class="breadcrumb-item"><a href="http://localhost:3000/catalog/">Чулки</a></li>
        </ol>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="product-catalog-item product-catalog-block-pos-bottom">
                    <a href="/description-honey">
                        <div class="product-catalog-img">
                            <img src="/wp-content/themes/chulochki/dist/images/honey-pot.jpg" alt="Image"
                                 title="Мед">
                        </div>
                    </a>
                </div>
                <div class="product-catalog-link">
                    <a href="/description-honey"><p class="product-catalog-title"></p>Мед натуральный</a>
                </div>
                <p class="product-catalog-price">Цена: 44,00 руб.</p>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="product-catalog-item product-catalog-block-pos-bottom">
                    <a href="/description-honey">
                        <div class="product-catalog-img">
                            <img src="/wp-content/themes/chulochki/dist/images/honey-pot.jpg" alt="Image"
                                 title="Мед">
                        </div>
                    </a>
                </div>
                <div class="product-catalog-link">
                    <a href="/description-honey"><p class="product-catalog-title"></p>Мед натуральный</a>
                </div>
                <p class="product-catalog-price">Цена: 44,00 руб.</p>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="product-catalog-item product-catalog-block-pos-bottom">
                    <a href="/description-honey">
                        <div class="product-catalog-img">
                            <img src="/wp-content/themes/chulochki/dist/images/honey-pot.jpg" alt="Image"
                                 title="Мед">
                        </div>
                    </a>
                </div>
                <div class="product-catalog-link">
                    <a href="/description-honey"><p class="product-catalog-title"></p>Мед натуральный</a>
                </div>
                <p class="product-catalog-price">Цена: 44,00 руб.</p>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="product-catalog-item product-catalog-block-pos-bottom">
                    <a href="/description-honey">
                        <div class="product-catalog-img">
                            <img src="/wp-content/themes/chulochki/dist/images/honey-pot.jpg" alt="Image"
                                 title="Мед">
                        </div>
                    </a>
                </div>
                <div class="product-catalog-link">
                    <a href="/description-honey"><p class="product-catalog-title"></p>Мед натуральный</a>
                </div>
                <p class="product-catalog-price">Цена: 44,00 руб.</p>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="product-catalog-item product-catalog-block-pos-bottom">
                    <a href="/description-honey">
                        <div class="product-catalog-img">
                            <img src="/wp-content/themes/chulochki/dist/images/honey-pot.jpg" alt="Image"
                                 title="Мед">
                        </div>
                    </a>
                </div>
                <div class="product-catalog-link">
                    <a href="/description-honey"><p class="product-catalog-title"></p>Мед натуральный</a>
                </div>
                <p class="product-catalog-price">Цена: 44,00 руб.</p>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="product-catalog-item product-catalog-block-pos-bottom">
                    <a href="/description-honey">
                        <div class="product-catalog-img">
                            <img src="/wp-content/themes/chulochki/dist/images/honey-pot.jpg" alt="Image"
                                 title="Мед">
                        </div>
                    </a>
                </div>
                <div class="product-catalog-link">
                    <a href="/description-honey"><p class="product-catalog-title"></p>Мед натуральный</a>
                </div>
                <p class="product-catalog-price">Цена: 44,00 руб.</p>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="product-catalog-item product-catalog-block-pos-bottom">
                    <a href="/description-honey">
                        <div class="product-catalog-img">
                            <img src="/wp-content/themes/chulochki/dist/images/honey-pot.jpg" alt="Image"
                                 title="Мед">
                        </div>
                    </a>
                </div>
                <div class="product-catalog-link">
                    <a href="/description-honey"><p class="product-catalog-title"></p>Мед натуральный</a>
                </div>
                <p class="product-catalog-price">Цена: 44,00 руб.</p>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="product-catalog-item product-catalog-block-pos-bottom">
                    <a href="/description-honey">
                        <div class="product-catalog-img">
                            <img src="/wp-content/themes/chulochki/dist/images/honey-pot.jpg" alt="Image"
                                 title="Мед">
                        </div>
                    </a>
                </div>
                <div class="product-catalog-link">
                    <a href="/description-honey"><p class="product-catalog-title"></p>Мед натуральный</a>
                </div>
                <p class="product-catalog-price">Цена: 44,00 руб.</p>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="product-catalog-item product-catalog-block-pos-bottom">
                    <a href="/description-honey">
                        <div class="product-catalog-img">
                            <img src="/wp-content/themes/chulochki/dist/images/honey-pot.jpg" alt="Image"
                                 title="Мед">
                        </div>
                    </a>
                </div>
                <div class="product-catalog-link">
                    <a href="/description-honey"><p class="product-catalog-title"></p>Мед натуральный</a>
                </div>
                <p class="product-catalog-price">Цена: 44,00 руб.</p>
            </div>
        </div>
    </div>
    @endwhile
@endsection
