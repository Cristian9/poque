<?php /* Smarty version 3.1.27, created on 2018-12-01 10:04:00
         compiled from "C:\xampp\htdocs\subasta_project\application\views\templates\plantilla\p_formulario.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18853201135c02a2e042e875_61860667%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9785c8e8c3cdd41a86c56a4e5185319c563a4eb3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\subasta_project\\application\\views\\templates\\plantilla\\p_formulario.tpl',
      1 => 1523651944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18853201135c02a2e042e875_61860667',
  'variables' => 
  array (
    'modulo' => 0,
    'get_url' => 0,
    'pagina' => 0,
    'form' => 0,
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c02a2e0435977_62600386',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c02a2e0435977_62600386')) {
function content_5c02a2e0435977_62600386 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18853201135c02a2e042e875_61860667';
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
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
listar"><i class="fa fa-list"></i> Listar <?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
</a></li>
			<li class="active"><?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
</li>
		</ol>
    </section>

	<section class="content">
		<form class="bform" action="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
accion" method="post">
			<div class="box box-danger">
				<div class="box-body">
					<div class="response"></div>
					<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-danger save">Guardar</button>
					<input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['id'];
}?>">
				</div>
			</div>
		</form>
	</section>
</div><?php }
}
?>