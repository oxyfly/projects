{{--
  Template Name: Consumer about stew Template
--}}

@extends('layouts.app')
@section('content')
    @while(have_posts()) @php the_post() @endphp
    <section class="consumer">
        <section class="ornament">
            <img src="/wp-content/themes/grodfood/dist/images/misc/ornament.png" alt="Image">
        </section>
        <nav aria-label="breadcrumb" class="breadcrumbs">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="http://grodfood.ruslanyushkevich.com/">Назад</a></li>
            </ol>
        </nav>
        <section class="text-page-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="consumer-about-product-title">О тушенке</h2>
                        <p class="consumer-about-product-description">
                            Тушёнка была изобретена во Франции в XIX веке. Изобретателем тушенки в ее современном виде
                            считается французский кондитер Н.Ф. Аппер, предложивший способ закатки и стерилизации продуктов
                            непосредственно в ёмкостях (изначально стеклянных). Этот способ был одобрен самим Наполеоном
                            Бонапартом. Изобретатель был удостоен премии и негласного титула «Благодетель
                            человечества.<br><br>
                            Жестяную банку для тушеной консервированной говядины изобрели чуть позже в Англии.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="about-pate">
                            <img class="about-pate-img"
                                 src="/wp-content/themes/grodfood/dist/images/product-page/about-stew.jpg" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="ornament">
        <img src="/wp-content/themes/grodfood/dist/images/misc/ornament.png" alt="Image">
    </section>
    <section class="footer-img">
        <img src="/wp-content/themes/grodfood/dist/images/misc/footer-img.jpg" alt="Image">
    </section>
    @endwhile
@endsection