@extends('layouts.master')

@section('title', $post->title)

@section('header')
  <header class="masthead" style="background-image: url({{ url('/storage/' .  $post->image) }})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{ $post->title }}</h1>
            <h2 class="subheading">{{ $post->excerpt }}</h2>
            <span class="meta">Publicado por <a href="#">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}</span>
          </div>
        </div>
      </div>
    </div>
  </header>
@endsection
  
@section('content')
<!-- Post Content -->
<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        {!! $post->body !!}
      </div>
    </div>
  </div>
</article>
@endsection