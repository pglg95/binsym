<!DOCTYPE html>
<html lang="en">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Symulator inwestycji w opcje binarne</title>
    <meta name="author" content="Lukasz Cholewa">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap-datetimepicker.min.css') }}"  rel="stylesheet">
    <link href="{{ URL::asset('css/font-awesome.min.css') }}"  rel="stylesheet">
    <link id="base-style" href="{{ URL::asset('css/style.css') }}"  rel="stylesheet">
    <link id="base-style-responsive" href="{{ URL::asset('css/style-responsive.css') }}"  rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext" rel="stylesheet" type="text/css">
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="{{ URL::asset('css/ie.css') }}"  rel="stylesheet">
    <![endif]-->

    <!--[if IE 9]>
    <link id="ie9style" href="{{ URL::asset('css/ie9.css') }}" rel="stylesheet">
    <![endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}">
    <!-- end: Favicon -->
</head>

<body>
<!-- start: Header -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="{{ url('/currencies') }}">
                <span>SYMULATOR INWESTYCJI W OPCJE BINARNE</span>
           </a>

            <!-- start: Header Menu -->
            <div class="nav-no-collapse header-nav">
                <ul class="nav pull-right">

                    <!-- start: Notifications Dropdown -->

                    <!-- end: Notifications Dropdown -->
                    <!-- start: Message Dropdown -->


                    <!-- start: User Dropdown -->
                    <li class="dropdown">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon white user"></i> {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="halflings-icon off"></i>Wyloguj się
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    <!-- end: User Dropdown -->
                </ul>
            </div>
            <!-- end: Header Menu -->

        </div>
    </div>
</div>
<!-- start: Header -->

<div class="container-fluid-full">
    <div class="row-fluid">

        <!-- start: Main Menu -->
        <div id="sidebar-left" class="span1">
            <div class="nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    @section('dashboard_tab')
                    <li class="active">
                    @show
                        <a href="{{ url('/currencies') }}"><i class="icon-bar-chart"></i><span class="hidden-tablet">Panel główny</span></a>
                    </li>
                    @section('history_tab')
                    <li>
                    @show
                        <a href="{{ url('/users/'.Auth::user()->id.'/history') }}"><i class="icon-tasks"></i><span class="hidden-tablet">Zarządzaj operacjami</span></a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- end: Main Menu -->

        <noscript>
            &lt;div class="alert alert-block span10"&gt;
            &lt;h4 class="alert-heading"&gt;Warning!&lt;/h4&gt;
            &lt;p&gt;You need to have &lt;a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank"&gt;JavaScript&lt;/a&gt; enabled to use this site.&lt;/p&gt;
            &lt;/div&gt;
        </noscript>

        <!-- start: Content -->
        <div id="content" class="span11" style="min-height: 1040px;">

            @yield('content')

        </div>
        <!-- end: Content -->
    </div><!--/#content.span10-->
</div><!--/fluid-row-->

<div class="modal hide fade" id="myModal" aria-hidden="true" style="display: none;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"></button>
            <h3>Settings</h3>
    </div>
    <div class="modal-body">
        <p>Here settings can be configured...</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div>

<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <ul class="list-inline item-details">
            <li><a href="http://themifycloud.com">Admin templates</a></li>
            <li><a href="http://themescloud.org">Bootstrap themes</a></li>
        </ul>
    </div>
</div>

<div class="clearfix"></div>

<footer>

    <p>
        <span style="text-align:left;float:left">&copy; 2016 Łukasz Cholewa</span>

    </p>

</footer>

<!-- start: JavaScript-->

<script src="{{ URL::asset('js/jquery-1.9.1.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery-migrate-1.0.0.min.js') }}"></script>

<script src="{{ URL::asset('js/jquery-ui-1.10.0.custom.min.js') }}" ></script>

<script src="{{ URL::asset('js/jquery.ui.touch-punch.js') }}" ></script>

<script src="{{ URL::asset('js/modernizr.js') }}" ></script>

<script src="{{ URL::asset('js/bootstrap.min.js') }}" ></script>

<script src="{{ URL::asset('js/jquery.cookie.js') }}"></script>

<script src="{{ URL::asset('js/fullcalendar.min.js') }}"></script>

<script src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>

<script src="{{ URL::asset('js/excanvas.js')}}"></script>
<script src="{{URL::asset('js/jquery.flot.js')}}"></script>
<script src="{{URL::asset('js/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('js/jquery.flot.stack.js')}}"></script>
<script src="{{URL::asset('js/jquery.flot.resize.min.js')}}"></script>

<script src="{{URL::asset('js/jquery.chosen.min.js')}}"></script>

<script src="{{URL::asset('js/jquery.uniform.min.js')}}"></script>

<script src="{{URL::asset('js/jquery.cleditor.min.js')}}"></script>

<script src="{{URL::asset('js/jquery.noty.js')}}"></script>

<script src="{{URL::asset('js/jquery.elfinder.min.js')}}"></script>

<script src="{{URL::asset('js/jquery.raty.min.js')}}"></script>

<script src="{{URL::asset('js/jquery.iphone.toggle.js')}}"></script>

<script src="{{URL::asset('js/jquery.uploadify-3.1.min.js')}}"></script>

<script src="{{URL::asset('js/jquery.gritter.min.js')}}" ></script>

<script src="{{URL::asset('js/jquery.imagesloaded.js')}}"></script>

<script src="{{URL::asset('js/jquery.masonry.min.js')}}"></script>

<script src="{{URL::asset('js/jquery.knob.modified.js')}}"></script>

<script src="{{URL::asset('js/jquery.sparkline.min.js')}}"></script>

<script src="{{URL::asset('js/counter.js')}}"></script>

<script src="{{URL::asset('js/retina.js')}}"></script>

<script src="{{URL::asset('js/custom.js')}}"></script>

<script type="text/javascript" src="{{URL::asset('js/bootstrap-datetimepicker.js')}}" charset="UTF-8"></script>
<script type="text/javascript" src="{{URL::asset('js/locales/bootstrap-datetimepicker.pl.js')}}" charset="UTF-8"></script>
<script type="text/javascript" src="{{URL::asset('js/moment.js')}}" charset="UTF-8"></script>
<script>
    $(".sliderSimple").slider();

    $(".sliderMin").slider({
        range: "min",
        value: 1,
        min: 1,
        max: {{Auth::user()->money}},
        slide: function( event, ui ) {
            $( ".sliderProfit" ).html(ui.value*0.8);
            $(".sliderMinLabel").val(ui.value);
        }
    });
</script>
<script type="text/javascript">
    Date.prototype.addHours = function(h) {
        this.setTime(this.getTime() + (h*60*60*1000));
        return this;
    }
    if($(".form_datetime").length){
        $(".form_datetime").datetimepicker({
            format: "d-m-yyyy H",
            maxView: 3,
            minView: 1,
            language: 'pl',
            todayBtn: true,
            startDate: (new Date()).addHours(1),
            autoclose: true
        });
    }

</script>

</body></html>