<?php /* Smarty version 3.1.27, created on 2018-02-15 21:33:49
         compiled from "C:\wamp\www\subasta_angular\application\views\templates\manager\preguntas_frecuentes_tabla.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:135915a86430d9f6cc9_79494282%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd83259718b9d8aeea11e17f4ef1a0d28ef4c288' => 
    array (
      0 => 'C:\\wamp\\www\\subasta_angular\\application\\views\\templates\\manager\\preguntas_frecuentes_tabla.tpl',
      1 => 1518748315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135915a86430d9f6cc9_79494282',
  'variables' => 
  array (
    'lista' => 0,
    'l' => 0,
    'get_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a86430da6f2b6_58267502',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a86430da6f2b6_58267502')) {
function content_5a86430da6f2b6_58267502 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '135915a86430d9f6cc9_79494282';
?>
<div class="table-responsive box-red1 tablared1">
	<table class="table table-bordered table-hover datatable">
		
		<thead>
			<tr>
				<th width="200">Pregunta</th>
				<th width="80">Acción</th>
			</tr>
		</thead>

		<tbody>
			<?php
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
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['pregunta'];?>
</td>
				<td class="text-center"><?php echo accion($_smarty_tpl->tpl_vars['l']->value['id'],'editar|denegar|permitir|eliminar',$_smarty_tpl->tpl_vars['get_url']->value,$_smarty_tpl->tpl_vars['l']->value['oculto']);?>
</td>
			</tr>
			<?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>
		</tbody>

	</table>
</div><?php }
}
?>