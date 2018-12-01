<?php /* Smarty version 3.1.27, created on 2018-11-29 20:48:20
         compiled from "C:\xampp\htdocs\subasta_project\application\views\templates\proveedor\menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14074897055c0096e490bfe0_44660596%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ef439a7886fd2ed8f44e6447607655d77a7924b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\subasta_project\\application\\views\\templates\\proveedor\\menu.tpl',
      1 => 1523423732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14074897055c0096e490bfe0_44660596',
  'variables' => 
  array (
    'active' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c0096e497a710_15077996',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c0096e497a710_15077996')) {
function content_5c0096e497a710_15077996 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14074897055c0096e490bfe0_44660596';
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