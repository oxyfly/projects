{{--
  Template Name: Catalog Template
--}}

@extends('layouts.app')
@section('content')
    @while(have_posts()) @php the_post() @endphp
    <section class="product-page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-xl-3 product-item">
                    <div class="product-block product-block-pos-1">
                        <div class="product-block-img">
                            <img class="product-stew" src="/wp-content/themes/grodfood/dist/images/product-page/stew-product.png" alt="Image">
                        </div>
                        <h2>Тушенка</h2>
                        <p class="product-description product-description-stew">Повышенная закладка мяса</p>
                        <div class="product-page-link-btn">
                            <a class="product-page-link" href="/stew-page">
                                <p class="product-page-link-text">Подробнее</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-xl-3 product-item">
                    <div class="product-block product-block-pos-2">
                        <div class="product-block-img">
                            <img class="product-ham" src="/wp-content/themes/grodfood/dist/images/product-page/ham-product.png" alt="Image">
                        </div>
                        <h2>Ветчинки</h2>
                        <p class="product-description product-description-ham">Шесть различных вкусов</p>
                        <div class="product-page-link-btn">
                            <a class="product-page-link" href="/ham-page">
                                <p class="product-page-link-text">Подробнее</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-xl-3 product-item">
                    <div class="product-block product-block-pos-3">
                        <div class="product-block-img">
                            <img class="product-porridge" src="/wp-content/themes/grodfood/dist/images/product-page/porridge-product.png" alt="Image">
                        </div>
                        <h2>Каши</h2>
                        <p class="product-description product-description-porridge">Со свининой и говядиной</p>
                        <div class="product-page-link-btn">
                            <a class="product-page-link" href="/porridge-page">
                                <p class="product-page-link-text">Подробнее</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-xl-3 product-item">
                    <div class="product-block product-block-pos-4">
                        <div class="product-block-img">
                            <img class="product-pate" src="/wp-content/themes/grodfood/dist/images/product-page/pate-product.png"
                                 alt="Image">
                        </div>
                        <h2 class="product-pate-title">Паштеты</h2>
                        <p class="product-description product-description-pate">Куриные и печеночные</p>
                        <div class="product-page-link-btn">
                            <a class="product-page-link" href="/pate-page">
                                <p class="product-page-link-text">Подробнее</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-img">
        <img src="/wp-content/themes/grodfood/dist/images/misc/footer-img.jpg" alt="Image">
    </section>
    @endwhile
@endsection