@extends('blog.template')

@section('header')
    <h1 class="blog-title">The Bootstrap Blog</h1>
    <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
@stop

@section('content')
    @for($i = 0; $i < 10; $i++)
        <div class="blog-post">
            <img src="{{ asset('blog/images/6.jpg') }}" class="blog-image">
            <h2 class="blog-post-title">Another blog post</h2>
            <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>
        </div><!-- /.blog-post -->
        <hr>
    @endfor
@stop