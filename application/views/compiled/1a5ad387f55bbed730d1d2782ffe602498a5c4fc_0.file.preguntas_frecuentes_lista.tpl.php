<?php /* Smarty version 3.1.27, created on 2018-12-01 10:00:15
         compiled from "C:\xampp\htdocs\subasta_project\application\views\templates\proveedor\preguntas_frecuentes_lista.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8510130555c02a1ff146750_63554585%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a5ad387f55bbed730d1d2782ffe602498a5c4fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\subasta_project\\application\\views\\templates\\proveedor\\preguntas_frecuentes_lista.tpl',
      1 => 1518748144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8510130555c02a1ff146750_63554585',
  'variables' => 
  array (
    'lista' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c02a1ff1a0426_99865547',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c02a1ff1a0426_99865547')) {
function content_5c02a1ff1a0426_99865547 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8510130555c02a1ff146750_63554585';
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