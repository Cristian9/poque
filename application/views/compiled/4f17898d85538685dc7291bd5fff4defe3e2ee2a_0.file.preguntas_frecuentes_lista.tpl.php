<?php /* Smarty version 3.1.27, created on 2018-02-16 17:15:42
         compiled from "/home/enviroco/public_html/subasta/application/views/templates/proveedor/preguntas_frecuentes_lista.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19836139905a87580e16bcb7_29465813%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f17898d85538685dc7291bd5fff4defe3e2ee2a' => 
    array (
      0 => '/home/enviroco/public_html/subasta/application/views/templates/proveedor/preguntas_frecuentes_lista.tpl',
      1 => 1518748144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19836139905a87580e16bcb7_29465813',
  'variables' => 
  array (
    'lista' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a87580e4cb2a3_49131367',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a87580e4cb2a3_49131367')) {
function content_5a87580e4cb2a3_49131367 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19836139905a87580e16bcb7_29465813';
$_from = $_smarty_tpl->tpl_vars['lista']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?>
	<ul>
		<li><b><?php echo $_smarty_tpl->tpl_vars['l']->value['pregunta'];?>
</b></li>
		<ol><?php echo $_smarty_tpl->tpl_vars['l']->value['respuesta'];?>
</ol>
	</ul>
<?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
}
}
?>