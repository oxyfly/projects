{{--
  Template Name: Ham-aromatic Template
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
            <li class="breadcrumb-item"><a href="/ham-page">Ветчинки</a></li>
            <li class="breadcrumb-item"><a href="/ham-slav">Славянская</a></li>
        </ol>
    </nav>
{{--    <section class="ham-product-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h3 class="ham-product-title-name">Ароматная</h3>
                        <p class="ham-product-title-about">Консервы мясные стерилизованные.<br>
                            Масса нетто, г: 300</p>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <section class="ham-product-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <div class="ham-product-block-1">
                        <div class="ham-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/ham-spicy/001.jpg" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="ham-product-block">
                        <h3>Консервы мясные стерилизованные. "Ароматная"</h3>
                        <ul class="ham-product-description-1">
                            <li>Упаковка: ж/б + ключ easy-open</li>
                            <li>Масса нетто, г: 300</li>
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