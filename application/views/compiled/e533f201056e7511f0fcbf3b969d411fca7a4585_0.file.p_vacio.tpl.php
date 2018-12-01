<?php /* Smarty version 3.1.27, created on 2018-04-14 17:53:45
         compiled from "/home/applecoin/public_html/subasta/application/views/templates/plantilla/p_vacio.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3684644785ad286799f2c97_00458666%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e533f201056e7511f0fcbf3b969d411fca7a4585' => 
    array (
      0 => '/home/applecoin/public_html/subasta/application/views/templates/plantilla/p_vacio.tpl',
      1 => 1523745922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3684644785ad286799f2c97_00458666',
  'variables' => 
  array (
    'modulo' => 0,
    'pagina' => 0,
    'titulo_pagina' => 0,
    'contenido' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ad28679a12c13_29124152',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ad28679a12c13_29124152')) {
function content_5ad28679a12c13_29124152 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3684644785ad286799f2c97_00458666';
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