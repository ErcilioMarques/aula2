<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Crud Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    {{--<link rel="stylesheet" href="css/menu_css.css">--}}
    <link rel="stylesheet" href="{{url(asset('css/menu_css.css'))}}">

    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container-fluid">

    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="nav-side-menu">
                <div class="brand">Brand Logo</div>
                {{--<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>--}}

                <div class="menu-list">

                    <ul id="menu-content" class="menu-content collapse out">
                        {{--<li>--}}
                            {{--<a href="#">--}}
                                {{--<i class="fa fa-dashboard fa-lg"></i> Dashboard--}}
                            {{--</a>--}}
                        {{--</li>--}}

                        {{--<li  data-toggle="collapse" data-target="#products" class="collapsed active">--}}
                        {{--<a href="#"><i class="fa fa-gift fa-lg"></i> UI Elements <span class="arrow"></span></a>--}}
                        {{--</li>--}}
                        {{--<ul class="sub-menu collapse" id="products">--}}
                        {{--<li class="active"><a href="#">CSS3 Animation</a></li>--}}
                        {{--<li><a href="#">General</a></li>--}}
                        {{--<li><a href="#">Buttons</a></li>--}}
                        {{--<li><a href="#">Tabs & Accordions</a></li>--}}
                        {{--<li><a href="#">Typography</a></li>--}}
                        {{--<li><a href="#">FontAwesome</a></li>--}}
                        {{--<li><a href="#">Slider</a></li>--}}
                        {{--<li><a href="#">Panels</a></li>--}}
                        {{--<li><a href="#">Widgets</a></li>--}}
                        {{--<li><a href="#">Bootstrap Model</a></li>--}}
                        {{--</ul>--}}


                        {{--<li data-toggle="collapse" data-target="#service" class="collapsed">--}}
                        {{--<a href="#"><i class="fa fa-globe fa-lg"></i> Services <span class="arrow"></span></a>--}}
                        {{--</li>--}}
                        {{--<ul class="sub-menu collapse" id="service">--}}
                        {{--<li>New Service 1</li>--}}
                        {{--<li>New Service 2</li>--}}
                        {{--<li>New Service 3</li>--}}
                        {{--</ul>--}}


                        {{--<li data-toggle="collapse" data-target="#new" class="collapsed">--}}
                        {{--<a href="#"><i class="fa fa-car fa-lg"></i> New <span class="arrow"></span></a>--}}
                        {{--</li>--}}
                        {{--<ul class="sub-menu collapse" id="new">--}}
                        {{--<li>New New 1</li>--}}
                        {{--<li>New New 2</li>--}}
                        {{--<li>New New 3</li>--}}
                        {{--</ul>--}}


                        <li>
                            <a href="/">
                                <i class="fa fa-user fa-lg"></i> Estudantes
                            </a>
                        </li>

                        <li>
                            <a href="/supervisores">
                                <i class="fa fa-users fa-lg"></i> Supervisores
                            </a>
                        </li>

                        <!-- .logout wAS HERE -->
                    </ul>
                    <!-- MOVED TO HERE -->
                    {{--<div class="logout">--}}
                    {{--<li>--}}
                    {{--<a>--}}
                    {{--<i class="glyphicon glyphicon-off"></i> LOGOUT--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>

        <div class="col-md-8">

            <div class="container">
                <div class="row header">

                    <h3>
                        @yield('titulo')

                    </h3>

                </div>
                <br>
            @yield('seccao')
        </div>
    </div>



    </div>
    </div>



</body>
</html>