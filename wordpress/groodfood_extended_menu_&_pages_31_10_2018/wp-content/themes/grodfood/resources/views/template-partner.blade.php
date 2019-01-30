{{--
  Template Name: Partner Template
--}}

@extends('layouts.app')
@section('content')
    @while(have_posts()) @php the_post() @endphp
    <section class="partner">
        <section class="ornament ornament-top">
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
                        <h2 class="partner-title">Партнерам</h2>
                        <p class="partner-description">
                            Сегодня продукция компании «Квинфуд» продолжает расширять свое присутствие в федеральных и
                            региональных сетях. Продукты компании уже реализуются на рынках Российской федерации,
                            Казахстана. Молдовы, а также Республики Беларусь. Компания «Квинфуд» приглашает новых партнеров
                            к сотрудничеству.
                        </p>
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