<!DOCTYPE html>
<html lang="en">
  <head>
  	@section('head')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('male.png') }}">

    <title>FaceMash 2.0</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('dist/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    @show
  </head>

  <body>
  	@section('body')
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    	<a href="#"><img src="{{ asset('male.png') }}" alt="face" width='50px' height='50px' style="float:left;"></a>
      <div class="container">
      	<!--<a href="#"><img src="{{ asset('male.png') }}" alt="face" width='50' height='50'></a>-->
        <div class="navbar-header">
      	<!--<a href="#"><img src="{{ asset('male.png') }}" alt="face" width='50px' height='50px' style="float:left;"></a>-->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a href="#"><img src="{{ asset('male.png') }}" alt="face" width='50px' height='50px' style="float:left;"></a>-->
          <a class="navbar-brand" href="#">FaceMash 2.0</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    @show
    <br><br><br>
    <div class="container">

      <div class="starter-template">
        <h1>&nbspAnd We're Back!</h1>
        <h3>&nbsp&nbsp&nbsp&nbsp. . .and we have improved a lot since you last saw us</h3><br><hr><br>
        <p class="lead">
        	An awesome photo shareing site

        </p>
        <br><br><br><hr><br><br><br>
        <a href="{{ url('/user/login') }}">
        <button type="button" class="btn btn-default btn-lg" style="align:center;">
          <span class="glyphicon glyphicon-user"></span> Enter The Site
		</button>
		</a>
      </div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
  </body>
</html>
