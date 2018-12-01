<?php /* Smarty version 3.1.27, created on 2018-11-29 19:44:39
         compiled from "C:\xampp\htdocs\subasta_project\application\views\templates\cliente\menu_top.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6567730935c0087f76e7788_82995940%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83655584654956f57a4486c5d2c84468736bfe29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\subasta_project\\application\\views\\templates\\cliente\\menu_top.tpl',
      1 => 1520887996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6567730935c0087f76e7788_82995940',
  'variables' => 
  array (
    'active' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c0087f776cec0_46023021',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c0087f776cec0_46023021')) {
function content_5c0087f776cec0_46023021 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6567730935c0087f76e7788_82995940';
?>
<ul class="nav navbar-nav">
	<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'home') {?>active<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
cliente/home">
			<i class="fa fa-dashboard"></i> <span>Inicio</span>
		</a>
	</li>

	<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'subasta') {?>active<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
cliente/subasta/listar">
			<i class="fa fa-university"></i> <span>Subastas</span>
		</a>
	</li>
</ul><?php }
}
?>