<?php /* Smarty version 3.1.27, created on 2018-11-28 19:07:38
         compiled from "C:\xampp\htdocs\subasta_project\application\views\templates\cliente\menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:876388035bff2dca912e61_08363644%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6f648fd1cdd8d1ca8f6c57a2ecf35dd505650ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\subasta_project\\application\\views\\templates\\cliente\\menu.tpl',
      1 => 1523426058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '876388035bff2dca912e61_08363644',
  'variables' => 
  array (
    'active' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bff2dca9898d8_61751183',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bff2dca9898d8_61751183')) {
function content_5bff2dca9898d8_61751183 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '876388035bff2dca912e61_08363644';
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