{{--
  Template Name: For Sport Template
--}}

@extends('layouts.app')
@section('content')
    @while(have_posts()) @php the_post() @endphp
    @include('partials.content-page')
    <nav aria-label="breadcrumb" class="breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="/">Главная</a></li>
            <li class="breadcrumb-item"><a href="/for-sport">Для спорта</a></li>
        </ol>
    </nav>

    <section class="for-sport">
        <div class="container">
            <div class="row">
                {{--content--}}
            </div>
        </div>
    </section>
    @endwhile
@endsection
