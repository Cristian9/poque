<?php /* Smarty version 3.1.27, created on 2018-02-23 19:19:30
         compiled from "/home/enviroco/public_html/subasta/application/views/templates/manager/subasta_ejecucion.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14123879465a90af92b0ae39_54919455%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '883fda464ca8231b0c626b3b308686edbf13de4e' => 
    array (
      0 => '/home/enviroco/public_html/subasta/application/views/templates/manager/subasta_ejecucion.tpl',
      1 => 1519431569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14123879465a90af92b0ae39_54919455',
  'variables' => 
  array (
    'titulo_pagina' => 0,
    'base_url' => 0,
    'panel_url' => 0,
    'session' => 0,
    'menu' => 0,
    'parcicipantes' => 0,
    'subasta' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a90af930aed78_72479308',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a90af930aed78_72479308')) {
function content_5a90af930aed78_72479308 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14123879465a90af92b0ae39_54919455';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html><head><title><?php echo $_smarty_tpl->tpl_vars['titulo_pagina']->value;?>
</title><meta name="description" content="" /><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" /><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true" /><meta name="KeyWords" content="" /><meta name="author" content="Yataco.com.pe" /><meta name="google-site-verification" content="" /><meta name="msvalidate.01" content="" /><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /><meta name="GENERATOR" content="Microsoft FrontPage 4.0" /><meta name="DC.Identifier" content="index.html" /><meta name="DC.Language" SCHEME="RFC1766" content="SPANISH" /><meta name="distribution" content="all"><meta name="VW96.objecttype" content="Homepage" /><meta name="resource-type" content="Homepage" /><meta name="Revisit" content="1 days" /><meta name="robots" content="index,follow" /><meta name="GOOGLEBOT" content="index follow" /><meta name="Revisit" content="1 days" /><meta http-equiv="Pragma" content="no-cache" /><meta http-equiv="Cache-Control" content="no-cache" /><meta name="ROBOTS" content="ALL" /><meta name="ProgId" content="FrontPage.Editor.Document" /><meta name="theme-color" content="#161616"><link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/logo/favicon.png" type="image/x-icon" /><link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/logo/favicon.png" type="image/x-icon" /><?php echo '<script'; ?>
> var base_url = "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
";<?php echo '</script'; ?>
><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" /><link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" /><link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins:300,400,500,600,700" rel="stylesheet"><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/font-awesome/css/font-awesome.min.css" type="text/css" media="screen" /><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/bootstrap/css/bootstrap.min.css" type="text/css" media="screen" /><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css"><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/plugins/bootstrap-colorpicker-master/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet"><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/plugins/iCheck/flat/blue.css"><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/css/AdminLTE.min.css"><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/css/skins/_all-skins.min.css"><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/alertify/css/alertify.css"><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/css/manager.css" type="text/css" /><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/angular.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/angular-chart/chart.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/angular-chart/angular-chart.js"><?php echo '</script'; ?>
></head>

<body class="hold-transition managall-skin skin-blue sidebar-mini sidebar-collapse">
    <div class="wrapper">
        <header class="main-header">
            
            <a href="<?php echo $_smarty_tpl->tpl_vars['panel_url']->value;?>
home" class="logo">
                
                <span class="logo-mini"><b>S</b>P</span>
                
                <span class="logo-lg"><b>Subastas</b>Poque</span>
            </a>

            <nav class="navbar navbar-static-top">

                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">

                    <ul class="nav navbar-nav">    
                        <li>
                            <a><i class="fa fa-user-circle"></i> <?php echo $_smarty_tpl->tpl_vars['session']->value['nombre'];?>
</a>
                        </li>

                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                
                                <span class="hidden-xs">ID: <?php echo $_smarty_tpl->tpl_vars['session']->value['usuario'];?>
</span>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    
                                    <p>
                                        <?php echo $_smarty_tpl->tpl_vars['session']->value['nombre'];?>

                                        <small><?php echo $_smarty_tpl->tpl_vars['session']->value['nivel'];?>
</small>
                                    </p>
                                </li>

                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['panel_url']->value;?>
perfil" class="btn btn-default btn-flat">Perfil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['panel_url']->value;?>
login/salir" class="btn btn-danger btn-flat">Salir</a>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        
        <aside class="main-sidebar">

            <section class="sidebar">
                
                <div class="user-panel my-user-pan1">
                    <div class="pull-left image">
                        
                    </div>
                    <div class="pull-left info">
                        <p><?php echo $_smarty_tpl->tpl_vars['session']->value['nombre'];?>
</p>
                        <p>ID: <?php echo $_smarty_tpl->tpl_vars['session']->value['usuario'];?>
</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                
                <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

            </section>
        </aside>

        <div class="content-wrapper">
            <section class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <section class="content" ng-app="app" ng-controller="appcontroller">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="ma-conte-taball">
                                        <div class="ma-sub-col-1 ma-subbgcol-1">
                                            <div class="ma-sub-block1">
                                                <h1 class="ma-sub-tit1">Historial de Posiciones</h1>
                                                <div class="ma-grafics1">
                                                    <canvas id="line" class="chart chart-line" chart-data="data" chart-labels="labels" chart-series="series" chart-options="options" chart-dataset-override="datasetOverride" chart-click="onClick"></canvas>
                                                </div>
                                                <h1 class="ma-sub-tit1">Historial de Pujas</h1>
                                                <div class="ma-grafics1">
                                                    <canvas id="line" class="chart chart-line" chart-data="chartPreciodata" chart-labels="chartPreciolabels" chart-series="chartPrecioseries" chart-options="chartPrecioOpcion" chart-dataset-override="chartPrecioEjes" chart-click="onClick"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ma-sub-col-1">
                                            <div class="ma-sub-block1">
                                                <h1 class="ma-sub-tit2">Tabla de posiciones</h1>

                                                <div class="ma-table-all">
                                                    <div class="ma-table-block1">
                                                        <div class="ma-table-bgcolor1">
                                                            <div class="ma-table-row1">
                                                                <div class="ma-table-cell">Puesto</div>
                                                                <div class="ma-table-cell">Seudónimo</div>
                                                                <div class="ma-table-cell">Ultima Oferta</div>
                                                                <div class="ma-table-cell">N° Ofertas</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="containerScrollTable" class="ma-content-scroll">
                                                        <div class="ma-table-row2">
                                                            
                                                            <div class="ma-table-body">
                                                                <div class="ma-table-body-row" ng-repeat="l in proveedor">
                                                                    <div class="ma-table-cell">{{l.puesto}} </div>
                                                                    <div class="ma-table-cell"><strong>{{ l.alias }}</strong></div>
                                                                    <div class="ma-table-cell"><strong>{{ l.puja }}</strong></div>
                                                                    <div class="ma-table-cell"><strong>{{ l.cant_puja }}</strong></div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="room-counter">
                                                    <ul>
                                                        <li>
                                                            <div class="counter-title">Participantes</div>
                                                            <div class="data-counter">
                                                                <i class="fa fa-user"></i> 
                                                                <span><strong><span class="online"><?php echo $_smarty_tpl->tpl_vars['parcicipantes']->value;?>
</span></strong></span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="ma-sub-col-1">
                                            <div class="ma-sub-block1">
                                                <div class="ma-offsale-all">
                                                    <div class="ma-offsale-center">
                                                        <p class="ma-offsale-txt">
                                                            <i class="fa fa-money"></i>
                                                            <span>
                                                                <span class="ma-offsale-tit">Oferta Actual</span>
                                                                
                                                                <span class="ma-offsale-num">{{ subasta.ultima_puja }}</span>
                                                                
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="auction-room">
                                                    <div class="auction-content ma-height1">
                                                        <ul class="message-events">
                                                            <li>
                                                                <div class="mensajeBox robotMsg">
                                                                    ¡Ya puedes enviar tus ofertas!
                                                                </div>
                                                            </li>
                                                            
                                                            <li ng-repeat="l in datas">
                                                                <div class="mensajeBox ofertUser"><strong> {{ l.alias }}</strong> ha ofertado <strong> {{ l.monto }}</strong></div>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="room-price">
                                                    <p>Precio Base: S/. <strong><?php echo $_smarty_tpl->tpl_vars['subasta']->value['precio_base'];?>
</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                    {{ subasta }}
                                
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>

        <footer class="main-footer">
            <strong>Copyright © <?php echo date('Y');?>
 <a href="https://yataco.com.pe/" target="_blank">Yataco.com.pe</a>.</strong> Todos los derechos reservados.
        </footer>

    
    <aside class="control-sidebar control-sidebar-dark">

        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">



            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>



            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>



        </ul>



        



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



    



    <div class="control-sidebar-bg"></div>



</div>



<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/jquery/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/plugins/datatables.net/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/plugins/bootstrap-colorpicker-master/dist/js/bootstrap-colorpicker.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/plugins/fastclick/lib/fastclick.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/js/adminlte.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/plugins/jquery-sparkline/dist/jquery.sparkline.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/plugins/jquery-slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/plugins/chart.js/Chart.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/plugins/tinymce/tinymce.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/js/demo.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/alertify/alertify.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/numeric.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/js/manager.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/js/script.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/process.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/script.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript">var app = angular.module('app', ["chart.js"]);app.controller('appcontroller', function($scope, $http, $interval){$interval(function(){$http.get(base_url + 'general/subasta/hora_pujas/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').then(function (mydata) {$scope.series = mydata.data[0];$scope.labels = mydata.data[1];$scope.data = mydata.data[2];$scope.chartPrecioseries = mydata.data[0];$scope.chartPreciolabels = mydata.data[1];$scope.chartPreciodata = mydata.data[3];});$scope.onClick = function (points, evt) {console.log(points, evt);};$scope.datasetOverride = [{ yAxisID: 'y-axis-1' }, { yAxisID: 'y-axis-2' }];$scope.options = {scales: {yAxes: [{id: 'y-axis-1',type: 'linear',display: true,position: 'left'},{id: 'y-axis-2',type: 'linear',display: false,position: 'right'}]}};$scope.chartPrecioEjes = [{ yAxisID: 'y-axis-1' }, { yAxisID: 'y-axis-2' }];$scope.chartPrecioOpcion = {scales: {yAxes: [{id: 'y-axis-1',type: 'linear',display: true,position: 'left'},{id: 'y-axis-2',type: 'linear',display: false,position: 'right'}]}};$http.get(base_url + 'general/subasta/tiempo/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').then(function (mydata) {$scope.tiempo = mydata.data;});$http.get(base_url + 'general/subasta/puja/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').then(function(mydata){$scope.datas = mydata.data;console.log("success");});$http.get(base_url + 'general/subasta/info/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').then(function(mydata){$scope.subasta = mydata.data;console.log("success" + $scope.subasta);});$http.get(base_url + 'general/subasta/proveedores/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').then(function(mydata){$scope.proveedor = mydata.data;console.log("success" + $scope.subasta);});}, 500);});/*var napp = angular.module('chart', ["chart.js"]);napp.controller('chartcontroller', function($scope){$scope.labels = ["January", "February", "March", "April", "May", "June", "July"];$scope.series = ['Series A', 'Series B'];$scope.data = [[65, 59, 80, 81, 56, 55, 40],[28, 48, 40, 19, 86, 27, 90]];$scope.onClick = function (points, evt) {console.log(points, evt);};$scope.datasetOverride = [{ yAxisID: 'y-axis-1' }, { yAxisID: 'y-axis-2' }];$scope.options = {scales: {yAxes: [{id: 'y-axis-1',type: 'linear',display: true,position: 'left'},{id: 'y-axis-2',type: 'linear',display: true,position: 'right'}]}};});*///GRAFICO<?php echo '</script'; ?>
></body></html><?php }
}
?>