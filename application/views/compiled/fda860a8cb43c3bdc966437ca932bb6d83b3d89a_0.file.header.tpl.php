<?php /* Smarty version 3.1.27, created on 2018-10-26 19:26:58
         compiled from "/home/mycminesac/public_html/subasta/application/views/templates/plantilla/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7799214915bd3b0d2678ec8_88820808%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fda860a8cb43c3bdc966437ca932bb6d83b3d89a' => 
    array (
      0 => '/home/mycminesac/public_html/subasta/application/views/templates/plantilla/header.tpl',
      1 => 1526080382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7799214915bd3b0d2678ec8_88820808',
  'variables' => 
  array (
    'titulo_pagina' => 0,
    'base_url' => 0,
    'panel_url' => 0,
    'session' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bd3b0d28b18c4_60551810',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bd3b0d28b18c4_60551810')) {
function content_5bd3b0d28b18c4_60551810 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7799214915bd3b0d2678ec8_88820808';
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
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/hightchart/highcharts.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/hightchart/drilldown.js"><?php echo '</script'; ?>
></head>

<body class="fixed hold-transition managall-skin skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			
			<a href="<?php echo $_smarty_tpl->tpl_vars['panel_url']->value;?>
home" class="logo">
				
				<span class="logo-mini"><b>S</b>P</span>
				
				<span class="logo-lg logo-admin">
				    <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/logo/logo-poque.png">
			    </span>
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
							<a href="#" class="dropdown-toggle user-bot1" data-toggle="dropdown">
								
								
								<span>ID: <?php echo $_smarty_tpl->tpl_vars['session']->value['usuario'];?>
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
login/salir" class="btn btn-danger btn-flat"  style="background-color: #f16654 !important; border-color: #f16654 !important">Salir</a>

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

						<p class="ongreen1">ID: <?php echo $_smarty_tpl->tpl_vars['session']->value['usuario'];?>
</p>

						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>

					</div>

				</div>



				

				<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


			</section>

		

		</aside><?php }
}
?>