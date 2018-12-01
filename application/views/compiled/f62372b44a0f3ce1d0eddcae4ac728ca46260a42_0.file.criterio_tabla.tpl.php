<?php /* Smarty version 3.1.27, created on 2017-12-10 12:37:25
         compiled from "/home/enviroco/public_html/subasta/application/views/templates/manager/criterio_tabla.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10411612505a2d70d5889263_57254172%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f62372b44a0f3ce1d0eddcae4ac728ca46260a42' => 
    array (
      0 => '/home/enviroco/public_html/subasta/application/views/templates/manager/criterio_tabla.tpl',
      1 => 1512620360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10411612505a2d70d5889263_57254172',
  'variables' => 
  array (
    'lista' => 0,
    'l' => 0,
    'get_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2d70d5b43755_43282875',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2d70d5b43755_43282875')) {
function content_5a2d70d5b43755_43282875 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10411612505a2d70d5889263_57254172';
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