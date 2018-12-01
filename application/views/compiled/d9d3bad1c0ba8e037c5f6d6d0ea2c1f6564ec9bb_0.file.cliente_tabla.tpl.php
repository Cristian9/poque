<?php /* Smarty version 3.1.27, created on 2017-12-06 21:56:18
         compiled from "C:\wamp\www\subasta\application\views\templates\manager\cliente_tabla.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:104655a28add2d59b19_70484896%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9d3bad1c0ba8e037c5f6d6d0ea2c1f6564ec9bb' => 
    array (
      0 => 'C:\\wamp\\www\\subasta\\application\\views\\templates\\manager\\cliente_tabla.tpl',
      1 => 1512615361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104655a28add2d59b19_70484896',
  'variables' => 
  array (
    'lista' => 0,
    'i' => 0,
    'l' => 0,
    'get_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a28add2e088a2_67324428',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a28add2e088a2_67324428')) {
function content_5a28add2e088a2_67324428 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '104655a28add2d59b19_70484896';
?>
<div class="table-responsive box-red1 tablared1">
	<table class="table table-bordered table-hover datatable">
		<thead>
			<tr>
				<th width="10">N°</th>
				<th width="150">Nombre</th>
				<th width="70">Ruc</th>
				<th width="120">Departamento</th>
				<th width="110">Provincia</th>
				<th width="110">Distrito</th>
				<th width="100">F. Registro</th>
				<th width="90">Acción</th>
			</tr>
		</thead>

		<tbody>
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(1, null, 0);?>
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
				<td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['n_documento'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['departamento'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['provincia'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['distrito'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['f_registro'];?>
</td>
				<td class="text-center"><?php echo accion($_smarty_tpl->tpl_vars['l']->value['id'],'editar|denegar|permitir',$_smarty_tpl->tpl_vars['get_url']->value,$_smarty_tpl->tpl_vars['l']->value['oculto']);?>
</td>
			</tr>
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
			<?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>
		</tbody>
	</table>
</div><?php }
}
?>