<?php /* Smarty version 3.1.27, created on 2018-02-15 21:25:23
         compiled from "C:\wamp\www\subasta_angular\application\views\templates\plantilla\p_vacio.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:319215a86411309d8f8_85022104%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd2406a2f3efc336bc098a0865e13043cc79a8b1' => 
    array (
      0 => 'C:\\wamp\\www\\subasta_angular\\application\\views\\templates\\plantilla\\p_vacio.tpl',
      1 => 1518747911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319215a86411309d8f8_85022104',
  'variables' => 
  array (
    'modulo' => 0,
    'pagina' => 0,
    'titulo_pagina' => 0,
    'contenido' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a8641130fe8e4_41148419',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a8641130fe8e4_41148419')) {
function content_5a8641130fe8e4_41148419 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '319215a86411309d8f8_85022104';
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