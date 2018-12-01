<?php /* Smarty version 3.1.27, created on 2018-12-01 09:57:32
         compiled from "C:\xampp\htdocs\subasta_project\application\views\templates\proveedor\menu_top.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1580984915c02a15c11e029_88169492%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6d169a9563399db7ca0246e95bc57787ee86eaf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\subasta_project\\application\\views\\templates\\proveedor\\menu_top.tpl',
      1 => 1520878602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1580984915c02a15c11e029_88169492',
  'variables' => 
  array (
    'active' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c02a15c171989_14127042',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c02a15c171989_14127042')) {
function content_5c02a15c171989_14127042 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1580984915c02a15c11e029_88169492';
?>
<ul class="nav navbar-nav">
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