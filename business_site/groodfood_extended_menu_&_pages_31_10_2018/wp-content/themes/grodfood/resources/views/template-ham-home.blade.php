{{--
  Template Name: Ham-home Template
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
            <li class="breadcrumb-item"><a href="/ham-home">Домашняя</a></li>
        </ol>
    </nav>
    <section class="ham-product-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <div class="ham-product-block-1">
                        <div class="ham-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/ham-home/001.jpg" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="ham-product-block-1">
                        <h3>Консервы мясные стерилизованные. "Домашняя"</h3>
                        <ul class="ham-product-description-1">
                            <li>Упаковка: ламистер</li>
                            <li>Масса нетто, г: 110</li>
                            <li>Срок годности: 2 года</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="ham-product-block-1">
                        <div class="ham-product-img">
                            <img src="/wp-content/themes/grodfood/dist/images/product-pot/ham-home/002.jpg" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="ham-product-block-1">
                        <h3>Консервы мясные стерилизованные</h3>
                        <ul class="ham-product-description-1">
                            <li>Упаковка: ламистер</li>
                            <li>Масса нетто, г: 300</li>
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