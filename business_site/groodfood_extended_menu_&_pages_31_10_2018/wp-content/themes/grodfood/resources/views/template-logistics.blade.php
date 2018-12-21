{{--
  Template Name: Logistics Template
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
                        <h2 class="logistics-title">Логистика</h2>
                        <p class="logistics-description">
                            ТМ "Гродфуд" стремится удовлетворить не только желания и потребности конечного потребителя, но и
                            сделать работу с продукцией максимально удобной на всех этапах товаро-проводящей сети. Так
                            продукция категории Тушенка и Каша с мясом фасуется в упаковку по 10 единиц. А продукция в
                            категориях Паштет и Ветчинка в удобную тару шоу-бокс, которая располагается на торговой полке,
                            освбождая сотрудников магазинов от лишней работы по размещению товара и выгодно выделяет
                            продукцию ТМ Гродфуд в торговой точке.
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