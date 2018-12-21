{{--
  Template Name: Consumer Template
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
                    <div class="col">
                        <h2 class="consumer-title">Потребителям</h2>
                        <p class="consumer-description">
                            Неослабевающий спрос на консервы ТМ Гродфуд обеспечен их стабильным и высоким качеством — все
                            они изготавливаются строго по ГОСТу, а интерес к ним на рынке постоянно «подогревается» новыми
                            акцентами-находками маркетинговой службы компании, которые непременно становятся новыми
                            «стандартами» для всех производителей мясной
                            консервации. На сегодняшний день это уже и обязательное использование банки с ключом
                            easy-open и акцентированное обозначение на упаковке содержания мяса в 97,5%.
                            Так, с недавних пор российский и белорусский потребитель ищет именно тушенку с обязательным
                            обозначением содержания мяса в 97,5 % — это стандарт, на который первой обратила внимание
                            потребителя ТМ «Гродфуд». А за прошедшие полгода компании-конкуренты так же стали использовать и
                            анонсировать обновления своих линеек с использованием крышки с ключом easy-open в упаковке
                            мясной консервации.
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