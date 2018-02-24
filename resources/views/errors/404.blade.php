@extends('layouts.master')

@section('title', 'Página não encontrada!')

@section('header')
<header class="masthead" style="background-image: url('/storage/posts/post4.jpg')">
	<div class="overlay"></div>
	<div class="container">
	  <div class="row">
	    <div class="col-lg-8 col-md-10 mx-auto">
	      <div class="post-heading">
	        <h1>404 - Página não encontrada!</h1>
	        <h2 class="subheading">A página que você tentou acessar não foi encontrada!</h2>
	        <span class="meta">Voltar para a <a href="/">página inicial</a></span>
	      </div>
	    </div>
	  </div>
	</div>
</header>
@endsection