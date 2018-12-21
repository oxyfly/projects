{{--
  Template Name: Distribution Template
--}}

@extends('layouts.app')
@section('content')
    @while(have_posts()) @php the_post() @endphp
    <section class="distribution">
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
                    <div class="col">
                        <h2 class="distribution-title">Дистрибуция</h2>
                        <p class="distribution-description">
                            Основным принципом работы СООО "Квинфуд" является исполнение взятых на себя обязательств и
                            четкое соблюдение региональной и ценовой политики, в целях защиты экономических интересов наших
                            партнеров. На карте представлены контакты официальных партнеров ТМ Гродфуд. Так же, по любым,
                            интересующим Вас вопросам, можно связаться напраяму со специалистами отдела продаж и сервиса в
                            Республике Беларусь.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="dist-world-map">
                            <img class="world-map" src="/wp-content/themes/grodfood/dist/images/misc/distribution-world-map.jpg" alt="">
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