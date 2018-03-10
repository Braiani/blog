<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ url('/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" href="{{ url('/img/logo.png') }}">	
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>BR tech Sistemas - BraianiTech</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	
    <link href="{{ url('/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ url('/css/font-awesome.css') }}" rel="stylesheet" />
    
	<link href="{{ url('/css/gsdk.css') }}" rel="stylesheet" />   
    <link href="{{ url('/css/demo.css') }}" rel="stylesheet" /> 

    <!--     Font Awesome     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
  
</head>

<body>
 <div id="navbar-full">
    <div id="navbar">
    <!--    
        navbar-default can be changed with navbar-ct-blue navbar-ct-azzure navbar-ct-red navbar-ct-green navbar-ct-orange  
        -->
        <nav class="navbar navbar-ct-blue navbar-transparent navbar-fixed-top" role="navigation">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">BR tech</a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="http://github.com/Braiani" target="_blank">Trabalhos anteriores</a></li>
                <li><a href="{{ url('/blog') }}" target="_blank">BRtech Blog</a></li>
                <li class="dropdown">
                  <a href="#gsdk" class="dropdown-toggle" data-toggle="dropdown">Mais <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#habilidades">Nossas habilidades</a></li>
                    <li><a href="#sobre-nos">Sobre nós</a></li>
                    <li><a href="{{ url('/blog/contato') }}" target="_blank">Contato</a></li>
                    <li class="divider"></li>
                  </ul>
                </li>
                <!-- <li>
                    <a href="javascript:void(0);" data-toggle="search" class="hidden-xs"><i class="fa fa-search"></i></a>
                </li> -->
              </ul>
               <!-- <form class="navbar-form navbar-left navbar-search-form" role="search">                  
                 <div class="form-group">
                      <input type="text" value="" class="form-control" placeholder="Search...">
                 </div> 
              </form>
              <ul class="nav navbar-nav navbar-right">
                    <li><a href="#gsdk">Register</a></li>
                    
                    <li><button href="#gsdk" class="btn btn-round btn-default">Sign in</button></li>
               </ul> -->
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <div class="blurred-container">
            <div class="img-src" style="background-image: url('/img/bg-home.png')"></div>
        </div>
    </div><!--  end navbar -->

</div> <!-- end menu-dropdown -->

<div class="main">
    <div class="container tim-container" style="max-width:800px; padding-top:100px">
        <div class="row tim-row"> 
            <h1 class="text-center">O QUE PODEMOS FAZER POR VOCÊ?
              <small class="subtitle">BRtech Sistemas - Desenvolvento o futuro!</small>
            </h1>
             <p>BraianiTech trabalha com o desenvolvimento de sistemas para todo o tipo de empresa, seja você um pequeno comerciante ou uma grande banca advocatícia, a BRtech pode te auxiliar no constante crescimento e controle de trabalho através do desenvolvimento de sistemas que facilitam seu dia!</p>
             <p>Possuímos o compromisso de trazer sempre o que for mais moderno e melhor atender as suas necessidades, seja você um iniciante em uma Start-Up ou dono de uma grande empresa.</p>
             <p>BRtech atua na área da consultoria tecnológica. Se você precisa de auxílio para contratação de uma hospedagem, compra de um domínio na internet, aquisição de equipamentos para uso pessoal ou comercial, a BRtech estará pronta para te atender.</p>
            <!--     end extras -->        
        </div>
    </div>
    <div class="space"></div>
</div>
<!-- end container -->

<hr>

<div id="habilidades" class="main">
  <div class="space"></div>
    <div class="container tim-container">
        <div class="tim-title">
            <h3>Nossas Habilidades</h3>
        </div>
        <div id="acordeon">
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-target="#collapseOne" href="#collapseOne" data-toggle="gsdk-collapse">
                      Javascript
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                          <span class="sr-only">75% Complete</span>
                        </div>
                      </div>
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse">
                  <div class="panel-body">
                    O JavaScript é uma linguagem de programação do lado "cliente", ou seja, é processada pelo navegador do usuário que está acessando a página. Com o JavaScript podemos criar efeitos especiais para as páginas na Web, além de podermos proporcionar uma maior interatividade com nossos usuários. Dessa forma podemos trazer muita qualidade ao conteúdo dispponibilizado ao cliente, foco principal de nosso trabalho. 
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-target="#collapseTwo" href="#collapseTwo" data-toggle="gsdk-collapse">
                      Bootstrap
                      <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body">
                    Bootstrap é um framework front-end que nos possibilita criar sites com tecnologia mobile (responsivo), adaptativo a qualquer tamanho de tela. Essa habilidade proporciona uma melhor visibilidade de seus sites na internet, pois a cada dia maiores são os números de acessos a internet através de um dispositivo móvel, smartphone.
                  </div>
                </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-target="#collapseFour" href="#collapseFour" data-toggle="gsdk-collapse">
                        PHP - Laravel
                        <div class="progress">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                            <span class="sr-only">95% Complete</span>
                          </div>
                        </div>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse">
                    <div class="panel-body">
                      Laravel é um Framework PHP utilizado para o desenvolvimento web, que utiliza a arquitetura MVC e tem como principal característica ajudar a desenvolver aplicações seguras e performáticas de forma rápida, com código limpo e simples, já que ele incentiva o uso de boas práticas de programação e utiliza o padrão PSR-2 como guia para estilo de escrita do código. Em outras palavras, você terá um sistema robusto, estável, seguro e confiável em pouco tempo, pois com essa framework o trabalho é altamente facilitado, o que se resume em um sistema pronto com menor tempo possível.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-target="#collapseFive" href="#collapseFive" data-toggle="gsdk-collapse">
                        Banco de dados
                        <div class="progress">
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                            <span class="sr-only">80% Complete</span>
                          </div>
                        </div>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseFive" class="panel-collapse collapse">
                    <div class="panel-body">
                      Bancos de dados, são coleções de informações que se relacionam de forma que crie um sentido. São de vital importância para empresas, e há duas décadas se tornaram a principal peça dos sistemas de informação. Um banco de dados bem desenvolvido faz a diferença entre a necessidade de manter arquivo físico, ou não conseguir achar a informação na hora que precisa. Nosso maior empenho é criar e manter uma base de dados confiável, armazenando-se as informações realmente necessárias.
                    </div>
                  </div>
                </div>
              </div>
        </div><!--  end acordeon -->
        <div class="space"></div>
      </div>
</div>
<!-- end main -->

<hr>

<div id="sobre-nos" class="main">
    <div class="container tim-container">
        <div id="extras">
            <div class="space"></div>
            <div class="row">
                <div class="col-md-7 col-md-offset-0 col-sm-10 col-sm-offset-1">
                    <div class="text-center">
                        <img src="{{ url('/img/BrTech.png') }}" alt="Rounded Image" class="img-rounded img-responsive img-dog">
                    </div>
                </div>
                <div class="col-md-5 col-sm-12">
                  @if ($about->title != '')
                    <h1 class="text-center">{{ $about->title }}
                  @else
                    <h1 class="text-center">Sobre BRtech Sistemas
                  @endif
                  
                    <small class="subtitle">@if ($about->excerpt != '') {{ $about->excerpt }} @else Conheça nos um pouco @endif</small></h1>
                    <hr>
                  @isset($about->body)
                      {!! $about->body !!}
                  @endisset
                </div>
            </div>
        </div>
    <!--     end extras -->    
    </div>
<!-- end container -->
<div class="space-30"></div>
</div>



  <script src="{{ asset('/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/jquery-ui-1.10.4.custom.min.js') }}" type="text/javascript"></script>

  <script src="{{ asset('/js/bootstrap.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/gsdk-checkbox.js')}}"></script>
  <script src="{{ asset('/js/gsdk-radio.js')}}"></script>
  <script src="{{ asset('/js/gsdk-bootstrapswitch.js')}}"></script>
  <script src="{{ asset('/js/get-shit-done.js')}}"></script>
  
  <script src="{{ asset('/js/custom.js')}}"></script>
</body>

</html>