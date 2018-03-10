<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/blog') }}">{{ setting('site.title') }}</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    Menu
    <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/blog') }}">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/blog/sobre-nos') }}">Sobre nós</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/blog/contato') }}">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>