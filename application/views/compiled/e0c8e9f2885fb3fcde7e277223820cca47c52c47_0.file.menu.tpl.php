<?php /* Smarty version 3.1.27, created on 2018-04-10 23:54:22
         compiled from "/home/applecoin/public_html/subasta/application/views/templates/cliente/menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3773247405acd94fe2b0cf1_13975834%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0c8e9f2885fb3fcde7e277223820cca47c52c47' => 
    array (
      0 => '/home/applecoin/public_html/subasta/application/views/templates/cliente/menu.tpl',
      1 => 1523422458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3773247405acd94fe2b0cf1_13975834',
  'variables' => 
  array (
    'active' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5acd94fe3cd3c3_80105822',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5acd94fe3cd3c3_80105822')) {
function content_5acd94fe3cd3c3_80105822 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3773247405acd94fe2b0cf1_13975834';
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
cliente/subasta/listar" class="dash-maticon1">
			<i class="material-icons">gavel</i> <span>Subastas</span>
		</a>
	</li>

</ul><?php }
}
?>