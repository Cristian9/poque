<?php /* Smarty version 3.1.27, created on 2018-11-29 20:26:58
         compiled from "C:\xampp\htdocs\subasta_project\application\views\templates\plantilla\p_vacio.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10885787805c0091e20f2626_21214643%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f73ec9813fd1258cb33f1d3e83418c449a74ac78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\subasta_project\\application\\views\\templates\\plantilla\\p_vacio.tpl',
      1 => 1523749522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10885787805c0091e20f2626_21214643',
  'variables' => 
  array (
    'modulo' => 0,
    'pagina' => 0,
    'titulo_pagina' => 0,
    'contenido' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c0091e20f61c1_91143619',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c0091e20f61c1_91143619')) {
function content_5c0091e20f61c1_91143619 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10885787805c0091e20f2626_21214643';
?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Módulo
			<small><?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
			<li class="active"><?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
</li>
		</ol>
   </section>
	<section class="content">
		<div class="row">
			<div class="col-sm-12">
				<div class="box box-danger">
					<div class="box-header with-border">
						<h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['titulo_pagina']->value;?>
</h3>
					</div>
					<div class="box-body">
						<div class="response"></div>
						<?php echo $_smarty_tpl->tpl_vars['contenido']->value;?>

					</div>
				</div>
			</div>
		</div>
	</section>
</div><?php }
}
?>