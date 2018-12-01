<?php /* Smarty version 3.1.27, created on 2018-03-16 20:14:36
         compiled from "/home/applecoin/public_html/subasta/application/views/templates/manager/subasta_pregunta_tabla.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12862546975aac6bfc7af311_53586475%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fdf704dfa27a8fda34965bbad34b6682f826eb4' => 
    array (
      0 => '/home/applecoin/public_html/subasta/application/views/templates/manager/subasta_pregunta_tabla.tpl',
      1 => 1521249273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12862546975aac6bfc7af311_53586475',
  'variables' => 
  array (
    'lista' => 0,
    'l' => 0,
    'get_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5aac6bfce961b7_45374803',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aac6bfce961b7_45374803')) {
function content_5aac6bfce961b7_45374803 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12862546975aac6bfc7af311_53586475';
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