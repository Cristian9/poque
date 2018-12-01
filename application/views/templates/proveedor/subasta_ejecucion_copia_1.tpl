<!DOCTYPE html><!--To change this license header, choose License Headers in Project Properties.To change this template file, choose Tools | Templatesand open the template in the editor.-->{strip}<html>    <head>
        <title>{$titulo_pagina}</title>
        <meta name="description" content="" />
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true" />
        <meta name="KeyWords" content="" />
        <meta name="author" content="Yataco.com.pe" />
        <meta name="google-site-verification" content="" />
        <meta name="msvalidate.01" content="" />
        {*META*}
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="GENERATOR" content="Microsoft FrontPage 4.0" />
        <meta name="DC.Identifier" content="index.html" />
        <meta name="DC.Language" SCHEME="RFC1766" content="SPANISH" />
        <meta name="distribution" content="all">
        <meta name="VW96.objecttype" content="Homepage" />
        <meta name="resource-type" content="Homepage" />
        <meta name="Revisit" content="1 days" />
        <meta name="robots" content="index,follow" />
        <meta name="GOOGLEBOT" content="index follow" />
        <meta name="Revisit" content="1 days" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Cache-Control" content="no-cache" />
        <meta name="ROBOTS" content="ALL" />
        <meta name="ProgId" content="FrontPage.Editor.Document" />
        <meta name="theme-color" content="#161616">
        <link rel="icon" href="{$base_url}public/img/logo/favicon.png" type="image/x-icon" />
        <link rel="shortcut icon" href="{$base_url}public/img/logo/favicon.png" type="image/x-icon" />
        <script> var base_url = "{$base_url}";</script>

        {* FUENTES *}
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins:300,400,500,600,700" rel="stylesheet">
        {* FONT AWESOME *}
        <link rel="stylesheet" href="{$base_url}public/plugins/font-awesome/css/font-awesome.min.css" type="text/css" media="screen" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        {* BOOTSTRAP *}
        <link rel="stylesheet" href="{$base_url}public/plugins/bootstrap/css/bootstrap.min.css" type="text/css" media="screen" />
        {* Data Tables *}
        <link rel="stylesheet" href="{$base_url}public/manager/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css">
        {* COLOR PICKER *}
        <link rel="stylesheet" href="{$base_url}public/manager/plugins/bootstrap-colorpicker-master/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        {* iCheck *}
        <link rel="stylesheet" href="{$base_url}public/manager/plugins/iCheck/flat/blue.css">
        {* Theme style *}
        <link rel="stylesheet" href="{$base_url}public/manager/css/AdminLTE.min.css">
        <link rel="stylesheet" href="{$base_url}public/manager/css/skins/_all-skins.min.css">
        {*Alertify*}
        <link rel="stylesheet" href="{$base_url}public/plugins/alertify/css/alertify.css">
        {*Estilos Css*}
        <link rel="stylesheet" href="{$base_url}public/manager/css/manager.css" type="text/css" />
        {*Angular*}
        <script src="{$base_url}public/js/angular.js"></script>

        {*Angular Chart*}
        <script type="text/javascript" src="{$base_url}public/plugins/angular-chart/chart.js"></script>

        <script type="text/javascript" src="{$base_url}public/plugins/angular-chart/angular-chart.js"></script>

    </head>{/strip}
    <body class="hold-transition managall-skin skin-blue sidebar-mini">    
        <div class="wrapper">
            <header class="main-header">
                {* Logo *}
                <a href="{$panel_url}home" class="logo">
                    {* mini logo for sidebar mini 50x50 pixels *}
                    <span class="logo-mini"><b>S</b>P</span>
                    {* logo for regular state and mobile devices *}
                    <span class="logo-lg"><b>Subastas</b>Poque</span>
                </a>
                <nav class="navbar navbar-static-top">
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li>
                                <a><i class="fa fa-user-circle"></i> {$session.nombre}</a>
                            </li>


                            <li class="dropdown user user-menu">


                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">



                                    {*<img src="{$base_url}public/manager/img/user2-160x160.jpg" class="user-image" alt="User Image">*}



                                    <span class="hidden-xs">ID: {$session.usuario}</span>


                                </a>

                                <ul class="dropdown-menu">

                                    <li class="user-header">
                                        {*<img src="{$base_url}public/manager/img/user2-160x160.jpg" class="img-circle" alt="User Image">*}

                                        <p>
                                            {$session.nombre}

                                            <small>{$session.nivel}</small>



                                        </p>



                                    </li>



                                    <li class="user-footer">



                                        <div class="pull-left">




                                            <a href="{$panel_url}perfil" class="btn btn-default btn-flat">Perfil</a>



                                        </div>



                                        <div class="pull-right">




                                            <a href="{$panel_url}login/salir" class="btn btn-danger btn-flat">Salir</a>



                                        </div>



                                    </li>


                                </ul>


                            </li>

                        </ul>

                    </div>
                </nav>
            </header>
            {* Left side column. contains the logo and sidebar *}
            <aside class="main-sidebar">

                <section class="sidebar">

                    {* Sidebar user panel *}

                    <div class="user-panel my-user-pan1">

                        <div class="pull-left image">


                            {*<img src="{$base_url}public/manager/img/user2-160x160.jpg" class="img-circle" alt="User Image">*}

                        </div>

                        <div class="pull-left info">


                            <p>{$session.nombre}</p>


                            <p>ID: {$session.usuario}</p>


                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>

                        </div>

                    </div>

                    {* sidebar menu *}

                    {$menu}
                </section>

            </aside><div class="content-wrapper">    <section class="content-header">
                    <h1>
                        Modulo
                        <small>{$modulo}</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="active">{$pagina}</li>
                    </ol>   </section>    <section class="content">
                    <div class="row">
                        <div class="col-sm-12">

                            <section class="content" ng-app="app" ng-controller="appcontroller">

                                <div class="row">


                                    <div class="col-md-12">


                                        <div class="box-subastall">
                                            <div class="box-subhead">
                                                <div class="box-subheadata">
                                                    <p class="nick-user">
                                                        <i class="fa fa-user"></i><span>Mi Seudónimo: </span><strong>{$prov.alias}</strong>
                                                    </p>
                                                </div>
                                            </div>

                                            <section class="box-contenth2">
                                                <div class="box-hd2-sect">
                                                    <div class="box-hd2-actionlive">
                                                        <div class="box-hd2-type">
                                                            <i class="fa fa-lock"></i>
                                                        </div>

                                                        <ul class="box-hd2-lis">
                                                            <li>{$subasta.producto}</li>
                                                        </ul>
                                                        <div class="counter-auction-init">
                                                            <p ng-show="tiempo.ejecucion">
                                                                <i class="fa fa-clock-o"></i>Inició hace:
                                                                {literal}
                                                                <strong>
                                                                    <span class="hour">{{ tiempo.horas }}</span>:
                                                                    <span class="minutes">{{ tiempo.minutos }}</span>:
                                                                    <span class="seconds">{{ tiempo.segundos }}</span>
                                                                </strong>
                                                                {/literal}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

                                            <section class="box-secontentx1">
                                                <div class="room-left">
                                                    <div class="room-auction-live">
                                                        <div class="room-gallery">
                                                            <canvas id="line" class="chart chart-line" chart-data="data" chart-labels="labels" chart-series="series" chart-options="options" chart-dataset-override="datasetOverride" chart-click="onClick">
                                                            </canvas>
                                                        </div>
                                                        <div class="room-user">
                                                            <div class="table-user">
                                                                <div class="header-table">
                                                                    <div class="row-table">
                                                                        <div class="cell-table text-center">Puesto</div>
                                                                        <div class="cell-table">Seudónimo</div>
                                                                        <div class="cell-table text-center">Ultima Oferta</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="containerScrollTable" class="contain-scroll">
                                                                <div class="table-user">
                                                                    {literal}
                                                                    <div id="containerScrollTableBody" class="body-table">
                                                                        <div  ng-repeat="l in proveedor" class="row-table user">
                                                                            <div class="cell-table text-center">{{l.puesto}} </div>
                                                                            <div class="cell-table"><strong>{{ l.alias}}</strong></div>
                                                                            <div class="cell-table text-center"><strong>{{ l.puja}}</strong></div>
                                                                        </div>
                                                                    </div>
                                                                    {/literal}

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="room-counter">
                                                            <ul>
                                                                <li>
                                                                    <div class="counter-title">Participantes</div>
                                                                    <div class="data-counter">
                                                                        <i class="fa fa-user"></i>
                                                                        <span><strong><span class="online">{$parcicipantes}</span></strong></span>
                                                                    </div>
                                                                </li>
                                                                {*
                                                                <li>
                                                                    <div class="counter-title">Ofertas</div>
                                                                    <div class="data-counter">
                                                                        <i class="fa fa-money"></i>
                                                                        <span class="nro-ofert"><strong>71</strong></span>
                                                                    </div>
                                                                </li>
                                                                *}
                                                            </ul>
                                                        </div>

                                                        <div class="room-price">
                                                            <p>Precio Base: S/. <strong>{$subasta.precio_base}</strong></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="room-right">
                                                    <div class="auction-content-events">
                                                        <div class="room-offer">
                                                            <div class="offer-update">
                                                                <p>
                                                                    <i class="fa fa-money"></i>
                                                                    <span>
                                                                        <span class="title-oferta">Oferta Actual</span>
                                                                        {literal}
                                                                        <strong>{{ subasta.ultima_puja}}</strong>
                                                                        {/literal}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="auction-room">
                                                            <div class="auction-content">
                                                                <ul class="message-events">
                                                                    <li>
                                                                        <div class="mensajeBox robotMsg">
                                                                            ¡Ya puedes enviar tus ofertas!
                                                                        </div>
                                                                    </li>
                                                                    {literal}
                                                                    <li ng-repeat="l in datas">
                                                                        <div class="mensajeBox ofertUser">
                                                                            <div style="color:red" ng-if="subasta.ultima_puja == l.monto">
                                                                                <strong> {{ l.alias}}</strong> ha ofertado
                                                                                <strong> {{ l.monto}}</strong>
                                                                            </div>
                                                                            <div ng-if="subasta.ultima_puja != l.monto">
                                                                                <strong> {{ l.alias}}</strong> ha ofertado
                                                                                <strong> {{ l.monto}}</strong>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    {/literal}
                                                                </ul>
                                                                <div class="auction-message" ng-show="!tiempo.ejecucion">
                                                                    <div class="message-auction-counter">
                                                                        <p class="info-auction-icon"><i class="fa fa-money"></i></p>
                                                                        <p class="info-auction-text"><strong>¡Bienvenido a la sala de ofertas!</strong><br>La subasta en vivo inicia pronto</p>
                                                                        {*
                                                                        <p class="info-auction-counter"><span>--</span>:<span>--</span>:<span>--</span></p>
                                                                        *}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <form class="subastaform" action="{$get_url}ofertar" method="post">
                                                        <div class="response"></div>
                                                        <div class="auction-bar">
                                                            <div class="auction-gradient" style="width: 0px;"></div>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                                                <input type="text" class="form-control" name="oferta" value="" placeholder="Ingresar Oferta Aquí">
                                                            </div>
                                                        </div>

                                                        <div class="auction-footer">
                                                            <div class="button-auction">
                                                                <button type="submit" class="btn btn-save btn-auction btn--no-active">
                                                                    <div class="offsl">Click para ofertar</div>
                                                                    <span class="price">
                                                                        {*<span id="oferta">{$subasta.descuento_minimo}</span>*}
                                                                    </span>
                                                                </button>
                                                                <input type="hidden" name="subasta" value="{$subasta.id}">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    {* $subasta|var_dump *}



                                    {literal}


                                    {{ subasta}}


                                    {/literal}

                                </div>

                            </section>
                        </div>
                    </div>    </section></div>    <footer class="main-footer">
                <strong>Copyright © {'Y'|date} <a href="https://yataco.com.pe/" target="_blank">Yataco.com.pe</a>.</strong> Todos los derechos reservados.    </footer>    {* Control Sidebar *}    <aside class="control-sidebar control-sidebar-dark">

                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                {* Tab panes *}
                <div class="tab-content">

                    <div class="tab-pane" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Recent Activity</h3>
                        <ul class="control-sidebar-menu">

                            <li>

                                <a href="javascript:void(0)">


                                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>


                                    <div class="menu-info">


                                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>


                                        <p>Will be 23 on April 24th</p>


                                    </div>

                                </a>

                            </li>

                            <li>

                                <a href="javascript:void(0)">


                                    <i class="menu-icon fa fa-user bg-yellow"></i>


                                    <div class="menu-info">


                                        <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>


                                        <p>New phone +1(800)555-1234</p>


                                    </div>

                                </a>

                            </li>

                            <li>

                                <a href="javascript:void(0)">


                                    <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>


                                    <div class="menu-info">


                                        <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>


                                        <p>nora@example.com</p>


                                    </div>

                                </a>

                            </li>

                            <li>

                                <a href="javascript:void(0)">


                                    <i class="menu-icon fa fa-file-code-o bg-green"></i>


                                    <div class="menu-info">


                                        <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>


                                        <p>Execution time 5 seconds</p>


                                    </div>

                                </a>

                            </li>
                        </ul>
                        <h3 class="control-sidebar-heading">Tasks Progress</h3>

                        <ul class="control-sidebar-menu">

                            <li>

                                <a href="javascript:void(0)">

                                    <h4 class="control-sidebar-subheading">

                                        Custom Template Design

                                        <span class="label label-danger pull-right">70%</span>

                                    </h4>

                                    <div class="progress progress-xxs">

                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>

                                    </div>

                                </a>

                            </li>

                            <li>

                                <a href="javascript:void(0)">

                                    <h4 class="control-sidebar-subheading">

                                        Update Resume

                                        <span class="label label-success pull-right">95%</span>

                                    </h4>

                                    <div class="progress progress-xxs">

                                        <div class="progress-bar progress-bar-success" style="width: 95%"></div>

                                    </div>

                                </a>

                            </li>

                            <li>

                                <a href="javascript:void(0)">

                                    <h4 class="control-sidebar-subheading">

                                        Laravel Integration

                                        <span class="label label-warning pull-right">50%</span>

                                    </h4>

                                    <div class="progress progress-xxs">

                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>

                                    </div>

                                </a>

                            </li>

                            <li>

                                <a href="javascript:void(0)">

                                    <h4 class="control-sidebar-subheading">

                                        Back End Framework

                                        <span class="label label-primary pull-right">68%</span>

                                    </h4>

                                    <div class="progress progress-xxs">

                                        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>

                                    </div>

                                </a>

                            </li>

                        </ul>
                    </div>
                    <div class="tab-pane" id="control-sidebar-settings-tab">

                        <form method="post">

                            <h3 class="control-sidebar-heading">General Settings</h3>

                            <div class="form-group">


                                <label class="control-sidebar-subheading">


                                    Report panel usage


                                    <input type="checkbox" class="pull-right" checked>


                                </label>


                                <p>


                                    Some information about this general settings option


                                </p>

                            </div>

                            <div class="form-group">


                                <label class="control-sidebar-subheading">


                                    Allow mail redirect


                                    <input type="checkbox" class="pull-right" checked>


                                </label>


                                <p>


                                    Other sets of options are available


                                </p>

                            </div>

                            <div class="form-group">


                                <label class="control-sidebar-subheading">


                                    Expose author name in posts


                                    <input type="checkbox" class="pull-right" checked>


                                </label>


                                <p>


                                    Allow the user to show his name in blog posts


                                </p>

                            </div>

                            <h3 class="control-sidebar-heading">Chat Settings</h3>

                            <div class="form-group">


                                <label class="control-sidebar-subheading">


                                    Show me as online


                                    <input type="checkbox" class="pull-right" checked>


                                </label>

                            </div>

                            <div class="form-group">


                                <label class="control-sidebar-subheading">


                                    Turn off notifications


                                    <input type="checkbox" class="pull-right">


                                </label>

                            </div>

                            <div class="form-group">


                                <label class="control-sidebar-subheading">


                                    Delete chat history


                                    <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>


                                </label>

                            </div>



                        </form>
                    </div>
                </div>   
            </aside>   
            {* Control Sidebar *}    
            <div class="control-sidebar-bg">

            </div>

        </div>
        {strip}
        {* JQUERY *}
        <script src="{$base_url}public/plugins/jquery/jquery.min.js" type="text/javascript"></script>

        {* JQUERY UI *}
        <script src="{$base_url}public/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        {* BOOTSTRAP *}
        <script src="{$base_url}public/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        {* DATATABLES*}
        <script src="{$base_url}public/manager/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{$base_url}public/manager/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        {* COLOR PICKER *}
        <script src="{$base_url}public/manager/plugins/bootstrap-colorpicker-master/dist/js/bootstrap-colorpicker.js"></script>
        {* FastClick *}
        <script src="{$base_url}public/manager/plugins/fastclick/lib/fastclick.js"></script>
        {* AdminLTE App *}
        <script src="{$base_url}public/manager/js/adminlte.min.js"></script>
        {* Sparkline *}
        <script src="{$base_url}public/manager/plugins/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        {* iCheck *}
        <script src="{$base_url}public/manager/plugins/iCheck/icheck.min.js"></script>
        {* SlimScroll *}
        <script src="{$base_url}public/manager/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        {* ChartJS *}
        <script src="{$base_url}public/manager/plugins/chart.js/Chart.js"></script>
        {* TEXT EDITOR *}
        <script src="{$base_url}public/manager/plugins/tinymce/tinymce.min.js"></script>
        {* AdminLTE dashboard demo (This is only for demo purposes) *}
        <script src="{$base_url}public/manager/js/pages/dashboard2.js"></script>
        {* AdminLTE for demo purposes *}
        <script src="{$base_url}public/manager/js/demo.js"></script>
        {*Alertify*}
        <script src="{$base_url}public/plugins/alertify/alertify.js"></script>
        {* Manager Js Personalizado *}
        <script src="{$base_url}public/manager/js/manager.js"></script>
        <script src="{$base_url}public/manager/js/script.js"></script>
        <script src="{$base_url}public/js/process.js"></script>
        <script src="{$base_url}public/js/script.js"></script>
        <script type="text/javascript">
			/*                                                      
			<canvas id="line" class="chart chart-line" chart-data="chartPreciodata" chart-labels="chartPreciolabels" chart-series="chartPrecioseries" chart-options="chartPrecioOpcion" chart-dataset-override="chartPrecioEjes" chart-click="onClick">
			</canvas>
			*/
            var app = angular.module('app', ["chart.js"]);
            app.controller('appcontroller', function ($scope, $http, $interval) {
                $interval(function () {
                    $http.get(base_url + 'general/subasta/hora_pujas/{$id}').then(function (mydata) {

                        $scope.series = mydata.data[0];
                        $scope.labels = mydata.data[1];
                        $scope.data = mydata.data[2];
                    });
                    $scope.datasetOverride = [{ yAxisID: 'y-axis-1' }, { yAxisID: 'y-axis-2' }];
                    $scope.options = {
                        scales: {
                            yAxes: [
                                {
                                    id: 'y-axis-1',
                                    type: 'linear',
                                    display: true,
                                    position: 'left'

                                },
                                {
                                    id: 'y-axis-2',
                                    type: 'linear',
                                    display: false,
                                    position: 'right'

                                }

                            ]
                        }
                    };

                    $scope.onClick = function (points, evt) {
                        console.log(points, evt);
                    };

                    $http.get(base_url + 'general/subasta/tiempo/{$id}').then(function (mydata) {
                        $scope.tiempo = mydata.data;
                    });

                    $http.get(base_url + 'general/subasta/puja/{$id}').then(function (mydata) {
                        $scope.datas = mydata.data;
                    });
                    $http.get(base_url + 'general/subasta/info/{$id}').then(function (mydata) {
                        $scope.subasta = mydata.data;
                    });
                    $http.get(base_url + 'general/subasta/proveedores/{$id}').then(function (mydata) {
                        $scope.proveedor = mydata.data;
                    });
                }, 500);
            });    
            /*    var napp = angular.module('chart', ["chart.js"]);    napp.controller('chartcontroller', function($scope){
             $scope.labels = ["January", "February", "March", "April", "May", "June", "July"];
             $scope.series = ['Series A', 'Series B'];
             $scope.data = [
             [65, 59, 80, 81, 56, 55, 40],
             [28, 48, 40, 19, 86, 27, 90]
             ];
             $scope.onClick = function (points, evt) {
             console.log(points, evt);
             };
             $scope.datasetOverride = [{ yAxisID: 'y-axis-1' }, { yAxisID: 'y-axis-2' }];
             $scope.options = {
             scales: {
             yAxes: [
             {

             id: 'y-axis-1',

             type: 'linear',

             display: true,

             position: 'left'
             },
             {

             id: 'y-axis-2',

             type: 'linear',

             display: true,

             position: 'right'
             }
             ]
             }
             };    });    */    //GRAFICO
        </script>

    </body>
</html>
{/strip}