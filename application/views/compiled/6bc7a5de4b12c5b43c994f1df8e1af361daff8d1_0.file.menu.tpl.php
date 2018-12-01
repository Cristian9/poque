<?php /* Smarty version 3.1.27, created on 2018-10-26 19:26:09
         compiled from "/home/mycminesac/public_html/subasta/application/views/templates/manager/menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12950092325bd3b0a1e06331_48297912%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bc7a5de4b12c5b43c994f1df8e1af361daff8d1' => 
    array (
      0 => '/home/mycminesac/public_html/subasta/application/views/templates/manager/menu.tpl',
      1 => 1523419354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12950092325bd3b0a1e06331_48297912',
  'variables' => 
  array (
    'active' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bd3b0a24ede38_97514232',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bd3b0a24ede38_97514232')) {
function content_5bd3b0a24ede38_97514232 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12950092325bd3b0a1e06331_48297912';
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