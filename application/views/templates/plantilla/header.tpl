<!DOCTYPE html>

<!--

To change this license header, choose License Headers in Project Properties.

To change this template file, choose Tools | Templates

and open the template in the editor.

-->

{strip}

<html>

    <head>

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

        {*Hightchart*}

        <script type="text/javascript" src="{$base_url}public/plugins/hightchart/highcharts.js"></script>

        <script type="text/javascript" src="{$base_url}public/plugins/hightchart/drilldown.js"></script>

    </head>

{/strip}

<body class="fixed hold-transition managall-skin skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			{* Logo *}
			<a href="{$panel_url}home" class="logo">
				{* mini logo for sidebar mini 50x50 pixels *}
				<span class="logo-mini"><b>S</b>P</span>
				{* logo for regular state and mobile devices *}
				<span class="logo-lg logo-admin">
				    <img src="{$base_url}public/img/logo/logo-poque.png">
			    </span>
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
							<a href="#" class="dropdown-toggle user-bot1" data-toggle="dropdown">
								{*<img src="{$base_url}public/manager/img/user2-160x160.jpg" class="user-image" alt="User Image">*}
								{*<span class="hidden-xs">ID: {$session.usuario}</span>*}
								<span>ID: {$session.usuario}</span>
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

										<a href="{$panel_url}login/salir" class="btn btn-danger btn-flat"  style="background-color: #f16654 !important; border-color: #f16654 !important">Salir</a>

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

						<p class="ongreen1">ID: {$session.usuario}</p>

						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>

					</div>

				</div>



				{* sidebar menu *}

				{$menu}

			</section>

		

		</aside>