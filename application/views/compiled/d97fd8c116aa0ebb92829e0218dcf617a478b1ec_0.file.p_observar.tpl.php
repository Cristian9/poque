<?php /* Smarty version 3.1.27, created on 2018-04-13 14:42:26
         compiled from "/home/applecoin/public_html/subasta/application/views/templates/plantilla/p_observar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:398957885ad10822165465_28296210%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd97fd8c116aa0ebb92829e0218dcf617a478b1ec' => 
    array (
      0 => '/home/applecoin/public_html/subasta/application/views/templates/plantilla/p_observar.tpl',
      1 => 1523648403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '398957885ad10822165465_28296210',
  'variables' => 
  array (
    'modulo' => 0,
    'get_url' => 0,
    'pagina' => 0,
    'detalle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ad10822974560_15616820',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ad10822974560_15616820')) {
function content_5ad10822974560_15616820 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '398957885ad10822165465_28296210';
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