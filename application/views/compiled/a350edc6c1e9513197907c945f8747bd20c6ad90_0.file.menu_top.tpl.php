<?php /* Smarty version 3.1.27, created on 2018-03-12 14:57:37
         compiled from "/home/applecoin/public_html/subasta/application/views/templates/cliente/menu_top.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18562714215aa6dbb15faf49_46028772%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a350edc6c1e9513197907c945f8747bd20c6ad90' => 
    array (
      0 => '/home/applecoin/public_html/subasta/application/views/templates/cliente/menu_top.tpl',
      1 => 1520884395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18562714215aa6dbb15faf49_46028772',
  'variables' => 
  array (
    'active' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5aa6dbb1ea3947_90202565',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa6dbb1ea3947_90202565')) {
function content_5aa6dbb1ea3947_90202565 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18562714215aa6dbb15faf49_46028772';
?>
<ul class="nav navbar-nav">
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