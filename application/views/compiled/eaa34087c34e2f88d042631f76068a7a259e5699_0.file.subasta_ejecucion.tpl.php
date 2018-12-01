<?php /* Smarty version 3.1.27, created on 2018-08-14 15:52:58
         compiled from "/home/applecoin/public_html/subasta/application/views/templates/proveedor/subasta_ejecucion.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3717691605b73412a7bc054_77075402%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaa34087c34e2f88d042631f76068a7a259e5699' => 
    array (
      0 => '/home/applecoin/public_html/subasta/application/views/templates/proveedor/subasta_ejecucion.tpl',
      1 => 1534279657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3717691605b73412a7bc054_77075402',
  'variables' => 
  array (
    'titulo_pagina' => 0,
    'base_url' => 0,
    'menu2' => 0,
    'session' => 0,
    'prov' => 0,
    'subasta' => 0,
    'parcicipantes' => 0,
    'get_url' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b73412b314226_41439294',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b73412b314226_41439294')) {
function content_5b73412b314226_41439294 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3717691605b73412a7bc054_77075402';
?>
    <!DOCTYPE html>
<!--To change this license header, choose License Headers in Project Properties.To change this template file, choose Tools | Templatesand open the template in the editor.-->	
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
></head><body class="hold-transition managall-skin skin-blue layout-top-nav"><div class="wrapper"><header class="main-header"><nav class="navbar navbar-static-top"><div class="container"><div class="navbar-header"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
subasta/proveedor/home" class="navbar-brand"><b>Subastas</b>Poque</a><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><i class="fa fa-bars"></i></button></div><div class="collapse navbar-collapse pull-left" id="navbar-collapse"><?php echo $_smarty_tpl->tpl_vars['menu2']->value;?>
</div><div class="navbar-custom-menu"><ul class="nav navbar-nav"><li><a><i class="fa fa-user-circle"></i> <?php echo $_smarty_tpl->tpl_vars['session']->value['nombre'];?>
</a></li><li class="dropdown user user-menu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="hidden-xs">ID: <?php echo $_smarty_tpl->tpl_vars['session']->value['usuario'];?>
</span></a><ul class="dropdown-menu"><li class="user-header"><p><?php echo $_smarty_tpl->tpl_vars['session']->value['nombre'];?>
<small><?php echo $_smarty_tpl->tpl_vars['session']->value['nivel'];?>
</small></p></li><li class="user-footer"><div class="pull-left"><a href="#" class="btn btn-default btn-flat">Profile</a></div><div class="pull-right"><a href="#" class="btn btn-default btn-flat">Sign out</a></div></li></ul></li></ul></div></div></nav></header><div class="content-wrapper"><section class="content"><div class="row"><div class="col-sm-12"><section class="content" ng-app="app" ng-controller="appcontroller"><div class="row"><div class="col-md-12"><div class="ma-conte-taball"><div class="ma-head-bg1"><div class="ma-sub-col-1"><div class="ma-sub-block1"><div class="ma-head-txt1"><i class="fa fa-user"></i> <span>Mi Seudónimo: </span><strong><?php echo $_smarty_tpl->tpl_vars['prov']->value['alias'];?>
</strong></div></div></div><div class="ma-sub-col-1"><div class="ma-sub-block1"><div class="ma-head-txt1"><p ng-show="tiempo.ejecucion"><i class="fa fa-clock-o"></i> Tiempo restante:
																<strong>
																	<span class="hour">{{ tiempo.horas }}</span>:
																	<span class="minutes">{{ tiempo.minutos }}</span>:
																	<span class="seconds">{{ tiempo.segundos }}</span>
																</strong>
																</p></div></div></div><div class="ma-sub-col-1"><div class="ma-sub-block1"><div class="ma-head-txt1"><span>Código de subasta: </span><strong><?php echo $_smarty_tpl->tpl_vars['subasta']->value['codigo'];?>
</strong></div></div></div></div><div class="ma-sub-col-1 ma-subbgcol-1"><div class="ma-sub-block1"><?php if ($_smarty_tpl->tpl_vars['subasta']->value['tipo_subasta_id'] == 1) {?><h1 class="ma-sub-tit1">Historial de Posiciones <br> <small>(Gráfica posición vs tiempo)</small></h1><div class="ma-grafics1"><canvas id="line" class="chart chart-line" chart-data="data" chart-labels="labels" chart-series="series" chart-options="options" chart-dataset-override="datasetOverride" chart-click="onClick"></canvas></div><?php } else { ?><h1 class="ma-sub-tit1">Historial de Pujas <br> <small>(Gráfica valor vs tiempo)</small></h1><div class="ma-grafics1"><canvas id="line" class="chart chart-line" chart-data="chartPujadata" chart-labels="chartPujalabels" chart-series="chartPujaseries" chart-options="options" chart-dataset-override="datasetOverride" chart-click="onClick"></canvas></div><?php }?><h1 class="ma-sub-tit1">Producto a subastar</h1><div class=""><h3><small>Producto: <?php echo $_smarty_tpl->tpl_vars['subasta']->value['producto'];?>
</small></h3><h3><small>Descripción: <?php echo $_smarty_tpl->tpl_vars['subasta']->value['descripcion'];?>
</small></h3></div></div></div><div class="ma-sub-col-1"><div class="ma-sub-block1"><h1 class="ma-sub-tit2">Tabla de posiciones</h1><div class="ma-table-all"><div class="ma-table-block1"><div class="ma-table-bgcolor1"><div class="ma-table-row1"><div class="ma-table-cell">Puesto</div><div class="ma-table-cell">Seudónimo</div><div class="ma-table-cell">Última Oferta</div></div></div></div><div id="containerScrollTable" class="ma-content-scroll"><div class="ma-table-row2">
																<div class="ma-table-body">
																	<div class="ma-table-body-row" ng-repeat="l in proveedor">
																		<div class="ma-table-cell">{{l.puesto}} </div>
																		<div class="ma-table-cell">
																			<strong>{{ l.alias }}</strong>
																		</div>
																		<div class="ma-table-cell"><strong>{{ l.puja }}</strong></div>
																	</div>
																</div>
																</div></div></div><div class="room-counter"><ul><li><div class="counter-title">Participantes</div><div class="data-counter"><i class="fa fa-user"></i><span><strong><span class="online"><?php echo $_smarty_tpl->tpl_vars['parcicipantes']->value;?>
</span></strong></span></div></li></ul></div></div></div><div class="ma-sub-col-1"><div class="ma-sub-block1"><div class="ma-offsale-all"><div class="ma-offsale-center"><p class="ma-offsale-txt"><i class="fa fa-money"></i><span><span class="ma-offsale-tit">Oferta Actual</span>
																	<span class="ma-offsale-num">{{ subasta.ultima_puja }}</span>
																	</span></p></div></div><div class="auction-room"><div class="auction-content ma-height1" id="chat" onmouseover='parar=1' onmouseout='parar=0'><ul class="message-events"><li><div class="mensajeBox robotMsg">¡Ya puedes enviar tus ofertas!</div></li>
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
																</ul></div><form class="ma-bot-ofert subastaform" action="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
ofertar" method="post"><div class="response"></div><div class="input-group"><input type="text" class="form-control" name="oferta" value="" placeholder="Ingresar Oferta Aquí"><span class="input-group-btn"><button class="btn ma-btn-ofe btn-save" id="send-message" type="submit">Ofertar</button><input type="hidden" name="subasta" value="<?php echo $_smarty_tpl->tpl_vars['subasta']->value['id'];?>
"></span></div></form><div class="auction-message" ng-show="!tiempo.ejecucion"><div class="message-auction-counter"><p class="info-auction-icon"><i class="fa fa-money"></i></p><p class="info-auction-text" ng-show="tiempo.estado == 1"><strong>¡Bienvenido a la sala de ofertas!</strong><br><span>La subasta en vivo inicia pronto</span></p><p class="info-auction-text" ng-show="tiempo.estado == 3"><strong>La subasta en vivo terminó</strong><br><span>Ganador:  {{proveedor[0]['alias']}} </span></p></div></div></div><div class="room-price"><p>Precio Base: <?php echo $_smarty_tpl->tpl_vars['subasta']->value['moneda_simbolo'];?>
 <strong><?php echo number_format($_smarty_tpl->tpl_vars['subasta']->value['precio_base'],'2','.',',');?>
</strong></p></div></div></div></div></div></div></section></div></div></section></div></div><?php echo '<script'; ?>
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
 type="text/javascript">$(function () {onload=function(){setInterval(function(){if(window.parar)return;var height=document.getElementById('chat').scrollHeight;document.getElementById('chat').scrollTop=height;},200);};});var app = angular.module('app', ["chart.js"]);app.controller('appcontroller', function ($scope, $http, $interval) {$interval(function () {$http.get(base_url + 'general/subasta/estadistica_completa/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').then(function (mydata) {$scope.series = mydata.data[0];$scope.labels = mydata.data[1];$scope.data = mydata.data[2];$scope.chartPrecioseries = mydata.data[0];$scope.chartPreciolabels = mydata.data[1];$scope.chartPreciodata = mydata.data[3];$scope.chartPujaseries = mydata.data[4];$scope.chartPujalabels = mydata.data[7];$scope.chartPujadata = mydata.data[5];});$scope.datasetOverride = [{ yAxisID: 'y-axis-1' }, { yAxisID: 'y-axis-2' }];$scope.options = {scales: {yAxes: [{id: 'y-axis-1',type: 'linear',display: true,position: 'left'},{id: 'y-axis-2',type: 'linear',display: false,position: 'right'}]}};$scope.onClick = function (points, evt) {console.log(points, evt);};$http.get(base_url + 'general/subasta/tiempo/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').then(function (mydata) {$scope.tiempo = mydata.data;});$http.get(base_url + 'general/subasta/puja/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').then(function (mydata) {$scope.datas = mydata.data;});$http.get(base_url + 'general/subasta/info/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').then(function (mydata) {$scope.subasta = mydata.data;});$http.get(base_url + 'general/subasta/proveedores/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').then(function (mydata) {$scope.proveedor = mydata.data;});}, 500);});<?php echo '</script'; ?>
></body></html><?php }
}
?>