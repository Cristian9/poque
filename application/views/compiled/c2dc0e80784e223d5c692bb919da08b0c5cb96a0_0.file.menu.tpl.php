<?php /* Smarty version 3.1.27, created on 2018-04-10 23:02:45
         compiled from "/home/applecoin/public_html/subasta/application/views/templates/manager/menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15018778585acd88e582aa30_75411976%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2dc0e80784e223d5c692bb919da08b0c5cb96a0' => 
    array (
      0 => '/home/applecoin/public_html/subasta/application/views/templates/manager/menu.tpl',
      1 => 1523419354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15018778585acd88e582aa30_75411976',
  'variables' => 
  array (
    'active' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5acd88e59b4d18_13645796',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5acd88e59b4d18_13645796')) {
function content_5acd88e59b4d18_13645796 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15018778585acd88e582aa30_75411976';
?>
<ul class="sidebar-menu" data-widget="tree">
	<li class="header"><b>MENÚ</b></li>

	<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'home') {?>active<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/home">
			<i class="fa fa-dashboard"></i> <span>Inicio</span>
		</a>
	</li>
	<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'proveedor') {?>active<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/proveedor/listar" class="dash-maticon1">
			<i class="material-icons">person_outline</i> <span>Proveedores</span>
		</a>
	</li>
	<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'cliente') {?>active<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/cliente/listar">
			<i class="fa fa-users"></i> <span>Clientes</span>
		</a>
	</li>
	<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'subasta') {?>active<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/subasta/listar" class="dash-maticon1">
			<i class="material-icons">gavel</i> <span>Subastas</span>
		</a>
	</li>
	<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'preguntas_frecuentes') {?>active<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/preguntas_frecuentes/listar" class="dash-maticon1">
			<i class="material-icons">help_outline</i> <span>Preguntas frecuentes</span>
		</a>
	</li>

	<li class="header"><b>MANTENIMIENTO</b></li>

	<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'producto') {?>active<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/producto/listar" class="dash-maticon1">
			<i class="material-icons">shopping_basket</i> <span>Producto / Servicio</span>
		</a>
	</li>

	<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'criterio') {?>active<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/criterio/listar" class="dash-maticon1">
			<i class="material-icons">label_outline</i> <span>Criterios</span>
		</a>
	</li>

</ul><?php }
}
?>