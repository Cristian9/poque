<?php /* Smarty version 3.1.27, created on 2018-11-28 19:42:10
         compiled from "C:\xampp\htdocs\subasta_project\application\views\templates\plantilla\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14096411725bff35e25b42a4_85805337%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aaa4dc87c24a4bc9e7badc42ce88af8ce4c341a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\subasta_project\\application\\views\\templates\\plantilla\\login.tpl',
      1 => 1523070934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14096411725bff35e25b42a4_85805337',
  'variables' => 
  array (
    'page_title' => 0,
    'base_url' => 0,
    'get_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bff35e26016a4_07803526',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bff35e26016a4_07803526')) {
function content_5bff35e26016a4_07803526 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14096411725bff35e25b42a4_85805337';
?>
<!DOCTYPE html>

<!--

To change this license header, choose License Headers in Project Properties.

To change this template file, choose Tools | Templates

and open the template in the editor.

-->

<html class="html-full">

    <head>

        <title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>

        <meta name="description" content="" />

        <meta charset="UTF-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true" />

        <meta name="KeyWords" content="" />

        <meta name="author" content="Yataco.com.pe" />

        <meta name="google-site-verification" content="" />

        <meta name="msvalidate.01" content="" />

        

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

        <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/logo/favicon.png" type="image/x-icon" />

        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/logo/favicon.png" type="image/x-icon" />

        <?php echo '<script'; ?>
> var base_url = "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
";<?php echo '</script'; ?>
>

        

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" />

        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

        <link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins:300,400,500,600,700" rel="stylesheet">

        

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/font-awesome/css/font-awesome.min.css" type="text/css" media="screen" />

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/bootstrap/css/bootstrap.min.css" type="text/css" media="screen" />





        

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/css/manager.css" type="text/css" />

    </head>

	<body class="body-full">

        <span class="bortop-10"></span>

        

        <div class="log1intro">   

            <div class="log1inner">

                <div class="log1content">

                    <section class="login-page">

                        <div class="login-box">

                            <h1 class="mytitllog1">Iniciar sesión</h1>

                            <div class="logo">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/logo/logo-poque.png" alt="" title="">
                            </div>

                            <div class="cardlog">

                                <div class="mate-frm">

                                    <form class="bform" action="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
login/ingresar" method="post">

                                        <div class="response"></div>

                                        <div class="row">

                                            <div class="form-group form-float col-md-12">

                                                <div>

                                                    <span class="form-i">

                                                        <i class="material-icons mateicon1">perm_identity</i>

                                                    </span>

                                                    <div class="form-line mat-forms">

                                                        <input type="text" class="form-control" id="usuario" name="usuario">

                                                        

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="form-group form-float col-md-12">

                                                <div>

                                                    <span class="form-i">

                                                        <i class="material-icons mateicon1">lock_outline</i>

                                                    </span>

                                                    <div class="form-line mat-forms">

                                                        <input type="password" class="form-control" id="clave" name="clave">

                                                        

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="form-group text-center col-md-12">

                                                <input type="submit" class="btn botlogin btn-form save" value="Acceder">

                                            </div>

                                        </div>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </section>

                </div>

            </div>

        </div>

        <span class="bortop-30"></span>



        



		

		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/jquery/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>

		

		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"><?php echo '</script'; ?>
>

		

		

		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/web/js/scriptlogin.js" type="text/javascript"><?php echo '</script'; ?>
>

		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/process.js" type="text/javascript"><?php echo '</script'; ?>
>



	</body>

</html><?php }
}
?>