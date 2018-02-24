@extends('layouts.master')

@section('header')
    <header class="masthead" style="background-image: url('/storage/posts/bg-blog.jpeg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Blog BR tech</h1>
              <span class="subheading">Blog BR tech - Demonstrando o futuro!</span>
            </div>
          </div>
        </div>
      </div>
    </header>
@endsection

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

            @foreach ($posts as $post)
                @include('layouts.partials.post', ['post' => $post])
            @endforeach

            <!-- Pager -->
            {{ $posts->links() }}
        </div>
      </div>
    </div>
@endsection