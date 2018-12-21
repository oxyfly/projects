{{--
  Template Name: Pate-gold Template
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
            <li class="breadcrumb-item"><a href="/pate-page">Паштеты</a></li>
            <li class="breadcrumb-item"><a href="/pate-gold">Золотая Серия</a></li>
        </ol>
    </nav>
    <section class="pate-product-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <div class="pate-product-block-1">
                        <div class="pate-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/pate-gold/001.jpg"
                                 alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="pate-product-block-1">
                        <h3>Классический</h3>
                        <ul class="pate-product-description-1">
                            <li>Массовая доля мясных ингредиентов: 95,8%</li>
                            <li>Масса нетто, г: 100</li>
                            <li>Количество штук в упаковке: 12</li>
                            <li>Количество упаковок на паллете: 225</li>
                            <li>Срок годности: 2 года</li>
                            <li>Количество упаковок на паллете: 225</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="pate-product-block-1">
                        <div class="pate-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/pate-gold/002.jpg"
                                 alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="pate-product-block">
                        <h3>Паштет куриный печеночный</h3>
                        <ul class="pate-product-description-1">
                            <li>Упаковка: ж/б + ключ easy-open</li>
                            <li>Масса нетто, г: 290</li>
                            <li>Количество штук в упаковке: 8</li>
                            <li>Количество упаковок на паллете: 240</li>
                            <li>Срок годности: 2 года</li>
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