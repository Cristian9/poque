<?php /* Smarty version 3.1.27, created on 2018-12-01 10:26:42
         compiled from "C:\xampp\htdocs\subasta_project\application\views\templates\manager\subasta_pregunta_tabla.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3217531295c02a832ebf2d5_93039721%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f7db30a2b5e0c2f6f4e15ab0242eca644be158a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\subasta_project\\application\\views\\templates\\manager\\subasta_pregunta_tabla.tpl',
      1 => 1521252874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3217531295c02a832ebf2d5_93039721',
  'variables' => 
  array (
    'lista' => 0,
    'l' => 0,
    'get_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c02a832f23514_35622918',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c02a832f23514_35622918')) {
function content_5c02a832f23514_35622918 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3217531295c02a832ebf2d5_93039721';
?>
<div class="table-responsive box-red1 tablared1">

	<table class="table table-bordered table-hover datatable">

		

		<thead>

			<tr>

				<th width="200">Usuario</th>
				
				<th width="200">Pregunta</th>

				<th width="200">Respuesta</th>

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

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['usuario'];?>
</td>
				
				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['pregunta'];?>
</td>

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['respuesta'];?>
</td>

				<td class="text-center"><?php echo accion($_smarty_tpl->tpl_vars['l']->value['id'],'editar',$_smarty_tpl->tpl_vars['get_url']->value,$_smarty_tpl->tpl_vars['l']->value['oculto']);?>
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