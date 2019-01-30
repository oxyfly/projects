{{--
  Template Name: Pate-gold Template
--}}

@extends('layouts.app')
@section('content')
    @while(have_posts()) @php the_post() @endphp
    @endwhile
@endsection