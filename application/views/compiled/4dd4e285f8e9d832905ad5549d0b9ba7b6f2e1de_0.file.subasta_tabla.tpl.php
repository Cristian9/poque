<?php /* Smarty version 3.1.27, created on 2017-12-06 23:17:29
         compiled from "C:\wamp\www\subasta\application\views\templates\manager\subasta_tabla.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:73095a28c0d9722638_03992289%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dd4e285f8e9d832905ad5549d0b9ba7b6f2e1de' => 
    array (
      0 => 'C:\\wamp\\www\\subasta\\application\\views\\templates\\manager\\subasta_tabla.tpl',
      1 => 1512616683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73095a28c0d9722638_03992289',
  'variables' => 
  array (
    'lista' => 0,
    'i' => 0,
    'l' => 0,
    'get_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a28c0d97dc265_65354819',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a28c0d97dc265_65354819')) {
function content_5a28c0d97dc265_65354819 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '73095a28c0d9722638_03992289';
?>
<div class="table-responsive box-red1 tablared1">
	<table class="table table-bordered table-hover datatable">
		<thead>
			<tr>
				<th width="10">N°</th>
				<th width="150">Producto / Bien</th>
				<th width="70">Cliente</th>
				<th width="120">Precio Base</th>
				<th width="110">T. descuento</th>
				<th width="110">Monto desc.</th>
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
				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['producto'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['cliente'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['precio_base'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['tipo_descuento'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['descuento_minimo'];?>
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