<?php /* Smarty version 3.1.27, created on 2017-12-10 12:37:23
         compiled from "/home/enviroco/public_html/subasta/application/views/templates/manager/producto_tabla.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21096657475a2d70d38a3b38_25291733%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd04cc6fdf743085ce984d7af8b5a6e26b38ea2ab' => 
    array (
      0 => '/home/enviroco/public_html/subasta/application/views/templates/manager/producto_tabla.tpl',
      1 => 1508212280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21096657475a2d70d38a3b38_25291733',
  'variables' => 
  array (
    'lista' => 0,
    'l' => 0,
    'get_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2d70d409d829_12974659',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2d70d409d829_12974659')) {
function content_5a2d70d409d829_12974659 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21096657475a2d70d38a3b38_25291733';
?>
<div class="table-responsive box-red1 tablared1">
	<table class="table table-bordered table-hover datatable">
		
		<thead>
			<tr>
				
				<th width="200">Nombre</th>
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
				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['nombre'];?>
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