<?php /* Smarty version 3.1.27, created on 2018-03-12 12:17:11
         compiled from "/home/applecoin/public_html/subasta/application/views/templates/proveedor/menu_top.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11440585885aa6b6177ebc87_34178228%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15ab78983c0140c03ca6137ae01f552bf7960430' => 
    array (
      0 => '/home/applecoin/public_html/subasta/application/views/templates/proveedor/menu_top.tpl',
      1 => 1520875002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11440585885aa6b6177ebc87_34178228',
  'variables' => 
  array (
    'active' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5aa6b617bb65e8_24391484',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa6b617bb65e8_24391484')) {
function content_5aa6b617bb65e8_24391484 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11440585885aa6b6177ebc87_34178228';
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