<?php /* Smarty version 3.1.27, created on 2018-02-16 17:15:42
         compiled from "/home/enviroco/public_html/subasta/application/views/templates/plantilla/p_vacio.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10727148485a87580e517d19_55144762%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab715e0b227f8c70cdf8e7ac88578a45af0e5ecd' => 
    array (
      0 => '/home/enviroco/public_html/subasta/application/views/templates/plantilla/p_vacio.tpl',
      1 => 1518747910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10727148485a87580e517d19_55144762',
  'variables' => 
  array (
    'modulo' => 0,
    'pagina' => 0,
    'titulo_pagina' => 0,
    'contenido' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a87580e617555_92858120',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a87580e617555_92858120')) {
function content_5a87580e617555_92858120 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10727148485a87580e517d19_55144762';
?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Modulo
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