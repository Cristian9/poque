<?php /* Smarty version 3.1.27, created on 2018-04-10 23:15:41
         compiled from "/home/applecoin/public_html/subasta/application/views/templates/proveedor/menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3667675035acd8bed4dfca0_15726973%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1a32fff57df9388d69699129046874ecfcc6683' => 
    array (
      0 => '/home/applecoin/public_html/subasta/application/views/templates/proveedor/menu.tpl',
      1 => 1523420131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3667675035acd8bed4dfca0_15726973',
  'variables' => 
  array (
    'active' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5acd8bed60a4b6_11659988',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5acd8bed60a4b6_11659988')) {
function content_5acd8bed60a4b6_11659988 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3667675035acd8bed4dfca0_15726973';
?>
<ul class="sidebar-menu" data-widget="tree">
	<li class="header"><b>MENÚ</b></li>

	<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'home') {?>active<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
proveedor/home">
			<i class="fa fa-dashboard"></i> <span>Inicio</span>
		</a>
	</li>

	<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'subasta') {?>active<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
proveedor/subasta/listar" class="dash-maticon1">
			<i class="material-icons">gavel</i> <span>Subastas</span>
		</a>
	</li>

	<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'preguntas_frecuentes') {?>active<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
proveedor/preguntas_frecuentes/listar" class="dash-maticon1">
			<i class="material-icons">help_outline</i> <span>Preguntas frecuentes</span>
		</a>
	</li>

</ul><?php }
}
?>