{{--
  Template Name: Search Page Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  <?php get_search_form(); ?>

  @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
