<?php /* Smarty version 3.1.27, created on 2018-02-16 17:14:59
         compiled from "/home/enviroco/public_html/subasta/application/views/templates/proveedor/menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1970468355a8757e32e02c0_69810076%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db258a5953bbfd1ed5573b7e2f718346015b6bd4' => 
    array (
      0 => '/home/enviroco/public_html/subasta/application/views/templates/proveedor/menu.tpl',
      1 => 1518748446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1970468355a8757e32e02c0_69810076',
  'variables' => 
  array (
    'active' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a8757e36a5e80_61224644',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a8757e36a5e80_61224644')) {
function content_5a8757e36a5e80_61224644 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1970468355a8757e32e02c0_69810076';
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
proveedor/subasta/listar">
			<i class="fa fa-university"></i> <span>Subastas</span>
		</a>
	</li>

	<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'preguntas_frecuentes') {?>active<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
proveedor/preguntas_frecuentes/listar">
			<i class="fa fa-comments"></i> <span>Preguntas frecuentes</span>
		</a>
	</li>

</ul><?php }
}
?>