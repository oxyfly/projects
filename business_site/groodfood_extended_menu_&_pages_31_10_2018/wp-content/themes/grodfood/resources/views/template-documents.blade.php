{{--
  Template Name: Documents Template
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
                        <h2 class="documents-title">Документация</h2>
                        <p class="documents-description">
                            СООО "КВИНФУД" является резидентом СЭЗ "Гродноинвест".<br>
                            Юридический адрес и реквизиты предприятия:<br>
                            230005 Республика Беларусь<br>
                            г. Гродно, ул. Мясницкая, 16<br>
                            УНП 590618139, ОКПО29205065<br><br>
                            IBAN:  BY72PJCB30126005871000000933 в ОАО «Приорбанк»  г. Минск, BIC: PJCBBY2X
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="certificate">
                            <img class="certificate-img"
                                 src="/wp-content/themes/grodfood/dist/images/product-page/certificate-1.jpg" alt="Image">
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