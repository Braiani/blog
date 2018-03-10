@extends('layouts.master')

@section('title', 'Contato')

@section('header')
<header class="masthead" style="background-image: url('/img/contact-bg.jpg')">
	<div class="overlay"></div>
	<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			<div class="page-heading">
				<h1>Entre em contato</h1>
				<span class="subheading">Tem alguma pergunta? Temos a resposta.</span>
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
      <p>Está com alguma dúvida? Tem alguma sugestão a fazer? Gostaria de fazer um orçamento?</p>
      <p>Preencha o formulário abaixo e entraremos em contato o mais breve possível!</p>
      <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
      <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
      <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
      <form name="sentMessage" id="contactForm" method="POST" action="{{ url('/blog/contato') }}">
        {{ csrf_field() }}
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Nome</label>
            <input type="text" class="form-control" placeholder="Nome" name="name" required data-validation-required-message="Por favor, digite seu nome.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>E-mail</label>
            <input type="email" class="form-control" placeholder="E-mail" name="email" required data-validation-required-message="Por favor, digite seu e-mail.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Telefone</label>
            <input type="tel" class="form-control" placeholder="Telefone" name="phone" required data-validation-required-message="Por favor, coloque um telefone para contator.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Mensagem</label>
            <textarea rows="5" class="form-control" placeholder="Mensagem" name="message" required data-validation-required-message="Digite a mensagem."></textarea>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <br>
        <div id="success"></div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection