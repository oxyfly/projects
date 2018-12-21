{{--
  Template Name: Pate Template
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
        </ol>
    </nav>
    <section class="pate-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h3 class="pate-title-name">Паштеты</h3>
                        <p class="pate-title-about">Паштеты ТМ Гродфуд с использованием мяса птицы приготовлены на
                            курином бульоне. Характеризуются нежной кремовой консистенцией, пониженным содержанием соли
                            и печени.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pate-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-4 pate-item">
                    <div class="pate-block">
                        <div class="product-block-item-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/pate-page-gold.jpg" alt="Image">
                        </div>
                        <h3>Золотая Серия</h3>
                        <ul class="pate-description pate-description-gold">
                            <li>Масса нетто, г: 100</li>
                        </ul>
                        <div class="product-pate-page-link-btn">
                            <a href="/pate-gold">
                                <p class="pate-page-link-text">Подробнее</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 pate-item">
                    <div class="pate-block">
                        <div class="product-block-item-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/pate-page-chicken.jpg" alt="Image">
                        </div>
                        <h3>Куриный</h3>
                        <p class="pate-description">Куриный печеночный</p>
                        <div class="product-pate-page-link-btn">
                            <a href="/pate-chicken">
                                <p class="pate-page-link-text">Подробнее</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 pate-item">
                    <div class="pate-block">
                        <div class="product-block-item-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/pate-page-mushroom.jpg" alt="Image">
                        </div>
                        <h3>С грибами</h3>
                        <p class="pate-description">Куриный с грибами</p>
                        <div class="product-pate-page-link-btn">
                            <a href="/pate-mushroom">
                                <p class="pate-page-link-text">Подробнее</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 pate-item">
                    <div class="pate-block">
                        <div class="product-block-item-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/pate-page-paprika.jpg" alt="Image">
                        </div>
                        <h3>С паприкой</h3>
                        <p class="pate-description">Куриный с паприкой</p>
                        <div class="product-pate-page-link-btn">
                            <a href="/pate-paprika">
                                <p class="pate-page-link-text">Подробнее</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 pate-item">
                    <div class="pate-block">
                        <div class="product-block-item-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/pate-page-tomato.jpg" alt="Image">
                        </div>
                        <h3>С помидорами</h3>
                        <p class="pate-description">Куриный с помидорами</p>
                        <div class="product-pate-page-link-btn">
                            <a href="/pate-tomato">
                                <p class="pate-page-link-text">Подробнее</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 pate-item">
                    <div class="pate-block">
                        <div class="product-block-item-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/pate-page-turkey.jpg" alt="Image">
                        </div>
                        <h3>Индюшиный</h3>
                        <p class="pate-description">Индюшиный печеночный</p>
                        <div class="product-pate-page-link-btn">
                            <a href="/pate-turkey">
                                <p class="pate-page-link-text">Подробнее</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 pate-item">
                    <div class="pate-block">
                        <div class="product-block-item-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/pate-page-duck.jpg" alt="Image">
                        </div>
                        <h3>Утиный</h3>
                        <p class="pate-description">Утиный печеночный</p>
                        <div class="product-pate-page-link-btn">
                            <a href="/pate-duck">
                                <p class="pate-page-link-text">Подробнее</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 pate-item">
                    <div class="pate-block">
                        <div class="product-block-item-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/pate-page-goose.jpg" alt="Image">
                        </div>
                        <h3>Гусиный</h3>
                        <p class="pate-description">Гусиный печеночный</p>
                        <div class="product-pate-page-link-btn">
                            <a href="/pate-goose">
                                <p class="pate-page-link-text">Подробнее</p>
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