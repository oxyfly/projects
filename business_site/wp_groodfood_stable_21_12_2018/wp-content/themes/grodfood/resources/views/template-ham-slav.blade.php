{{--
  Template Name: Ham-slav Template
--}}

@extends('layouts.app')
@section('content')
    @while(have_posts()) @php the_post() @endphp
    @endwhile
@endsection