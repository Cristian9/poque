<?php /* Smarty version 3.1.27, created on 2017-12-09 22:13:05
         compiled from "/home/enviroco/public_html/subasta/application/views/templates/cliente/menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19494462215a2ca641a21df6_05653556%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a649a8edbf58e6e0ce68d618c7d2be71d6ca1329' => 
    array (
      0 => '/home/enviroco/public_html/subasta/application/views/templates/cliente/menu.tpl',
      1 => 1512875578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19494462215a2ca641a21df6_05653556',
  'variables' => 
  array (
    'active' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2ca641b3ccd4_24559368',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2ca641b3ccd4_24559368')) {
function content_5a2ca641b3ccd4_24559368 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19494462215a2ca641a21df6_05653556';
?>
<ul class="sidebar-menu" data-widget="tree">
	<li class="header"><b>MENÚ</b></li>

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