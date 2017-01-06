<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>Symulator inwestycji w opcje binarne</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Lukasz Cholewa">

    <!-- Bootstrap Css -->
    <link href="{{ URL::secureAsset('bootstrap-assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Style -->
    <link href="{{ URL::secureAsset('plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ URL::secureAsset('plugins/owl-carousel/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ URL::secureAsset('plugins/owl-carousel/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ URL::secureAsset('plugins/Lightbox/dist/css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ URL::secureAsset('plugins/Icons/et-line-font/style.css') }}" rel="stylesheet">
    <link href="{{ URL::secureAsset('plugins/animate.css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::secureAsset('css/main.css',true) }}" rel="stylesheet">
    <!-- Icons Font -->
    <!--<link rel="stylesheet" href="css/font-awesome.min.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Preloader
============================================= -->
<div class="preloader"><i class="fa fa-circle-o-notch fa-spin fa-2x"></i></div>
<!-- Header
============================================= -->
<section class="main-header">
    <div id="owl-hero" class="owl-carousel owl-theme">
        <div class="item" style="background-image: url({{ URL::secureAsset('img/Slide.jpg') }})">
            <div class="caption">
                <h6><span>Darmowy symulator opcji High/Low. Symuluj inwestycje wykorzystując wirtualną walutę.</span></h6>
                <h1>Symulator inwestycji w opcje binarne</h1>
                <a class="btn btn-transparent" href="#login">Zaloguj się</a>
                <a class="btn btn-light" href="#register">Jesteś tu nowy?</a>
                <a class="btn btn-transparent" href="#rank">Ranking graczy</a>
            </div>
        </div>
        <div class="item" style="background-image: url({{ URL::secureAsset('img/Slide2.jpg') }})">
            <div class="caption">
                <h6><span>Kursy walut dostępne w czasie rzeczywistym.</span></h6>
                <h1>Rozpocznij zabawę już teraz</h1>
                <a class="btn btn-transparent" href="#login">Zaloguj się</a>
                <a class="btn btn-light" href="#register">Jesteś tu nowy?</a>
                <a class="btn btn-transparent" href="#rank">Ranking graczy</a>
            </div>
        </div>
    </div>
</section>


<section id="login">
    <div class="container">
        <h2>Zaloguj się</h2>
        <hr class="sep">
        <div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
            <form role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field()}}
                <div class="form-group{{ $errors->has('email') && $errors->has('loginReq') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $errors->has('loginReq') ? old('email') : '' }}" required autofocus>
                    @if ($errors->has('email') && $errors->has('loginReq') )
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') && $errors->has('loginReq') ? ' has-error' : '' }} ">
                    <input type="password" class="form-control" name="password" placeholder="Hasło">
                    @if ($errors->has('password') && $errors->has('loginReq'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <input type="submit" class="btn-block" value="Zaloguj się">
            </form>
        </div>
    </div>
</section>
<section id="register">
    <div class="container">
        <h2>Zarejestruj się!</h2>
        <hr class="sep">
        <p>Na start otrzymasz 100 wirtualnych monet</p>
        <div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
            <form role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('name') && !$errors->has('loginReq') ? ' has-error' : '' }}" >
                    <input type="text" class="form-control" name="name" placeholder="Nazwa użytkownika" value="{{ !$errors->has('loginReq') ? old('name') : '' }}" required autofocus>
                    @if ($errors->has('name') && !$errors->has('loginReq'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('email') && !$errors->has('loginReq') ? ' has-error' : '' }} ">
                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{ !$errors->has('loginReq') ? old('email') : '' }}" required autofocus>
                    @if ($errors->has('email') && !$errors->has('loginReq'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('password') && !$errors->has('loginReq') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" name="password" placeholder="Hasło" required>
                    @if ($errors->has('password') && !$errors->has('loginReq'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Powtórz hasło" required>
                </div>
                <input type="submit" class="btn-block" value="Zarejestruj się">
            </form>
        </div>
    </div>
</section>
<section id="rank">
    <div class="container">
        <h2>Ranking graczy</h2>
        <hr class="sep">
        <p>Najlepszych 10 graczy</p>
        <div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
            <table style="width:100%; margin-top:20px;">
                @foreach($rankUsers as $rankUser)
                    <tr class="border_bottom">
                        <td>{{$loop->index+1}}</td>
                        <td>{{$rankUser->name}}</td>
                        <td>
                            <i class="fa fa-usd fa-lg" style="margin-right: 20px" aria-hidden="true"> {{$rankUser->money}}</i>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>
<!-- Footer
============================================= -->
<footer>
    <div class="container">
        <h3>Symulator inwestycji w opcje binarne</h3>
        <h6>&copy; 2016 Łukasz Cholewa</h6>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ URL::secureAsset('js/jquery-1.9.1.min.js') }}"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ URL::secureAsset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::secureAsset('js/customMain.js') }}"></script>
<!-- JS PLUGINS -->
<script src="{{ URL::secureAsset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ URL::secureAsset('js/jquery.easing.min.js') }}"></script>
<script src="{{ URL::secureAsset('plugins/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ URL::secureAsset('plugins/countTo/jquery.countTo.js') }}"></script>
<script src="{{ URL::secureAsset('plugins/inview/jquery.inview.min.js') }}"></script>
<script src="{{ URL::secureAsset('plugins/Lightbox/dist/js/lightbox.min.js') }}"></script>
<script src="{{ URL::secureAsset('plugins/WOW/dist/wow.min.js') }}"></script>
</body>

</html>