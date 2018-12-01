<?php /* Smarty version 3.1.27, created on 2018-12-01 10:05:44
         compiled from "C:\xampp\htdocs\subasta_project\application\views\templates\plantilla\p_observar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13060012385c02a348db0dc9_78782679%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38e997dcab484867f9de2086e30c15244a858828' => 
    array (
      0 => 'C:\\xampp\\htdocs\\subasta_project\\application\\views\\templates\\plantilla\\p_observar.tpl',
      1 => 1523652004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13060012385c02a348db0dc9_78782679',
  'variables' => 
  array (
    'modulo' => 0,
    'get_url' => 0,
    'pagina' => 0,
    'detalle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c02a348db5006_39847590',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c02a348db5006_39847590')) {
function content_5c02a348db5006_39847590 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13060012385c02a348db0dc9_78782679';
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
		<div class="box box-danger">
			<div class="box-body">
				<div class="response"></div>
				<?php echo $_smarty_tpl->tpl_vars['detalle']->value;?>

			</div>
			<div class="box-footer">
			</div>
		</div>
	</section>
</div><?php }
}
?>