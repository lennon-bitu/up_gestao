<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('favicon.ico')}}">

    <title>Up Gestão</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/estilo_base.css')}}">

    <!-- Estilos customizados para esse template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>

    <header>
      @include('site.layout._partials.menu')
    </header>
    
    @yield('conteudo')
    
    

<!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Voltar ao topo</a></p>
        <p>&copy; Companhia S.A., 2017-2018 &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
      </footer>
    </main>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com.br/docs/4.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com.br/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com.br/docs/4.1/dist/js/bootstrap.min.js"></script>
    <!-- Só faz o nossos placeholders de imagens funcionarem. Não precisar copiar a próxima linha! -->
    <script src="https://getbootstrap.com.br/docs/4.1/assets/js/vendor/holder.min.js"></script>
  </body>
</html>
