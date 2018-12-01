<?php /* Smarty version 3.1.27, created on 2017-12-06 23:15:10
         compiled from "C:\wamp\www\subasta\application\views\templates\manager\menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31535a28c04e9fc996_84058849%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b5f9b14345ee9f1468e0b2d6a09864dd90b4179' => 
    array (
      0 => 'C:\\wamp\\www\\subasta\\application\\views\\templates\\manager\\menu.tpl',
      1 => 1512620085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31535a28c04e9fc996_84058849',
  'variables' => 
  array (
    'active' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a28c04ea5ac55_38695846',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a28c04ea5ac55_38695846')) {
function content_5a28c04ea5ac55_38695846 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31535a28c04e9fc996_84058849';
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
manager/proveedor/listar">
			<i class="fa fa-university"></i> <span>Proveedores</span>
		</a>
	</li>
	<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'cliente') {?>active<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/cliente/listar">
			<i class="fa fa-university"></i> <span>Clientes</span>
		</a>
	</li>
	<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'subasta') {?>active<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/subasta/listar">
			<i class="fa fa-university"></i> <span>Subastas</span>
		</a>
	</li>

	<li class="header header-sub1"><b>MANTENIMIENTO</b></li>

	<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'producto') {?>active<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/producto/listar">
			<i class="fa fa-database"></i> <span>Producto / Servicio</span>
		</a>
	</li>

	<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'criterio') {?>active<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/criterio/listar">
			<i class="fa fa-credit-card"></i> <span>Criterios</span>
		</a>
	</li>

</ul><?php }
}
?>