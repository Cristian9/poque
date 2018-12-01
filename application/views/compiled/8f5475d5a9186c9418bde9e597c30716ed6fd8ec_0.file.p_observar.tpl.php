<?php /* Smarty version 3.1.27, created on 2018-01-09 20:07:02
         compiled from "C:\wamp\www\subasta_angular\application\views\templates\plantilla\p_observar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:323105a5567369a2244_82608435%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f5475d5a9186c9418bde9e597c30716ed6fd8ec' => 
    array (
      0 => 'C:\\wamp\\www\\subasta_angular\\application\\views\\templates\\plantilla\\p_observar.tpl',
      1 => 1515546416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323105a5567369a2244_82608435',
  'variables' => 
  array (
    'modulo' => 0,
    'get_url' => 0,
    'pagina' => 0,
    'detalle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a556736a08cc3_05672965',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a556736a08cc3_05672965')) {
function content_5a556736a08cc3_05672965 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '323105a5567369a2244_82608435';
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