<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Template that use Bootstrap</title>
    @yield('head')
    <!-- Bootstrap CSS served from a CDN -->
   	{!! Html::style('css/bootstrap.min.css') !!}
	 {!! Html::script('js/bootstrap.min.js') !!}
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.0/superhero/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="container-fluid">
    <nav class="navbar navbar-default" role="navigation">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-slide-dropdown">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      @if(!Auth::guest())
      <a class="navbar-brand" href="{{ route('calender') }}">kalender</a>
      <a class="navbar-brand" href="{{ route('employelist') }}">medewerkers</a>
      @endif
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-slide-dropdown">
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">zoek</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          @if(Auth::guest())
        <li><a href="{{ route('login') }}">login</a></li>
        <li><a href="{{ route('register') }}">registreer</a></li>
        @else
        <li><a href="{{ route('logout') }}">logout</a></li>
        @endif
        </ul>
    </div><!-- /.navbar-collapse -->

  
</nav>
</div><!-- /.container-fluid -->
    <div class="container">
    	@yield('body')
    </div>
  </body>
</html>