<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Imagineering</title>
    <link rel="stylesheet" href="/css/app.css">

  </head>
  <body>
    @include('inc.navbar')
      <div class="container">
        @if(Request::is('/'))
          @include('inc.showcase')
        @endif
        <div class="row">
          <div class="col-md-8 col-lg-8">
            <div class="jumbotron">
              @include('inc.messages')
              @yield('content')
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            @include('inc.sidebar')
          </div>
        </div>
      </div>
    @include('inc.footer')
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
