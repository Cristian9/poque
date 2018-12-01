<?php /* Smarty version 3.1.27, created on 2017-12-13 11:37:51
         compiled from "C:\wamp\www\subasta_angular\application\views\templates\cliente\menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:177135a31575f9029e1_76185482%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7680c36bf5af2f79aa7c31ec79ed3ba8fe920e50' => 
    array (
      0 => 'C:\\wamp\\www\\subasta_angular\\application\\views\\templates\\cliente\\menu.tpl',
      1 => 1512875526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177135a31575f9029e1_76185482',
  'variables' => 
  array (
    'active' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a315762268bf7_14241940',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a315762268bf7_14241940')) {
function content_5a315762268bf7_14241940 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '177135a31575f9029e1_76185482';
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
cliente/subasta/listar">
			<i class="fa fa-university"></i> <span>Subastas</span>
		</a>
	</li>

</ul><?php }
}
?>