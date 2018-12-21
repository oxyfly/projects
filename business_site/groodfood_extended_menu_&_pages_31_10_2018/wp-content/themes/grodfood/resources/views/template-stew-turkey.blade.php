{{--
  Template Name: Stew-turkey Template
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
            <li class="breadcrumb-item"><a href="/stew-turkey">Индейка в собственном соку</a></li>
        </ol>
    </nav>
    <section class="stew-product-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h3 class="stew-product-title-name">Индейка в собственном соку</h3>
                        <p class="stew-product-title-about">Уникальное предложение на рынке - консервы из мяса индеек без
                            костей. Гипоаллергенный, низкокалорийный продукт, подходит для диетического питания.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="stew-product-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <div class="stew-product-block-1">
                        <div class="stew-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/stew-turkey/001.jpg" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="stew-product-block-1">
                        <h3>Индейка в собственном соку</h3>
                        <ul class="stew-product-description-1">
                            <li>Массовая доля мяса по закладке: 97,4%</li>
                            <li>Масса нетто, г: 338</li>
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