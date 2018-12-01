<?php /* Smarty version 3.1.27, created on 2018-02-15 21:34:09
         compiled from "C:\wamp\www\subasta_angular\application\views\templates\proveedor\menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29955a864321510b16_99703628%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f634a9d2ac6c5439670644f9e1b4d9c0641965f' => 
    array (
      0 => 'C:\\wamp\\www\\subasta_angular\\application\\views\\templates\\proveedor\\menu.tpl',
      1 => 1518748447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29955a864321510b16_99703628',
  'variables' => 
  array (
    'active' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a86432158be91_49490728',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a86432158be91_49490728')) {
function content_5a86432158be91_49490728 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29955a864321510b16_99703628';
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