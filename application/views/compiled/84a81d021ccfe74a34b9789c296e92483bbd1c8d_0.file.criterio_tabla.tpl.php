<?php /* Smarty version 3.1.27, created on 2018-05-17 12:12:29
         compiled from "/home/applecoin/public_html/subasta/application/views/templates/manager/criterio_tabla.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15062380535afdb7fdd0e272_59303782%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84a81d021ccfe74a34b9789c296e92483bbd1c8d' => 
    array (
      0 => '/home/applecoin/public_html/subasta/application/views/templates/manager/criterio_tabla.tpl',
      1 => 1526577126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15062380535afdb7fdd0e272_59303782',
  'variables' => 
  array (
    'lista' => 0,
    'l' => 0,
    'get_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5afdb7fde3dbb8_13285646',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5afdb7fde3dbb8_13285646')) {
function content_5afdb7fde3dbb8_13285646 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15062380535afdb7fdd0e272_59303782';
?>
<div class="table-responsive box-red1 tablared1">
	<table class="table table-bordered table-hover datatable">
		
		<thead>
			<tr>
				
				<th width="200">Criterio</th>
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