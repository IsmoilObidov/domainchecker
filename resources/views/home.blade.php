<html lang="en">

<head>
    <script async=""
        src="https://query.yahooapis.com/v1/public/yql?format=json&amp;rnd=20224322&amp;diagnostics=true&amp;callback=jQuery11020023592769610202957_1652291253633&amp;q=select%20*%20from%20weather.forecast%20where%20woeid%20in%20(select%20woeid%20from%20geo.placefinder%20where%20text=%22Seattle%22%20and%20gflags=%22R%22%20limit%201)%20and%20u=%22c%22&amp;_=1652291253634">
    </script>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="{{ env('APP_NAME') }}">
    <meta name="author" content="KaijuThemes">
    <link href="http://fonts.googleapis.com/css?family=RobotoDraft:300,400,400italic,500,700" rel="stylesheet"
        type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700" rel="stylesheet"
        type="text/css">
    <!--[if lt IE 10]>
       <script type="text/javascript" src="assets/js/media.match.min.js"></script>
       <script type="text/javascript" src="assets/js/placeholder.min.js"></script>
       <![endif]-->
    <link type="text/css" href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link type="text/css" href="assets/css/styles.css" rel="stylesheet">
    <!-- Core CSS with all styles -->
    <link type="text/css" href="assets/plugins/jstree/dist/themes/avenger/style.min.css" rel="stylesheet">
    <!-- jsTree -->
    <link type="text/css" href="assets/plugins/codeprettifier/prettify.css" rel="stylesheet">
    <!-- Code Prettifier -->
    <link type="text/css" href="assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">
    <!-- iCheck -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
    <!--[if lt IE 9]>
       <link type="text/css" href="assets/css/ie8.css" rel="stylesheet">
       <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
       <script type="text/javascript" src="assets/plugins/charts-flot/excanvas.min.js"></script>
       <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
       <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->
    <style>
        /*To make sure there is modal displayed with this class for demo*/
        .visiblemodal {
            position: relative;
            top: auto;
            right: auto;
            left: auto;
            bottom: auto;
            z-index: 1;
            display: block;
            overflow: hidden;
        }
    </style>
    <style type="text/css">
        .jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            z-index: 10000;
        }

        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>
</head>

<body class="infobar-offcanvas" style="">
    <div id="headerbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tile tile-brown">
                        <div class="tile-body">
                            <div class="pull-left"><i class="fa fa-pencil"></i></div>
                        </div>
                        <div class="tile-footer">
                            Create Post
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tile tile-grape">
                        <div class="tile-body">
                            <div class="pull-left"><i class="fa fa-group"></i></div>
                            <div class="pull-right"><span class="badge">2</span></div>
                        </div>
                        <div class="tile-footer">
                            Contacts
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tile tile-primary">
                        <div class="tile-body">
                            <div class="pull-left"><i class="fa fa-envelope-o"></i></div>
                            <div class="pull-right"><span class="badge">10</span></div>
                        </div>
                        <div class="tile-footer">
                            Messages
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tile tile-inverse">
                        <div class="tile-body">
                            <div class="pull-left"><i class="fa fa-camera"></i></div>
                            <div class="pull-right"><span class="badge">3</span></div>
                        </div>
                        <div class="tile-footer">
                            Gallery
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tile tile-midnightblue">
                        <div class="tile-body">
                            <div class="pull-left"><i class="fa fa-cog"></i></div>
                        </div>
                        <div class="tile-footer">
                            Settings
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tile tile-orange">
                        <div class="tile-body">
                            <div class="pull-left"><i class="fa fa-wrench"></i></div>
                        </div>
                        <div class="tile-footer">
                            Plugins
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="wrapper">
        <div id="layout-static">
            
            <div class="static-content-wrapper">
                <div class="static-content">
                    <div class="page-content">
                        <div class="page-heading">
                            <h1>@yield('title')</h1>
                        </div>
                        <div class="container-fluid">

                            @yield('content')

                        </div>
                        <!-- .container-fluid -->
                    </div>
                </div>
                <footer role="contentinfo">
                    <div class="clearfix">
                        <ul class="list-unstyled list-inline pull-left">
                            <li>
                            </li>
                        </ul>
                        <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i
                                class="fa fa-arrow-up"></i></button>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <!-- Switcher -->
    <!-- /Switcher -->
    <!-- Load site level scripts -->
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
          <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->
    <script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script> <!-- Load jQuery -->
    <script type="text/javascript" src="assets/js/jqueryui-1.9.2.min.js"></script> <!-- Load jQueryUI -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script> <!-- Load Bootstrap -->
    <script type="text/javascript" src="assets/plugins/easypiechart/jquery.easypiechart.js"></script> <!-- EasyPieChart-->
    <script type="text/javascript" src="assets/plugins/sparklines/jquery.sparklines.min.js"></script> <!-- Sparkline -->
    <script type="text/javascript" src="assets/plugins/jstree/dist/jstree.min.js"></script> <!-- jsTree -->
    <script type="text/javascript" src="assets/plugins/codeprettifier/prettify.js"></script> <!-- Code Prettifier  -->
    <script type="text/javascript" src="assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> <!-- Swith/Toggle Button -->
    <script type="text/javascript" src="assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script> <!-- Bootstrap Tabdrop -->
    <script type="text/javascript" src="assets/plugins/iCheck/icheck.min.js"></script> <!-- iCheck -->
    <script type="text/javascript" src="assets/js/enquire.min.js"></script> <!-- Enquire for Responsiveness -->
    <script type="text/javascript" src="assets/plugins/bootbox/bootbox.js"></script> <!-- Bootbox -->
    <script type="text/javascript" src="assets/plugins/simpleWeather/jquery.simpleWeather.min.js"></script> <!-- Weather plugin-->
    <script type="text/javascript" src="assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->
    <script type="text/javascript" src="assets/plugins/jquery-mousewheel/jquery.mousewheel.min.js"></script> <!-- Mousewheel support needed for jScrollPane -->
    <script type="text/javascript" src="assets/js/application.js"></script>
    <script type="text/javascript" src="assets/demo/demo.js"></script>
    <script type="text/javascript" src="assets/demo/demo-switcher.js"></script>

    <script type="text/javascript" src="assets/plugins/form-inputmask/jquery.inputmask.bundle.min.js"></script>
    <script type="text/javascript" src="assets/demo/demo-mask.js"></script>
    <!-- End loading site level scripts -->
    <!-- Load page level scripts-->
    <!-- End loading page level scripts-->
    <ul class="vakata-context"></ul>
    <div id="jstree-marker" style="display: none;">&nbsp;</div>
</body>

</html>
