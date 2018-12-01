<?php /* Smarty version 3.1.27, created on 2018-02-15 21:29:04
         compiled from "C:\wamp\www\subasta_angular\application\views\templates\proveedor\preguntas_frecuentes_lista.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:64825a8641f0e44af9_68891960%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d6edd7e440831cdf18e29ad7fdeeba3a54e1c6d' => 
    array (
      0 => 'C:\\wamp\\www\\subasta_angular\\application\\views\\templates\\proveedor\\preguntas_frecuentes_lista.tpl',
      1 => 1518748144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64825a8641f0e44af9_68891960',
  'variables' => 
  array (
    'lista' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a8641f0e99938_97102950',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a8641f0e99938_97102950')) {
function content_5a8641f0e99938_97102950 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '64825a8641f0e44af9_68891960';
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